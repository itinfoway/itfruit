<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";
/**
 * Description of Signup
 * https://itinfoway.com
 * @author Admin
 */
class Signup extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->model("user_model");
            $data = $this->input->post();
            unset($data["pri_pol"]);
            $data["email_v"] = $em = rand(10000, 99999);
            $data["status"] = 0;
            $em = urlencode(base64_encode($data["email"] . "|" . $em));
            $msg = "<a href='" . base_url() . "/signup/verify/" . $em . "'>Click</a><br>";
            $msg .= base_url() . "signup/verify/" . $em;
            if ($this->maileSend("Account Verification", $msg, $data["email"])) {
                $this->user_model->add($data);
                $this->session->set_userdata("success", $this->lang->line("success_signup"));
                redirect("welcome");
            } else {
                $this->session->set_userdata("error", $this->lang->line("error_signup"));
                redirect("welcome");
            }
        }
        $this->display('index');
    }
    public function verify($data = null)
    {
        $data = base64_decode(urldecode($data));
        $data = explode("|", $data);

        $this->load->model("user_model");
        $v = $this->user_model->view_where(["email" => $data[0], "email_v" => $data[1]]);
        if (!empty($v)) {
            $username = explode("@", $data[0]);
            $string = str_replace(' ', '-', $username[0]); // Replaces all spaces with hyphens.
            $username = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
            $username = substr($username . "" . rand(10000, 99999), 0, 55);
            $this->user_model->edit(["status" => 1, "email_v" => rand(10000, 99999), "username" => $username], $v[0]->id);
            $this->session->set_userdata("success", $this->lang->line("success_signup"));
        } else {
            $this->session->set_userdata("error", $this->lang->line("error_signup"));
        }
        redirect("welcome");
    }
    public function jsonemail($name = null)
    {
        $this->load->model("user_model");
        $name = base64_decode(urldecode($name));
        $old = $this->input->get("name");
        $data["users"] = $this->user_model->findemail($name, base64_decode(urldecode($old)));
        if ($data["users"] == 0) {
            $data["users"] = FALSE;
        } else if (!isset($data["users"]["data"]) && $data["users"] >= 1) {
            $data["users"] = TRUE;
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200) // Return status
            ->set_output(json_encode($data["users"]));
    }
}
