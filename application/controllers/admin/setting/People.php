<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting
 * https://itinfoway.com
 * @author Admin
 */
class People extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("People_model");
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
                file_put_contents("./assert/people/" . $file, $image_base64);
                $array =  $this->input->post();
                unset($array["input_image"]);
                $array["img"] = $file;
            } else {
                $array = $this->input->post();
                unset($array["input_image"]);
                $array["img"] = "user_demo.png";
            }
            $data = $this->People_model->add($array);
            if (!empty($data)) {
                $this->session->set_userdata("success","successfully added");
                redirect("admin/setting/people/add");
            } else {
                $this->session->set_userdata("error","oops something went wrong");
                redirect("admin/setting/people/add");
            }
        }
        $this->display('add');
    }



    public function edit($id)
    {
        $data = $this->People_model->view($id);

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $image_parts = explode(";base64,", $this->input->post("input_image"));
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = uniqid() . '.png';
                file_put_contents("./assert/people/" . $file, $image_base64);
                if ($data[0]->img != "demo.png") {
                    unlink("./assert/people/" . $data[0]->img);
                }
                $array = $this->input->post();
                unset($array["input_image"]);
                $array["img"] = $file;
            } else {
                $array = $this->input->post();
                unset($array["input_image"]);
            }
            if (isset($array["delete"])) {
                if (!isset($array["img"])) {
                    $array["img"] = "demo.png";
                }
                if ($data[0]->img != "demo.png") {
                    unlink("./assert/user/" . $data[0]->img);
                }
                unset($array["delete"]);
            }
            $data = $this->People_model->edit($array, $id);
            if (!empty($data)) {
                $this->session->set_userdata("success","updated successfully");
                redirect("admin/setting/people/add");
            } else {
                $this->session->set_userdata("error","oops something went wrong");
                redirect("admin/setting/people/add");
            }
        }

        $this->display("add", $data[0]);
    }
    public function delete($id)
    {
        $data = $this->People_model->delete($id);
        if (!empty($data)) {
            $this->session->set_userdata("success","successfully deleted");
            redirect("admin/setting/people/index");
        } else {
            $this->session->set_userdata("error","oops something went wrong");
            redirect("admin/setting/people/index");
        }
    }

    public function json($name = null)
    {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["people"]["data"] = $this->People_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["people"] = $this->People_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["people"] == 0) {
            $data["people"] = FALSE;
        } else if (!isset($data["people"]["data"]) && $data["people"] >= 1) {
            $data["people"] = TRUE;
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200) // Return status
            ->set_output(json_encode($data["people"]));
    }
}
