<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Login
 * https://itinfoway.com
 * @author Admin
 */
class Login extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model("login_model");
    }

    public function index() {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $loginWhere["username"] = $this->input->post("username");
            $loginWhere["ip_attempt"] = $this->input->ip_address();
            $ip = $this->login_model->view($loginWhere);
            if (!empty($ip) && (!isset($ip->attempt) || $ip->attempt <= 3)) {
                $loginArray = $this->input->post();
                $capArray["ip_address"] = $this->input->ip_address();
                $data = $this->login_model->login($capArray, $loginArray);
                if ($data && !empty($data)) {
                    $this->login_model->attept($capArray, $loginArray);
                    unset($data[0]->password);
                    $this->session->set_userdata("user", $data[0]);
                    $this->session->set_userdata("user_login", true);
                    $this->session->set_userdata("success", $this->lang->line("success_login"));

                    if ($this->session->has_userdata("previous_url")) {
                        redirect($this->session->userdata('previous_url'));
                        $this->session->unset_userdata('previous_url');
                    } else {
                        redirect("login");
                    }
                } else {
                    $this->login_model->attept($capArray, $loginArray, 1);
                    $this->session->set_userdata("error", $this->lang->line("error_login"));
                    redirect("login");
                }
            } else if (time() - $ip->lastattempt >= ($ip->attempt + WAITING_TIME)) {
                $loginArray = $this->input->post();
                $capArray["ip_address"] = $this->input->ip_address();
                $data = $this->login_model->login($capArray, $loginArray);
                if ($data && !empty($data)) {
                    $this->login_model->attept($capArray, $loginArray);
                    unset($data[0]->password);
                    $this->session->set_userdata("user", $data[0]);
                    $this->session->set_userdata("user_login", true);
                    $this->session->set_userdata("success", $this->lang->line("success_login"));
                    $this->load->library('user_agent');
                    if ($this->session->has_userdata("previous_url")) {
                        redirect($this->session->userdata('previous_url'));
                        $this->session->unset_userdata('previous_url');
                    } else {
                        redirect("login");
                    }
                } else {
                    $this->login_model->attept($capArray, $loginArray, 1);
                    $this->session->set_userdata("error", $this->lang->line("error_login"));
                    redirect("login");
                }
            } else {
                $this->session->set_userdata("error", $this->lang->line("error_time_login"));
            }
        }
        $this->display('index');
    }

}
