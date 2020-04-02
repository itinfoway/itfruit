<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting
 * https://itinfoway.com
 * @author Admin
 */
class Faq extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("faq_model");
    }

    public function index() {
        $this->display("index");
    }

    public function add() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $data = $this->faq_model->add($capArray);
            
            if (!empty($data)) {
                redirect("admin/setting/faq/add");
            } else {
                redirect("admin/setting/faq/add");
            }
        }
        $this->display('add');
    }

    public function edit($id) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $data = $this->faq_model->edit($capArray, $id);
            if (!empty($data)) {
                redirect("admin/setting/faq/add");
            } else {
                redirect("admin/setting/faq/add");
            }
        } else {
            $data = $this->faq_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function delete($id) {
        $data = $this->faq_model->delete($id);
        if (!empty($data)) {
            redirect("admin/setting/faq/index");
        } else {
            redirect("admin/setting/faq/index");
        }
    }

    public function json($name = null) {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["faq"]["data"] = $this->faq_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["faq"] = $this->faq_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["faq"] == 0) {
            $data["faq"] = FALSE;
        } else if (!isset($data["faq"]["data"]) && $data["faq"] >= 1) {
            $data["faq"] = TRUE;
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data["faq"]));
    }

}
