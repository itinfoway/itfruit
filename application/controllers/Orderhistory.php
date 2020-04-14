<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Orderhistory
 * https://itinfoway.com
 * @author Admin
 */
class Orderhistory extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("order_details_model");
    }

    public function index() {
        $data["order"]=$this->order_details_model->view(["user_id" => $this->session->userdata("user")->id]);
        $this->display('index',$data);
    }

}
