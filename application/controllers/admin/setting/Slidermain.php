<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Slidermain
 * https://itinfoway.com
 * @author Admin
 */
class Slidermain extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("slidermain_model");
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
                file_put_contents("./assert/slidermain/" . $file, $image_base64);
                $array =  $this->input->post();
                unset($array["input_image"]);
                $array["img"] = $file;
            } else {
                $array = $this->input->post();
                unset($array["input_image"]);
                $array["img"] = "user_demo.png";
            }
            $data = $this->slidermain_model->add($array);
            if (!empty($data)) {
                $this->session->set_userdata("success","successfully added");
                redirect("admin/setting/slidermain/add");
            } else {
                $this->session->set_userdata("error","oops something went wrong");
                redirect("admin/setting/slidermain/add");
            }
        }
        $this->display('add');
    }



    public function edit($id)
    {
        $data = $this->slidermain_model->view($id);

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $image_parts = explode(";base64,", $this->input->post("input_image"));
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = uniqid() . '.png';
                file_put_contents("./assert/slidermain/" . $file, $image_base64);
                if ($data[0]->img != "demo.png") {
                    unlink("./assert/slidermain/" . $data[0]->img);
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
                    $array["img"] = "demo.png";
                }
                if ($data[0]->img != "demo.png") {
                    unlink("./assert/slidermain/" . $data[0]->img);
                }
                unset($array["delete"]);
            }
            $data = $this->slidermain_model->edit($array, $id);
            if (!empty($data)) {
                $this->session->set_userdata("success","updated successfully");
                redirect("admin/setting/slidermain/add");
            } else {
                $this->session->set_userdata("error","oops something went wrong");
                redirect("admin/setting/slidermain/add");
            }
        } else {
            $data = $this->slidermain_model->view($id);
            $data["data"] = $data[0];
        }

        $this->display("add", $data);
    }

    public function delete($id)
    {
        $data = $this->slidermain_model->delete($id);
        if (!empty($data)) {
            $this->session->set_userdata("success","successfully deleted");
            redirect("admin/setting/slidermain/index");
        } else {
            $this->session->set_userdata("error","oops something went wrong");
            redirect("admin/setting/slidermain/index");
        }
    }

    public function json($name = null)
    {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["slidermain"]["data"] = $this->slidermain_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["slidermain"] = $this->slidermain_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["slidermain"] == 0) {
            $data["slidermain"] = FALSE;
        } else if (!isset($data["slidermain"]["data"]) && $data["slidermain"] >= 1) {
            $data["slidermain"] = TRUE;
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200) // Return status
            ->set_output(json_encode($data["slidermain"]));
    }
}
