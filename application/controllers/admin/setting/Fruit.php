<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting
 * https://itinfoway.com
 * @author Admin
 */
class Fruit extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("fruit_model");
        $this->load->model("vitamin_model");
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
                file_put_contents("./assert/fruit/" . $file, $image_base64);
                $array =  $this->input->post();
                unset($array["input_image"]);
                $array["img"] = $file;
            } else {
                $array = $this->input->post();
                unset($array["input_image"]);
                $array["img"] = "user_demo.png";
            }
            $array["vitamin_ids"] = json_encode($this->input->post("vitamin_ids"));
            $data = $this->fruit_model->add($array);
            if (!empty($data)) {
                redirect("admin/setting/fruit/add");
            } else {
                redirect("admin/setting/fruit/add");
            }
        }
        $vitamin = $this->vitamin_model->view();
        $data = array();
        foreach ($vitamin as $v) {
            $data["vitamin"][$v->id] = $v->name;
        }
        $this->display('add', $data);
    }


    public function edit($id)
    {
        $data = $this->fruit_model->view($id);

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $image_parts = explode(";base64,", $this->input->post("input_image"));
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = uniqid() . '.png';
                file_put_contents("./assert/fruit/" . $file, $image_base64);
                if ($data[0]->img != "demo.png") {
                    unlink("./assert/fruit/" . $data[0]->img);
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
                    unlink("./assert/fruit/" . $data[0]->img);
                }
                unset($array["delete"]);
            }
            $array["vitamin_ids"] = json_encode($this->input->post("vitamin_ids"));
            
            $data = $this->fruit_model->edit($array, $id);
            if (!empty($data)) {
                redirect("admin/setting/fruit/add");
            } else {
                redirect("admin/setting/fruit/add");
            }
        }
        $vitamin = $this->vitamin_model->view();
       
        $da=array();
        $da["data"]=$data[0]; 
        foreach ($vitamin as $v) {
            $da["vitamin"][$v->id] = $v->name;
        }
        $this->display("add", $da);
    }

    public function delete($id)
    {
        $data = $this->fruit_model->delete($id);
        if (!empty($data)) {
            redirect("admin/setting/fruit/index");
        } else {
            redirect("admin/setting/fruit/index");
        }
    }

    public function json($name = null)
    {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["fruit"]["data"] = $this->fruit_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["fruit"] = $this->fruit_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["fruit"] == 0) {
            $data["fruit"] = FALSE;
        } else if (!isset($data["fruit"]["data"]) && $data["fruit"] >= 1) {
            $data["fruit"] = TRUE;
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200) // Return status
            ->set_output(json_encode($data["fruit"]));
    }
}
