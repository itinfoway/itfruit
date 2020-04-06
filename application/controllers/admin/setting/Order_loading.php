<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting/Order_loading
 * https://itinfoway.com
 * @author Admin
 */
class Order_loading extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("order_loading_model");
         $this->load->model("product_model");
    }

    public function index() {
        $this->display("index");
    }
    public function add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            
            $array["alacarte_ids"] = json_encode($this->input->post("alacarte_ids"));
            $data = $this->order_loading_model->add($array);
            if (!empty($data)) {
                redirect("admin/setting/order_loading/add");
            } else {
                redirect("admin/setting/order_loading/add");
            }
        }
/*        $alacarte = $this->product_model->view();
        $data = array();
        foreach ($alacarte as $v) {
            $data["alacarte"][$v->id] = $v->name;
        }*/
        $this->display('add');
    }


    public function edit($id)
    {
        $data = $this->order_loading_model->view($id);

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            
            
            $array["vitamin_ids"] = json_encode($this->input->post("vitamin_ids"));
            
            $data = $this->order_loading_model->edit($array, $id);
            if (!empty($data)) {
                redirect("admin/setting/order_loading/add");
            } else {
                redirect("admin/setting/order_loading/add");
            }
        }
        $vitamin = $this->product_model	->view();
       
        $da=array();
        $da["data"]=$data[0]; 
        foreach ($vitamin as $v) {
            $da["vitamin"][$v->id] = $v->name;
        }
        $this->display("add", $da);
    }

    public function delete($id)
    {
        $data = $this->order_loading_model->delete($id);
        if (!empty($data)) {
            redirect("admin/setting/order_loading/index");
        } else {
            redirect("admin/setting/order_loading/index");
        }
    }

    public function json($name = null)
    {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["fruit"]["data"] = $this->order_loading_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["fruit"] = $this->order_loading_model->findname($name, base64_decode(urldecode($old)));
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
