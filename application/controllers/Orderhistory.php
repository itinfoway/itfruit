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
        //$this->load->helper('url');
        $this->load->library("pagination");
    }

    public function index() {
       $data["order"]=$this->order_details_model->getdata(["user_id" => $this->session->userdata("user")->id,"type"=>1],"*",0,10);
        $this->display('index',$data);
    }

    public function view() {
        $this->load->model("order_details_model");
        $data["data"] = $this->order_details_model->view_where(["user_id" => $this->session->userdata("user")->id], "*", [1, 2]);
        $data["title"] = $this->lang->line("fn_subscription_list");
        $data["type"] = 1;
       //this->display('index', $data);
        $this->display('view',$data);
    }
    public function loadmore(){
      $offset = $this->input->get('offset');
      $this->load->model('order_details_model');
      $data["order"]  = $this->order_details_model->getdata(["user_id" => $this->session->userdata("user")->id,"type"=>1],"*",$offset,10);
     
      return $this->load->view('orderhistory/ajax',$data);
    }

}
