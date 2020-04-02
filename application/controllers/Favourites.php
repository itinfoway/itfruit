<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";
/**
 * Description of Favourites
 * https://itinfoway.com
 * @author Admin
 */
class Favourites extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("fruit_model");
    }
    
    public function index() {
        $data["fruit"]=$this->fruit_model->view();
        $this->display('index',$data);
    }

}
