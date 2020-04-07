<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Address
 * https://itinfoway.com
 * @author Admin
 */
class Ala_cart_sliced extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->display('index');
    }

    public function gettime() {
       $date=$this->input->post("date");
       $day=date("N",strtotime($date)); 
       return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data["address"]));
    }

}
