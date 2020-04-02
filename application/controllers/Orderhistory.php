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
    }
    
    public function index() {
        $this->display('index');
    }

}
