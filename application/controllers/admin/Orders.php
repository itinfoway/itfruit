<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Orders
 * https://itinfoway.com
 * @author Admin
 */
class Orders extends Controller {

    public function view($id) {
        $this->load->model("order_details_model");
        $this->load->model("order_item_model");
        $data["order_details"] = $this->order_details_model->view(["id" => $id]);
        $data["order_item"] = $this->order_item_model->view(["order_details_id" => $id]);
        $this->display("view", $data);
    }

}
