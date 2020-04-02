<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
class Users extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
    }

    public function index()
    {
        $this->display("index");
    }

    public function add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $image_parts = explode(";base64,", $this->input->post("input_image"));
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = uniqid() . '.png';
                file_put_contents("./assert/user/" . $file, $image_base64);
                $array =  $this->input->post();
                unset($array["input_image"]);
                $array["img"] = $file;
            } else {
                $array = $this->input->post();
                unset($array["input_image"]);
                $array["img"] = "user_demo.png";
            }
            unset($array["password_confirmation"]);
            $data = $this->user_model->add($array);
            if (!empty($data)) {
                redirect("admin/users/add");
            } else {
                redirect("admin/users/add");
            }
        }
        $this->display('add');
    }

    public function view($id)
    {
        $this->load->model("address_model");
         $data["address"] = $this->address_model->view_where(["a.user_id"=>$id]);
         $data["users"] = $this->user_model->view($id)[0];
        
        $this->display("view", $data);
          
    }

    public function edit($id)
    {
        $data = $this->user_model->view($id);
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $image_parts = explode(";base64,", $this->input->post("input_image"));
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = uniqid() . '.png';
                file_put_contents("./assert/user/" . $file, $image_base64);
                if ($data[0]->img != "demo.png") {
                    unlink("./assert/user/" . $data[0]->img);
                }
                $array = $this->input->post();
                unset($array["input_image"]);
                $array["img"] = $file;
            } else {
                $array =  $this->input->post();
                unset($array["input_image"]);
            }
            if (isset($array["delete"])) {
                if (!isset($array["img"])) {
                    $array["img"] = "user_demo.png";
                }
                if ($data[0]->img != "user_demo.png") {
                    unlink("./assert/user/" . $data[0]->img);
                }
                unset($array["delete"]);
            }
            unset($array["password_confirmation"]);
            $data = $this->user_model->edit($array, $id);
            if (!empty($data)) {
                redirect("admin/users/add");
            } else {
                redirect("admin/users/add");
            }
        }
        $this->display("add", $data[0]);
    }

    public function delete($id)
    {
        $data = $this->user_model->delete($id);
        if (!empty($data)) {
            redirect("admin/users/index");
        } else {
            redirect("admin/users/index");
        }
    }
    public function jsonemail($name = null)
    {
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
    public function jsonusername($name = null)
    {
        $name = base64_decode(urldecode($name));
        $old = $this->input->get("name");
        $data["users"] = $this->user_model->finduname($name, base64_decode(urldecode($old)));
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
    public function json($name = null)
    {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["users"]["data"] = $this->user_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["users"] = $this->user_model->findname($name, base64_decode(urldecode($old)));
        }
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
