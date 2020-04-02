<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";
/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
class Faq extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("faq_model");
    }
    
    public function index() {
        $data["data"] = $this->faq_model->view(null,"qus,ans");
        $this->display('index',$data);
    }

}
