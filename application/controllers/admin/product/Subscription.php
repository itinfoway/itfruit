<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting
 * https://itinfoway.com
 * @author Admin
 */
//Subscription type = 2
class Subscription extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("product_model");
    }

    public function index() {
        //$this->display("index");
    }

}
