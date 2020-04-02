<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

class Welcome extends Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->display('welcome_message');
    }

}
