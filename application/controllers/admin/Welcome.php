<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

class Welcome extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("counter_model");
    }
    
    public function index() {
        $data=array();
        $data["users"]=$this->counter_model->users_count();
        $data["ala"]=$this->counter_model->orders_count(["type"=>1, "status"=>1]);
        $data["subscription"]=$this->counter_model->orders_count(["type"=>2, "status"=>1]);
        $data["users_subscription"]=$this->counter_model->subscription_count(["status"=>0]);
        $this->display('welcome_message',$data);
    }

}
