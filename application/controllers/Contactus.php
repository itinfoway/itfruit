<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";
/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
class Contactus extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("contact_model");
    }

    public function index()
    {
        $this->load->helper('form');
        $count = $this->contact_model->count(["ip_address"=>$this->input->ip_address(),"date"=>date("Y-m-d")]);
        if ($count < 3) {
            if ($this->input->server('REQUEST_METHOD') == 'POST') {
                $capArray = $this->input->post();
                $capArray["ip_address"] = $this->input->ip_address();
                $data = $this->contact_model->add($capArray);

                if (!empty($data)) {
                    $this->session->set_userdata("success", "contactus msg send successfully");
                    redirect("contactus");
                } else {
                    redirect("contactus");
                }
            }
            $this->display('index');
        } else {
            $this->display('error');
        }
    }
}
