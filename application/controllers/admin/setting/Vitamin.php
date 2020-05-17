<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting
 * https://itinfoway.com
 * @author Admin
 */
class Vitamin extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Vitamin_model");
    }

    public function index() {
        $this->display("index");
    }

    public function add() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $data = $this->Vitamin_model->add($capArray);
            
            if (!empty($data)) {
                $this->session->set_userdata("success","successfully added");
                redirect("admin/setting/vitamin/add");
            } else {
                $this->session->set_userdata("error","oops something went wrong");
                redirect("admin/setting/vitamin/add");
            }
        }
        $this->display('add');
    }

    public function edit($id) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $data = $this->Vitamin_model->edit($capArray, $id);
            if (!empty($data)) {
                $this->session->set_userdata("success","updated successfully");
                redirect("admin/setting/vitamin/index");
            } else {
                $this->session->set_userdata("error","oops something went wrong");
                redirect("admin/setting/vitamin/index");
            }
        } else {
            $data = $this->Vitamin_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function delete($id) {
        $data = $this->Vitamin_model->delete($id);
        if (!empty($data)) {
            $this->session->set_userdata("success","successfully deleted");
            redirect("admin/setting/vitamin/index");
        } else {
            $this->session->set_userdata("error","oops something went wrong");
            redirect("admin/setting/vitamin/index");
        }
    }

    public function json($name = null) {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["vitamin"]["data"] = $this->Vitamin_model->view(null, $select);
        } else {
            $name = vitamin64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["vitamin"] = $this->Vitamin_model->findname($name, vitamin64_decode(urldecode($old)));
        }
        if ($data["vitamin"] == 0) {
            $data["vitamin"] = FALSE;
        } else if (!isset($data["vitamin"]["data"]) && $data["vitamin"] >= 1) {
            $data["vitamin"] = TRUE;
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data["vitamin"]));
    }

}
