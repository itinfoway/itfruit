<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting
 * https://itinfoway.com
 * @author Admin
 */
//Ala_carte type = 1
class Ala_carte extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("product_model");
    }

    public function index() {
        //$this->display("index");
    }

}
