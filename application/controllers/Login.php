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

    public function verifyforget($data) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->model("user_model");
            $this->user_model->edit(["password" => $this->input->post("password"), "email_v" => rand(10000, 99999), "status" => 1], $this->session->userdata("user_id"));
            $this->session->set_userdata("success", $this->lang->line("success_forget_password"));
            redirect("login");
        } else {
            $data = base64_decode(urldecode($data));
            $data = explode("|", $data);
            $this->load->model("user_model");
            $v = $this->user_model->view_where(["email" => $data[0], "email_v" => $data[1]]);
            if (!empty($v)) {
                $this->session->set_userdata("user_id", $v[0]->id);
                $this->display('verifyforget');
            }
        }
    }

    public function forget() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $loginWhere["username"] = $this->input->post("username");
            $users = $this->login_model->getuser($loginWhere);
            
            if (isset($users->email)) {
                $data["email_v"] = $em = rand(10000, 99999);
                $data["status"] = 3;
                $em = urlencode(base64_encode($users->email . "|" . $em));
                $msg = "<a href='" . base_url() . "/login/verifyforget/" . $em . "'>Click</a><br>";
                $msg .= base_url() . "signup/verifyforget/" . $em;
                if ($this->maileSend("FORGET PASSWORD", $msg, $users->email)) {
                    $this->login_model->forgetPassword($data, ["email" => $users->email]);
                    $this->session->set_userdata("success", $this->lang->line("success_forget_password"));
                    redirect("login");
                }
            } else {
                $this->session->set_userdata("error", $this->lang->line("error_forget_password_link"));
                redirect("login");
            }
        }
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
