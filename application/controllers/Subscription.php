<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";
/**
 * Description of Subscription
 * https://itinfoway.com
 * @author Admin
 */
class Subscription extends Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->display('index');
    }

}
