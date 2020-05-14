<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Address
 * https://itinfoway.com
 * @author Admin
 */
class Address extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("address_model");
    }

    public function index() {
        $data["data"] = $this->address_model->view_where(["a.user_id" => $this->session->userdata("user")->id]);
        $this->display('index', $data);
    }

    public function add() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $capArray["user_id"] = $this->session->userdata("user")->id;
            $data = $this->address_model->add($capArray);

            if (!empty($data)) {
                $this->session->set_userdata("success", "address added successfully");
                if ($this->session->has_userdata("previous_url")) {
                    redirect($this->session->userdata('previous_url'));
                    $this->session->unset_userdata('previous_url');
                } else {
                    redirect("address");
                }
            } else {
                $this->session->set_userdata("error", "address not added try again");
                if ($this->session->has_userdata("previous_url")) {
                    redirect($this->session->userdata('previous_url'));
                    $this->session->unset_userdata('previous_url');
                } else {
                    redirect("address");
                }
            }
        }

        $this->display('add');
    }

    public function edit($ids) {
        $ids = base64_decode(urldecode($ids));

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $capArray["user_id"] = $this->session->userdata("user")->id;
            $data = $this->address_model->edit($capArray,$ids);

            if (!empty($data)) {
                $this->session->set_userdata("success", "address added successfully");
                if ($this->session->has_userdata("previous_url")) {
                    redirect($this->session->userdata('previous_url'));
                    $this->session->unset_userdata('previous_url');
                } else {
                    redirect("address");
                }
            } else {
                $this->session->set_userdata("error", "address not added try again");
                if ($this->session->has_userdata("previous_url")) {
                    redirect($this->session->userdata('previous_url'));
                    $this->session->unset_userdata('previous_url');
                } else {
                    redirect("address");
                }
            }
        }
        $data = $this->address_model->view($ids);
//        print_r($data);
        $this->display('add', $data[0]);
    }

}
