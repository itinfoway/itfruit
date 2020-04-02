<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting
 * https://itinfoway.com
 * @author Admin
 */
class Address extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("address_model");
        $this->load->model("user_model");
    }

    public function index()
    {
       
        $this->display("index");
    }

    public function add($id=null)
    {
         $data = array();
         $data["data"]=new stdClass;
         $data["data"]->user_id=$id;
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            // $capArray["user_id"] = json_encode($this->input->post("user_id"));
          $data = $this->address_model->add($capArray);

            if (!empty($data)) {
                redirect("admin/address/add");
            } else {
                redirect("admin/address/add");
            }
        }$users = $this->user_model->view();
        
        foreach ($users as $u) {
            $data["users"][$u->id] = $u->fname;
        }
        $this->display('add', $data);
    }

    public function edit($id)
    {
        
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $capArray = $this->input->post();
            $data = $this->address_model->edit($capArray, $id);
            if (!empty($data)) {
                redirect("admin/address/add");
            } else {
                redirect("admin/address/add");
            }
        } else {
            $data["data"] = $this->address_model->view($id)[0];
        }
        $users = $this->user_model->view();
        
        foreach ($users as $u) {
            $data["users"][$u->id] = $u->fname;
        }
        $this->display("add", $data);
    }

    public function delete($id)
    {
        $data = $this->address_model->delete($id);
        if (!empty($data)) {
            redirect("admin/address/index");
        } else {
            redirect("admin/address/index");
        }
    }

    
     public function json($name = null)
    {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["address"]["data"] = $this->address_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["address"] = $this->address_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["address"] == 0) {
            $data["address"] = FALSE;
        } else if (!isset($data["address"]["data"]) && $data["address"] >= 1) {
            $data["address"] = TRUE;
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200) // Return status
            ->set_output(json_encode($data["address"]));
    }


}
