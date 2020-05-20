<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";

/**
 * Description of Blog
 * https://itinfoway.com
 * @author Admin
 */
class Blog extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("blogs_category_model");
        $this->load->model("blogs_model");
    }

    public function index() {
        $data["category"] = $this->blogs_category_model->view();
        $data["blog"] = $this->blogs_model->view();
        $this->display('index', $data);
    }

    public function read_more($id) {
        $data["category"] = $this->blogs_category_model->view();
        $data["blog"] = $this->blogs_model->view($id);
        $this->display('read_more', $data);
    }

    public function category($id) {
        $data["category"] = $this->blogs_category_model->view();
        $data["blog"] = $this->blogs_model->view_where(["b.name"=>str_replace("-", " ", $id)]);
        $this->display('index', $data);
    }

}
