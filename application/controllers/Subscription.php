<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Subscription
 * https://itinfoway.com
 * @author Admin
 */
class Subscription extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model("product_model");
        $data["products"] = $this->product_model->view(["type" => 2]);
        $this->display('index', $data);
    }

    public function checkout() {
        $this->load->model("fruit_model");
        $data["fruit"] = $this->fruit_model->view();
        $this->display('checkout', $data);
    }

    public function delivery_information() {
        $this->load->model("address_model");
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $post = $this->input->post();
            $this->load->model("local_setting_model");
            $config = $this->local_setting_model->view("publishable_key,secret_key");
            $stripe = array(
                "secret_key" => $config[0]->secret_key,
                "publishable_key" => $config[0]->publishable_key
            );
            require_once APPPATH . "third_party/stripe/init.php";
            \Stripe\Stripe::setApiKey($stripe['secret_key']);
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
                    $this->load->model("user_model");
                    $this->user_model->edit(["strip_id" => $customer->id], $this->session->userdata("user")->id);
                    $stecard = $strca->id;
                    $customerID = $customer->id;
                } else {
                    $strca = \Stripe\Customer::createSource(
                                    $this->session->userdata("user")->strip_id, ['source' => $post['stripeToken']]
                    );
                    $stecard = $strca->id;
                    $customerID = $this->session->userdata("user")->strip_id;
                }
            } else if (isset($post["stecard"])) {
                $stecard = $post["stecard"];
                $customerID = $this->session->userdata("user")->strip_id;
            }
            
        } else {
            $data["address"] = $this->address_model->view_where(["a.user_id" => $this->session->userdata("user")->id]);
            $this->session->set_userdata('previous_url', current_url());
            if (empty($data["address"])) {

                redirect("address/add");
            }
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
            } $this->load->
                    helper('form');
            $this->display('delivery_information', $data);
        }
    }

    public function manaage() {
        $this->display('manaage');
    }

}
