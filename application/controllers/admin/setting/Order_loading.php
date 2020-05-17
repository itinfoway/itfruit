<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting/Order_loading
 * https://itinfoway.com
 * @author Admin
 */
class Order_loading extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("order_loading_model");
    }

    public function index() {
        $this->display("index");
    }
    
    public function add() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $data = $this->order_loading_model->add($capArray);
            
            if (!empty($data)) {
                $this->session->set_userdata("success","successfully added");
                redirect("admin/setting/order_loading/add");
            } else {
                $this->session->set_userdata("error","oops something went wrong");
                redirect("admin/setting/order_loading/add");
            }
        }
        $this->display('add');
    }

    public function edit($id) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $data = $this->order_loading_model->edit($capArray, $id);
            if (!empty($data)) {
                $this->session->set_userdata("success","updated successfully");
                redirect("admin/setting/order_loading/index");
            } else {
                $this->session->set_userdata("error","oops something went wrong");
                redirect("admin/setting/order_loading/index");
            }
        } else {
            $data = $this->order_loading_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function delete($id) {
        $data = $this->order_loading_model->delete($id);
        if (!empty($data)) {
            $this->session->set_userdata("success","successfully deleted");
            redirect("admin/setting/order_loading/index");
        } else {
            $this->session->set_userdata("error","oops something went wrong");
            redirect("admin/setting/order_loading/index");
        }
    }

    public function json($name = null)
    {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["order_loading"]["data"] = $this->order_loading_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["order_loading"] = $this->order_loading_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["order_loading"] == 0) {
            $data["order_loading"] = FALSE;
        } else if (!isset($data["order_loading"]["data"]) && $data["order_loading"] >= 1) {
            $data["order_loading"] = TRUE;
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200) // Return status
            ->set_output(json_encode($data["order_loading"]));
    }


}
