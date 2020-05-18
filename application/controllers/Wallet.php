<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Address
 * https://itinfoway.com
 * @author Admin
 */
class Wallet extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("alacarte_model");
    }

    public function index() {
        $this->load->model("ledger_model");
        $data["data"] = $this->ledger_model->view_where(["user_id" => $this->session->userdata("user")->id], "*", [1, 2]);
        $data["title"]=$this->lang->line("fn_wallet_history");
        $data["type"]=1;
        $this->display('index', $data);
    }

    public function subscription() {
        $this->load->model("ledger_model");
        $data["data"] = $this->ledger_model->view_where(["user_id" => $this->session->userdata("user")->id], "*", [3]);
        $data["type"]=2;
        $data["title"]="Subscription";
        $this->display('index', $data);
    }

    public function add_to_cart() {
        if ($this->session->has_userdata("user")) {
            $this->load->model("local_setting_model");
            $config = $this->local_setting_model->view("publishable_key,secret_key");
            if ($this->session->userdata("user")->strip_id != "" || !is_null($this->session->userdata("user")->strip_id)) {
                require_once APPPATH . "third_party/stripe/init.php";
                $stripe = array(
                    "secret_key" => $config[0]->secret_key,
                    "publishable_key" => $config[0]->publishable_key
                );
                \Stripe\Stripe::setApiKey($stripe['secret_key']);
                $card = \Stripe\Customer::allSources(
                                $this->session->userdata("user")->strip_id
                );
//            print_r($card);exit;
                $data["card"] = $card;
            }

            $this->load->helper('form');
            $config = $this->local_setting_model->view("publishable_key");
            if (!empty($config)) {
                $data["pubkey"] = $config[0]->publishable_key;
            }
        }
        $data["data"] = $this->alacarte_model->view();
        $this->display('add_to_cart', $data);
    }

    public function check() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $post = $this->input->post();
            if (isset($post['stripeToken']) || isset($post["stecard"])) {
                $carte = $this->alacarte_model->view($post["paymod"]);
                $this->load->model("local_setting_model");
                $this->load->model("ledger_model");
                $config = $this->local_setting_model->view("publishable_key,secret_key");

                //get token, card and user info from the form

                $name = $this->session->userdata("user")->fname . " " . $this->session->userdata("user")->lname;
                $email = $this->session->userdata("user")->email;

                //include Stripe PHP library
                require_once APPPATH . "third_party/stripe/init.php";

                //set api key
                $stripe = array(
                    "secret_key" => $config[0]->secret_key,
                    "publishable_key" => $config[0]->publishable_key
                );

                \Stripe\Stripe::setApiKey($stripe['secret_key']);

                //add customer to stripe
                if (isset($post['stripeToken'])) {
                    if ($this->session->userdata("user")->strip_id == "" || is_null($this->session->userdata("user")->strip_id)) {
                        $this->load->model("address_model");
                        $address = $this->address_model->view_where(["user_id" => $this->session->userdata("user")->id, "type" => 1], "city,address,postalcode,state,country");
                        if (!empty($address)) {
                            $customer = \Stripe\Customer::create(array(
                                        'email' => $email,
                                        'name' => $name,
                                        'address' => [
                                            'line1' => $address[0]->address,
                                            'postal_code' => $address[0]->postalcode,
                                            'city' => $address[0]->city,
                                            'state' => $address[0]->state,
                                            'country' => $address[0]->country,
                                        ],
                                        'shipping' => [
                                            'name' => $name,
                                            'address' => [
                                                'line1' => '510 Townsend St',
                                                'postal_code' => '98140',
                                                'city' => 'San Francisco',
                                                'state' => 'CA',
                                                'country' => 'US',
                                            ],
                                        ],
                            ));
                        } else {
                            $customer = \Stripe\Customer::create(array(
                                        'email' => $email,
                                        'name' => $name,
                            ));
                        }
                        $strca = \Stripe\Customer::createSource($customer->id, ['source' => $post['stripeToken']]);
                        $stecard = $strca->id;
                        $this->load->model("user_model");
                        $this->user_model->edit(["strip_id" => $customer->id], $this->session->userdata("user")->id);

                        $customerID = $customer->id;
                    } else {
                        $strca = \Stripe\Customer::createSource(
                                        $this->session->userdata("user")->strip_id, ['source' => $post['stripeToken']]
                        );
                        $stecard = $strca->id;
                        $customerID = $this->session->userdata("user")->strip_id;
                    }
                } else {
                    $customerID = $this->session->userdata("user")->strip_id;
                    $stecard = $post["stecard"];
                }

                $counr = $this->ledger_model->count();
                //item information
                $itemName = $carte[0]->pass;
                $itemNumber = "ALA00" . $carte[0]->id;
                $itemPrice = ($carte[0]->youpay * 100);
                $currency = "SGD";
                $orderID = "WALLET" . date("Ymd") . str_pad(( $counr > 0 ? $counr : 1), 4, '0', STR_PAD_LEFT);

                //charge a credit or a debit card
                $chargeArray = array(
                    "customer" => $customerID,
                    'amount' => $itemPrice,
                    'currency' => $currency,
                    'description' => $itemNumber,
                    'metadata' => array(
                        'item_id' => $itemNumber
                    )
                );
                if (isset($stecard)) {
                    $chargeArray["source"] = $stecard;
                }
                $charge = \Stripe\Charge::create($chargeArray);
                //retrieve charge details
                $chargeJson = $charge->jsonSerialize();

                //check whether the charge is successful
                if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
                    //order details 

                    $amount = $chargeJson['amount'] / 100;
                    $balance_transaction = $chargeJson['balance_transaction'];
                    $currency = $chargeJson['currency'];
                    $status = $chargeJson['status'];
                    $date = strtotime(date("Y-m-d") . ' +' . $carte[0]->validity . ' day');


                    //insert tansaction data into the database
                    $dataDB = array(
                        'user_id' => $this->session->userdata("user")->id,
                        'type' => "1",
                        'orderid' => $orderID,
                        'date_time' => date("Y-m-d H:i:s"),
                        'item_name' => $itemName,
                        'item_number' => $itemNumber,
                        'item_price' => $itemPrice / 100,
                        'item_price_currency' => $currency,
                        'amount' => $amount,
                        'credit' => $carte[0]->credit,
                        'paid_amount_currency' => $currency,
                        'txn_id' => $balance_transaction,
                        'payment_status' => $status,
                        'exp_date_time' => $date
                    );

                    if ($this->ledger_model->add($dataDB)) {
                        if ($status == 'succeeded') {
                            $this->session->set_userdata("success", "payment successfully");
                        } else {
                            $this->session->set_userdata("error", "Transaction has been failed");
                        }
                    } else {
                        $this->session->set_userdata("error", "not inserted. Transaction has been failed");
                    }
                } else {
                    $this->session->set_userdata("error", "Invalid Token");
                }
            }
        }
        redirect("wallet");
    }

}
