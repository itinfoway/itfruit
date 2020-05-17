<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of blog/Category
 * https://itinfoway.com
 * @author Admin
 */
class Category extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("blogs_category_model");
    }

    public function index() {
       $this->display("index");
    }
    public function add() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $data = $this->blogs_category_model->add($capArray);
            
            if (!empty($data)) {
                $this->session->set_userdata("success","successfully added");
                redirect("admin/blogs/category/add");
            } else {
                $this->session->set_userdata("error","oops something went wrong");
                redirect("admin/blogs/category/add");
            }
        }
        $this->display('add');
    }

    public function edit($id) {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $data = $this->blogs_category_model->edit($capArray, $id);
            if (!empty($data)) {
                $this->session->set_userdata("success","updated successfully");
                redirect("admin/blogs/category/add");
            } else {
                $this->session->set_userdata("error","oops something went wrong");
                redirect("admin/blogs/category/add");
            }
        } else {
            $data = $this->blogs_category_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function delete($id) {
        $data = $this->blogs_category_model->delete($id);
        if (!empty($data)) {
            $this->session->set_userdata("success","successfully deleted");
            redirect("admin/blogs/category/index");
        } else {
            $this->session->set_userdata("error","oops something went wrong");
            redirect("admin/blogs/category/index");
        }
    }

    public function json($name = null) {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["category"]["data"] = $this->blogs_category_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["category"] = $this->blogs_category_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["category"] == 0) {
            $data["category"] = FALSE;
        } else if (!isset($data["category"]["data"]) && $data["category"] >= 1) {
            $data["category"] = TRUE;
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data["category"]));
    }
}
