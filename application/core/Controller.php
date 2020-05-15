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
            } else if ($class == "profile" || ($class == "wallet" && $method=="index") || ($class == "wallet" && $method=="check") || ($class=="ala_cart_sliced" && $method=="checkout") || $class=="address") {
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
            $hed=array();
            if ($this->session->has_userdata("user_login")) {
                $this->load->model("ledger_model");
                $hed["wallet"] = $this->ledger_model->view_where(["user_id" => $this->session->userdata("user")->id],"sum(credit) as cr");
            }
            $this->load->view("include/header",$hed);
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
        $this->load->model("local_setting_model");
        $config = $this->local_setting_model->view("smtp_user,smtp_pass,smtp_port");
        $this->load->library('email', ["smtp_user" => $config[0]->smtp_user, "smtp_pass" => $config[0]->smtp_pass, "smtp_port" => $config[0]->smtp_port,"mailtype"=>"html"]);

        // Get full html:
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
    <title>' . html_escape($subject) . '</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
' . $message . '
</body>
</html>';
        // Also, for getting full html you may use the following internal method:
        //$body = $this->email->full_html($subject, $message);
        // Attaching the logo first.
        $file_logo = FCPATH . '/assert/fontend/img/logo.png';  // Change the path accordingly.
        // The last additional parameter is set to true in order
        // the image (logo) to appear inline, within the message text:
        if (!is_null($attach)) {
            $this->email->attach($file_logo, 'inline', null, '', true);
        }


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
