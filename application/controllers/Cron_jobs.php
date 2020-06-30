<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Subscription
 * https://itinfoway.com
 * @author Admin
 */
class Cron_jobs extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if (date("N") != 6 && date("N") != 7) {
            $this->load->model("subscription_model");
//echo date("Y-m-d",strtotime("+1 day"));
            $this->load->model("local_setting_model");
            $this->load->model("user_model");
            $this->load->model("order_details_model");
            $this->load->model("order_item_model");
            $this->load->model("ledger_model");
            $config = $this->local_setting_model->view("publishable_key,secret_key");
            $stripe = array(
                "secret_key" => $config[0]->secret_key,
                "publishable_key" => $config[0]->publishable_key
            );
            require_once APPPATH . "third_party/stripe/init.php";
            \Stripe\Stripe::setApiKey($stripe['secret_key']);

            $data = $this->subscription_model->view(["from_date <=" => date("Y-m-d"), "to_date >=" => date("Y-m-d"),"status"=>0]);
            print_r($data);
            foreach ($data as $d) {
                if ($d->day_of_week != '1d2w') {
                    if (is_null($d->last_order_date) || strtotime($d->last_order_date) < strtotime(date("Y-m-d", strtotime("+7 day")))) {
                        if (is_null($d->next_order_date) || strtotime($d->next_order_date) == strtotime(date("Y-m-d"))) {
                            echo $d->day_of_week;

                            $user = $this->user_model->view($d->user_id);

                            $currency = "SGD";
                            $itemName = date("Ymd", strtotime("+1 day")) . sprintf("%04d", $d->id);
                            $itemNumber = "SUBS" . sprintf("%06d", $d->id);
                            $chargeArray = array(
                                "customer" => $user[0]->strip_id,
                                'amount' => ($d->total_amount * 100),
                                'currency' => $currency,
                                'description' => $itemNumber,
                                'metadata' => array(
                                    'item_id' => $itemNumber
                                )
                            );
                            $chargeArray["source"] = $d->stripe_card_id;
                            $charge = \Stripe\Charge::create($chargeArray);
                            $chargeJson = $charge->jsonSerialize();
                            if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
                                $product = array();
                                $totalItem = 0;
                                foreach (json_decode($d->products) as $pro) {
                                    $product[$pro->name] = $pro->id;
                                    $totalItem +=$pro->item;
                                }
                                $days_of = json_decode($d->days);
                                $countDaty = 1;
                                $myoid = array();
                                for ($di = 0; $di < count($days_of);) {
                                    if ($countDaty == 8) {
                                        break;
                                    }
                                    if (in_array(date("N", strtotime("+$countDaty day")), $days_of)) {
                                        $order_details["user_id"] = $d->user_id;
                                        $order_details["type"] = 2;
                                        $order_details["order_date"] = date("Y-m-d");
                                        $order_details["delivered_on_day"] = date("N", strtotime("+$countDaty day"));
                                        $order_details["products"] = json_encode($product);
                                        $order_details["delivered_on_date"] = date("Y-m-d", strtotime("+$countDaty day"));
                                        $order_details["delivered_on_time"] = "";
                                        $order_details["total_item"] = $totalItem;
                                        $order_details["total_price"] = $d->total_amount;
                                        $order_details["address_type"] = $d->address_type;
                                        $order_details["lat_lng"] = $d->latitude . "," . $d->longitude;
                                        $order_details["address"] = $d->address;
                                        $order_details["city"] = $d->city;
                                        $order_details["postalcode"] = $d->postalcode;
                                        $order_details["state"] = $d->state;
                                        $order_details["country"] = $d->country;
                                        $oId = $this->order_details_model->add($order_details);
                                        if ($oId) {
                                            foreach (json_decode($d->products) as $pro) {
                                                $temp = array();
                                                $temp["name"] = $pro->name;
                                                $temp["product_id"] = $pro->id;
                                                $temp["order_details_id"] = $oId;
                                                $temp["fruits_name"] = json_encode($pro->fruit);
                                                $temp["items"] = $pro->item;
                                                $temp["price"] = $pro->price;
                                                $temp["total_price"] = ($pro->item * $pro->price);
                                                $this->order_item_model->add($temp);
                                            }
                                        }
                                        $myoid[] = str_pad($oId, 4, '0', STR_PAD_LEFT);
                                        $di++;
                                    }
                                    $countDaty++;
                                }
                                if (!empty($myoid)) {
                                    $orderID = "SUBSCRIPTION" . date("Ymd") . implode("/", $myoid);
                                    $amount = $chargeJson['amount'] / 100;
                                    $balance_transaction = $chargeJson['balance_transaction'];
                                    $currency = $chargeJson['currency'];
                                    $status = $chargeJson['status'];
                                    $ledger = array(
                                        'user_id' => $user[0]->id,
                                        'type' => "3",
                                        'orderid' => $orderID,
                                        'date_time' => date("Y-m-d H:i:s"),
                                        'item_name' => $itemName,
                                        'item_number' => $itemNumber,
                                        'item_price' => $d->total_amount,
                                        'item_price_currency' => $currency,
                                        'amount' => $amount,
                                        'paid_amount_currency' => $currency,
                                        'txn_id' => $balance_transaction,
                                        'payment_status' => $status,
                                    );
                                    $this->ledger_model->add($ledger);
                                    $data = $this->subscription_model->edit(["last_order_date" => date("Y-m-d", strtotime("+1 day")), "next_order_date" => date("Y-m-d", strtotime("+14 day"))], $d->id);
                                }
                            } else {
                                
                            }
                        }
                    }
                } else {
                    if (is_null($d->last_order_date) || strtotime($d->last_order_date) < strtotime(date("Y-m-d", strtotime("+14 day")))) {
                        if (is_null($d->next_order_date) || strtotime($d->next_order_date) == strtotime(date("Y-m-d"))) {

                            $user = $this->user_model->view($d->user_id);

                            $currency = "SGD";
                            $itemName = date("Ymd", strtotime("+1 day")) . sprintf("%04d", $d->id);
                            $itemNumber = "SUBS" . sprintf("%06d", $d->id);
                            $chargeArray = array(
                                "customer" => $user[0]->strip_id,
                                'amount' => ($d->total_amount * 100),
                                'currency' => $currency,
                                'description' => $itemNumber,
                                'metadata' => array(
                                    'item_id' => $itemNumber
                                )
                            );
                            $chargeArray["source"] = $d->stripe_card_id;
                            $charge = \Stripe\Charge::create($chargeArray);
                            $chargeJson = $charge->jsonSerialize();
                            if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
                                $product = array();
                                $totalItem = 0;
                                foreach (json_decode($d->products) as $pro) {
                                    $product[$pro->name] = $pro->id;
                                    $totalItem +=$pro->item;
                                }
                                $days_of = json_decode($d->days);
                                $countDaty = 1;
                                $myoid = array();
                                for ($di = 0; $di < count($days_of);) {
                                    if ($countDaty == 8) {
                                        break;
                                    }
                                    if (in_array(date("N", strtotime("+$countDaty day")), $days_of)) {
                                        echo $countDaty;
                                        $order_details["user_id"] = $d->user_id;
                                        $order_details["type"] = 2;
                                        $order_details["order_date"] = date("Y-m-d");
                                        $order_details["delivered_on_day"] = date("N", strtotime("+$countDaty day"));
                                        $order_details["products"] = json_encode($product);
                                        $order_details["delivered_on_date"] = date("Y-m-d", strtotime("+$countDaty day"));
                                        $order_details["delivered_on_time"] = "";
                                        $order_details["total_item"] = $totalItem;
                                        $order_details["total_price"] = $d->total_amount;
                                        $order_details["address_type"] = $d->address_type;
                                        $order_details["lat_lng"] = $d->latitude . "," . $d->longitude;
                                        $order_details["address"] = $d->address;
                                        $order_details["city"] = $d->city;
                                        $order_details["postalcode"] = $d->postalcode;
                                        $order_details["state"] = $d->state;
                                        $order_details["country"] = $d->country;
                                        $oId = $this->order_details_model->add($order_details);
                                        if ($oId) {
                                            foreach (json_decode($d->products) as $pro) {
                                                $temp = array();
                                                $temp["name"] = $pro->name;
                                                $temp["product_id"] = $pro->id;
                                                $temp["order_details_id"] = $oId;
                                                $temp["fruits_name"] = json_encode($pro->fruit);
                                                $temp["items"] = $pro->item;
                                                $temp["price"] = $pro->price;
                                                $temp["total_price"] = ($pro->item * $pro->price);
                                                $this->order_item_model->add($temp);
                                            }
                                        }
                                        $myoid[] = str_pad($oId, 4, '0', STR_PAD_LEFT);
                                        $di++;
                                    }
                                    $countDaty++;
                                }
                                if (!empty($myoid)) {
                                    $orderID = "SUBSCRIPTION" . date("Ymd") . implode("/", $myoid);
                                    $amount = $chargeJson['amount'] / 100;
                                    $balance_transaction = $chargeJson['balance_transaction'];
                                    $currency = $chargeJson['currency'];
                                    $status = $chargeJson['status'];
                                    $ledger = array(
                                        'user_id' => $user[0]->id,
                                        'type' => "3",
                                        'orderid' => $orderID,
                                        'date_time' => date("Y-m-d H:i:s"),
                                        'item_name' => $itemName,
                                        'item_number' => $itemNumber,
                                        'item_price' => $d->total_amount,
                                        'item_price_currency' => $currency,
                                        'amount' => $amount,
                                        'paid_amount_currency' => $currency,
                                        'txn_id' => $balance_transaction,
                                        'payment_status' => $status,
                                    );
                                    $this->ledger_model->add($ledger);
                                    $data = $this->subscription_model->edit(["last_order_date" => date("Y-m-d", strtotime("+1 day")), "next_order_date" => date("Y-m-d", strtotime("+14 day"))], $d->id);
                                }
                            } else {
                                
                            }
                        }
                    }
                }
            }
//print_r($data);
        }
    }

}
