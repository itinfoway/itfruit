<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";
/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
class Welcome extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("partner_model");
        $this->load->model("people_model");
        $this->load->model("slidermain_model");
    }
    
    public function index() {
        $data["partner"]=$this->partner_model->view();
        $data["people"]=$this->people_model->view();
        $data["slidermain"]=$this->slidermain_model->view();
        $this->display('index',$data);
    }

}
