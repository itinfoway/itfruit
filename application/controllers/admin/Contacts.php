<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Contacts
 * https://itinfoway.com
 * @author Admin
 */
class Contacts extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("contact_model");
    }

    public function index()
    {
        $this->display("index");
    }

    public function add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $capArray["ip_address"] = $this->input->ip_address();
            $data = $this->contact_model->add($capArray);

            if (!empty($data)) {
                $this->session->set_userdata("success","successfully added");
                redirect("admin/contacts/add");
            } else {
                $this->session->set_userdata("error","oops something went wrong");
                redirect("admin/contacts/add");
            }
        }
        $this->display('add');
    }

    public function edit($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $data = $this->contact_model->edit($capArray, $id);
            if (!empty($data)) {
                $this->session->set_userdata("success","updated successfully");
                redirect("admin/contacts/add");
            } else {
                $this->session->set_userdata("error","oops something went wrong");
                redirect("admin/contacts/add");
            }
        } else {
            $data = $this->contact_model->view($id);
        }
        $this->display("add", $data[0]);
    }

    public function delete($id)
    {
        $data = $this->contact_model->delete($id);
        if (!empty($data)) {
            $this->session->set_userdata("success","successfully deleted");
            redirect("admin/contacts/index");
        } else {
            $this->session->set_userdata("error","oops something went wrong");
            redirect("admin/contacts/index");
        }
    }

    public function json($name = null)
    {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["contactus"]["data"] = $this->contact_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["contactus"] = $this->contact_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["contactus"] == 0) {
            $data["contactus"] = FALSE;
        } else if (!isset($data["contactus"]["data"]) && $data["contactus"] >= 1) {
            $data["contactus"] = TRUE;
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200) // Return status
            ->set_output(json_encode($data["contactus"]));
    }
}
