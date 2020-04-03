<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting
 * https://itinfoway.com
 * @author Admin
 */
class Alacarte extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("alacarte_model");
    }

    public function index() {
        $this->display("index");
    }

    public function add() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $data = $this->alacarte_model->add($capArray);
            
            if (!empty($data)) {
                redirect("admin/setting/alacarte/add");
            } else {
                redirect("admin/setting/alacarte/add");
            }
        }
        $this->display('add');
    }

    public function edit($id) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $data = $this->alacarte_model->edit($capArray, $id);
            if (!empty($data)) {
                redirect("admin/setting/alacarte/index");
            } else {
                redirect("admin/setting/alacarte/index");
            }
        } else {
            $data = $this->alacarte_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function delete($id) {
        $data = $this->alacarte_model->delete($id);
        if (!empty($data)) {
            redirect("admin/setting/alacarte/index");
        } else {
            redirect("admin/setting/alacarte/index");
        }
    }

    public function json($name = null)
    {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["alacarte"]["data"] = $this->alacarte_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["alacarte"] = $this->alacarte_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["alacarte"] == 0) {
            $data["alacarte"] = FALSE;
        } else if (!isset($data["alacarte"]["data"]) && $data["alacarte"] >= 1) {
            $data["alacarte"] = TRUE;
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200) // Return status
            ->set_output(json_encode($data["alacarte"]));
    }

}
