<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";
/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
class Logout extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->session->sess_destroy();
        redirect("welcome");
    }

}
