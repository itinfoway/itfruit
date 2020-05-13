<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Address
 * https://itinfoway.com
 * @author Admin
 */
class Ala_cart_sliced extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model("product_model");
        $data["products"] = $this->product_model->view(["type" => 1]);
        $this->display('index', $data);
    }

    public function checkout() {
        $this->load->model("ledger_model");
        $this->load->model("address_model");
        $this->load->helper('cookie');
        $hed["wallet"] = $this->ledger_model->view_where(["user_id" => $this->session->userdata("user")->id], "sum(credit) as cr");
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->model("product_model");
            $this->load->model("order_loading_model");
            $this->load->model("order_details_model");
            $this->load->model("order_item_model");
            $address = $this->address_model->view_where(["a.id" => base64_decode(urldecode($this->input->post("address"))), "a.user_id" => $this->session->userdata("user")->id]);
           
            $cook = json_decode(get_cookie("carte"), TRUE);
            if (empty($address)) {
                $this->session->set_userdata('previous_url', current_url());
                $this->session->set_userdata('error', "not find address add agen");
                redirect("address/add");
            }
            //print_r($cook);
            foreach ($cook as $tk => $t) {
                $product = array();
                $products_order = array();
                $totalic = 0;
                $totalc = 0;
                foreach ($t["p"] as $pk => $p) {
                    $pid = base64_decode(urldecode($pk));
                    $products = $this->product_model->view(["type" => 1, "id" => base64_decode(urldecode($pk))], "id,fruit_ids");
                    $product[$pid]["fruits_name"] = json_encode($products[0]->fruit);
                    $product[$pid]["product_id"] = $pid;
                    $product[$pid]["name"] = $p["nm"];
                    $product[$pid]["items"] = $p["ic"];
                    $product[$pid]["credit"] = $p["c"];
                    $totalic+=$p["ic"];
                    $totalc+=($totalic * $p["c"]);
                    $product[$pid]["total_credit"] = ($totalic * $p["c"]);
                    $products_order[$p["nm"]] = $pid;
                }
                $datet = explode("_", $tk);
                $date = date("Y-m-d", strtotime($datet[2] . "-" . $datet[1] . "-" . $datet[0]));
                $day = date("N", strtotime($datet[2] . "-" . $datet[1] . "-" . $datet[0]));
                $time = $this->order_loading_model->viewwhere(["id" => $datet[3]]);
                $order_details["user_id"] = $this->session->userdata("user")->id;
                $order_details["order_date"] = date("Y-m-d");
                $order_details["delivered_on_day"] = $day;
                $order_details["delivered_on_date"] = $date;
                $order_details["delivered_on_time"] = $time[0]->name;
                $order_details["products"] = json_encode($products_order);
                $order_details["order_loading_id"] = $datet[3];
                $order_details["total_item"] = $totalic;
                $order_details["total_credit"] = $totalc;
                $order_details["address_type"] = $address[0]->type;
                $order_details["city"] = $address[0]->city;
                $order_details["postalcode"] = $address[0]->postalcode;
                $order_details["state"] = $address[0]->state;
                $order_details["country"] = $address[0]->country;
                $order_details["lat_lng"] = $address[0]->latitude . "," . $address[0]->longitude;
                $order_details["address"] = $address[0]->address1 . ", " . $address[0]->address2;
                $oId = $this->order_details_model->add($order_details);
                $ledger = array();
                $ledger["type"] = 2;
                $ledger["orderid"] = "ALACARTE" . date("Ymd") . str_pad($oId, 4, '0', STR_PAD_LEFT);
                $ledger["user_id"] = $this->session->userdata("user")->id;
                $ledger["date_time"] = date("Y-m-d H:i:s");
                $ledger["exp_date_time"] = $date;
                $ledger["credit"] = "-" . $totalc;
                if ($oId) {
                    foreach ($product as $prodata) {
                        $prodata["order_details_id"] = $oId;
                        $this->order_item_model->add($prodata);
                    }
                    $this->ledger_model->add($ledger);
                    delete_cookie("carte");
                } else {
                    
                }
            }
           redirect("orderhistory");
        } else {

            if (get_cookie("crt") == "") {
                redirect("ala-cart-sliced");
            }

            $data["address"] = $this->address_model->view_where(["a.user_id" => $this->session->userdata("user")->id]);
            $this->session->set_userdata('previous_url', current_url());
            if (empty($data["address"])) {
                
                redirect("address/add");
            }
            $this->load->helper('form');
            $this->display('checkout', $data);
        }
    }

    public function gettime() {
        $this->load->model("order_loading_model");
        $this->load->model("today_order_model");
        $date = $this->input->post("date");
        $day = date("N", strtotime($date));
        $date = date("Y-m-d", strtotime($date));
        $time = $this->order_loading_model->viewwhere(["week_day" => $day]);
        $today = $this->today_order_model->viewwhere(["delivered_on_date" => $date]);
        $data=array();
        foreach ($time as $t) {
            
            if (!empty($today)) {
                foreach ($today as $d) {
                    if ($t->ala_carte_loading > $d->total_item_sum && $t->id == $d->order_loading_id) {
                        $data["time"][$t->id]["min_item"] = $t->ala_carte_loading - $d->total_item_sum;
                        $data["time"][$t->id]["time"] = $t->name;
                        $data["time"][$t->id]["id"] = $t->id;
                    }
                }
            } else {
                $data["time"][$t->id]["min_item"] = $t->ala_carte_loading;
                $data["time"][$t->id]["time"] = $t->name;
                $data["time"][$t->id]["id"] = $t->id;
            }
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data));
    }

}
