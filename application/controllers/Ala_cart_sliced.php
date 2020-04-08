<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Address
 * https://itinfoway.com
 * @author Admin
 */
class Ala_cart_sliced extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model("product_model");
        $data["products"] = $this->product_model->view(["type" => 1]);
        $this->display('index', $data);
    }

    public function gettime() {
        $this->load->model("order_loading_model");
        $this->load->model("today_order_model");
        $date = $this->input->post("date");
        $day = date("N", strtotime($date));
        $date = date("Y-m-d", strtotime($date));
        $time = $this->order_loading_model->viewwhere(["week_day" => $day]);
        $today = $this->today_order_model->viewwhere(["delivered_on_date" => $date]);
        foreach ($time as $t) {
            if (!empty($today)) {
                foreach ($today as $d) {
                    if ($t->ala_carte_loading > $d->total_item_sum && $t->id == $d->order_loading_id) {
                        $data["time"][$t->id]["min_item"] = $t->ala_carte_loading - $d->total_item_sum;
                        $data["time"][$t->id]["time"] = $t->name;
                        $data["time"][$t->id]["id"] = $t->id;
                    }
                }
            } else {
                $data["time"][$t->id]["min_item"] = $t->ala_carte_loading;
                $data["time"][$t->id]["time"] = $t->name;
                $data["time"][$t->id]["id"] = $t->id;
            }
        }
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200) // Return status
                        ->set_output(json_encode($data));
    }

}
