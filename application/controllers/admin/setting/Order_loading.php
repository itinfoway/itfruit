<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting/Order_loading
 * https://itinfoway.com
 * @author Admin
 */
class Order_loading extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("order_loading_model");
    }

    public function index() {
        $this->display("index");
    }

}
