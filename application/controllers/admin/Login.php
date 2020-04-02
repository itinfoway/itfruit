<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
class Login extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model("admin/login_model");
    }

    public function index()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->library('encryption');
            $whear = array();
            $whear["dsfafe"] = $this->input->post("username");
            $whear["paspsas"] = $this->input->post("password");
            $data = $this->login_model->view($whear);
            if ($data) {
                $this->session->set_userdata("admin", $data);
                $this->session->set_userdata("admin_login", TRUE);
            } else {
                $this->session->set_userdata("error", "username and password worong!");
            }
            redirect("admin/login");
        }
        $this->load->view('admin/login/index');
    }
}
