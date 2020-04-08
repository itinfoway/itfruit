<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting
 * https://itinfoway.com
 * @author Admin
 */
//Subscription type = 2
class Subscription extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->model("fruit_model");
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
                file_put_contents("./assert/products/subscription/" . $file, $image_base64);
                $array = $this->input->post();
                unset($array["input_image"]);
                $array["img"] = $file;
            } else {
                $array = $this->input->post();
                unset($array["input_image"]);
                $array["img"] = "user_demo.png";
            }
            $array["fruit_ids"] = json_encode($this->input->post("fruit_ids"));
            $data = $this->product_model->add($array);
            if (!empty($data)) {
                redirect("admin/product/subscription/add");
            } else {
                redirect("admin/product/subscription/add");
            }
        }
        $fruit = $this->fruit_model->view();
        $data = array();
        foreach ($fruit as $f) {
            $data["fruit"][$f->id] = $f->name;
        }
        $this->display('add', $data);
    }

    public function edit($id) {
        $data = $this->product_model->view(["id" => $id]);

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $image_parts = explode(";base64,", $this->input->post("input_image"));
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = uniqid() . '.png';
                file_put_contents("./assert/products/subscription/" . $file, $image_base64);
                if ($data[0]->img != "demo.png") {
                    unlink("./assert/products/subscription/" . $data[0]->img);
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
                    unlink("./assert/products/subscription/" . $data[0]->img);
                }
                unset($array["delete"]);
            }
            $array["fruit_ids"] = json_encode($this->input->post("fruit_ids"));
            $data = $this->product_model->edit($array, $id);
            if (!empty($data)) {
                redirect("admin/product/subscription/add");
            } else {
                redirect("admin/product/subscription/add");
            }
        }
        $fruit = $this->fruit_model->view();
        $data["product"] = $data[0];
        foreach ($fruit as $f) {
            $data["fruit"][$f->id] = $f->name;
        }

        $this->display("add", $data);
    }

    public function delete($id) {
        $data = $this->product_model->delete($id);
        if (!empty($data)) {
            redirect("admin/product/subscription/index");
        } else {
            redirect("admin/product/subscription/index");
        }
    }

    public function json($name = null) {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["products"]["data"] = $this->product_model->view(["type" => 2], $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["products"] = $this->product_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["products"] == 0) {
            $data["products"] = FALSE;
        } else if (!isset($data["products"]["data"]) && $data["products"] >= 1) {
            $data["products"] = TRUE;
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data["products"]));
    }

}
