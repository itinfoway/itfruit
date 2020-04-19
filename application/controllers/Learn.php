<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Learn
 * https://itinfoway.com
 * @author Admin
 */

class Learn extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("fruit_model");
        $this->load->model("vitamin_model");
    }

    public function index() {
        $data["fruit"] = $this->fruit_model->view();
        $data["vitamin"] = $this->vitamin_model->view();
        $this->display('index', $data);
    }

}
