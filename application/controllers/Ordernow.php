<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Ordernow
 * https://itinfoway.com
 * @author Admin
 */
class Ordernow extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->display('index');
    }

}
