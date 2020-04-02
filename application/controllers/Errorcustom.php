<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";
/**
 * Description of Address
 * https://itinfoway.com
 * @author Admin
 */
class Errorcustom extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function error404()
    {
        $this
            ->output
            ->set_status_header('404');
            $this->load->view("include/header");
            $this->load->view("errors/html/error_404");
        $this->load->view("include/footer");
    }
}
