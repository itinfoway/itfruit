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
        /*$this->load->helper('url');
         $this->load->library("pagination");*/
    }

    public function index() {
    	/*$config = array();
        $config["base_url"] = base_url() . "Orderhistory";
        $config["total_rows"] = $this->order_details_model->get_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		$data["links"] = $this->pagination->create_links();
		$data['Orderhistory'] = $this->order_details_model->get_order_details($config["per_page"], $page);
		$this->load->view('Orderhistory/index', $data);*/
        $data["order"]=$this->order_details_model->view(["user_id" => $this->session->userdata("user")->id,"type"=>1]);
        $this->display('index',$data);
    }

}
