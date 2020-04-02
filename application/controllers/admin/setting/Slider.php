<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting
 * https://itinfoway.com
 * @author Admin
 */
class Slider extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Slider_model");
    }

    public function index() {
        $this->display("index");
    }

    public function add() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $image_parts = explode(";base64,", $this->input->post("input_image"));
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = uniqid() . '.png';
                file_put_contents("./assert/slider/" . $file, $image_base64);
                $array = $this->input->post();
                unset($array["input_image"]);
                $array["img"] = $file;
            } else {
                $array = $this->input->post();
                unset($array["input_image"]);
                $array["img"] = "user_demo.png";
            }
            $data = $this->Slider_model->add($array);
            if (!empty($data)) {
                redirect("admin/setting/slider/add");
            } else {
                redirect("admin/setting/slider/add");
            }
        }
        $this->display('add');
    }

    public function edit($id) {
        $data = $this->Slider_model->view($id);

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $image_parts = explode(";base64,", $this->input->post("input_image"));
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = uniqid() . '.png';
                file_put_contents("./assert/slider/" . $file, $image_base64);
                if ($data[0]->img != "demo.png") {
                    unlink("./assert/slider/" . $data[0]->img);
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
                    unlink("./assert/slider/" . $data[0]->img);
                }
                unset($array["delete"]);
            }
            $data = $this->Slider_model->edit($array, $id);
            if (!empty($data)) {
                redirect("admin/setting/slider/add");
            } else {
                redirect("admin/setting/slider/add");
            }
        }
        $this->display("add", $data[0]);
    }

    public function delete($id) {
        $data = $this->Slider_model->delete($id);
        if (!empty($data)) {
            redirect("admin/setting/slider/index");
        } else {
            redirect("admin/setting/slider/index");
        }
    }

    public function json($name = null) {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["slidermain"]["data"] = $this->Slider_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["slidermain"] = $this->Slider_model->findname($name, base64_decode(urldecode($old)));
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
