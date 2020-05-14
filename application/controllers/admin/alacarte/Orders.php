<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Setting
 * https://itinfoway.com
 * @author Admin
 */
class Orders extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("order_details_model");
    }

    public function index() {
        $this->display("index");
    }

    public function json($name = null) {
        $where["type"]=1;
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["orders"]["data"] = $this->order_details_model->view($where, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["orders"] = $this->order_details_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["orders"] == 0) {
            $data["orders"] = FALSE;
        } else if (!isset($data["orders"]["data"]) && $data["orders"] >= 1) {
            $data["orders"] = TRUE;
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data["orders"]));
    }

}
