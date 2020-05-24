<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->ch_login();
    }

    public function ch_login() {
        $directory = $this->router->directory;
        $class = $this->router->class;
        $method = $this->router->method;
        $dir_c = explode("/", $directory);
        if ($dir_c[0] == "admin") {
            if ($this->session->has_userdata("admin_login")) {
                if ($class == "login") {
                    redirect("admin/welcome");
                }
            } else {
                if ($class != "login") {
                    redirect("admin/login");
                }
            }
        } else {
            if ($this->session->has_userdata("user_login")) {
                if ($class == "login") {
                    redirect("welcome");
                }
            } else if ($class == "profile" || ($class == "wallet" && $method == "index") || ($class == "wallet" && $method == "subscription") || ($class == "wallet" && $method == "check") || ($class == "ala_cart_sliced" && $method == "checkout") || ($class == "subscription" && $method == "manaage") || $class == "address") {
                $this->session->set_userdata('previous_url', current_url());
                redirect("login");
            }
        }
    }

    public function display($view, $data = array()) {
        $directory = $this->router->directory;
        $class = $this->router->class;
        $method = $this->router->method;
        $dir_c = explode("/", $directory);
        //form help
        if ($method == "add" || $method == "edit") {
            $this->load->helper('form');
        }
        //header
        if ($dir_c[0] == "admin") {
            $this->load->view("admin/include/header");
        } else {
            $hed = array();
            if ($this->session->has_userdata("user_login")) {
                $this->load->model("ledger_model");
                $hed["wallet"] = $this->ledger_model->view_where(["user_id" => $this->session->userdata("user")->id], "sum(credit) as cr");
            }
            $this->load->view("include/header", $hed);
        }
        //view
        $this->load->view(strtolower($directory . "$class/" . $view), $data);
        //footer
        if ($dir_c[0] == "admin") {
            $this->load->view("admin/include/footer");
        } else {
            $this->load->view("include/footer");
        }
    }

    public function maileSend($subject = 'This is a test', $message = "test", $to = "parth.p.ajudiya@gmail.com", $attach = null) {
        $this->load->library('parser');
        $this->load->model("local_setting_model");
        $config = $this->local_setting_model->view("smtp_user,smtp_pass,smtp_port");
        $this->load->library('email', ["smtp_user" => $config[0]->smtp_user, "smtp_pass" => $config[0]->smtp_pass, "smtp_port" => $config[0]->smtp_port, "mailtype" => "html"]);
        $data["data"]=$message;
        $data["subject"]=$subject;
        $body =$this->parser->parse("email/t1",$data);
        $result = $this->email
                ->from('no-reply@sliced.tk')
                // ->reply_to('parth.p.ajudiya@gmail.com')    // Optional, an account where a human being reads.
                ->to($to)
                ->subject($subject)
                ->message($body)
                ->send();
        return $result;
    }

}
