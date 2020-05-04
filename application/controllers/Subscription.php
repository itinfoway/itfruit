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
        $this->display('checkout',$data);
    }

    public function manaage() {
        $this->display('manaage');
    }

}
