<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";
/**
 * Description of blogs/Blog
 * https://itinfoway.com
 * @author Admin
 */
class Blog extends Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->model("blogs_model");
        $this->load->model("blogs_category_model");
    }
    public function index() {
       $this->display("index"); 
    }
    public function add($id=null)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $data = array();
         $data["data"]=new stdClass;
         $data["data"]->blog_id=$id;
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $image_parts = explode(";base64,", $this->input->post("input_image"));
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = uniqid() . '.png';
                file_put_contents("./assert/blog/" . $file, $image_base64);
                $array =  $this->input->post();
                unset($array["input_image"]);
                $array["img"] = $file;
            } else {
                $array = $this->input->post();
                unset($array["input_image"]);
                $array["img"] = "user_demo.png";
            }
            //$array["blog_category_id"] = json_encode($this->input->post("blog_category_id"));
            $data = $this->blogs_model->add($array);
            if (!empty($data)) {
                redirect("admin/blogs/blog/add");
            } else {
                redirect("admin/blogs/blog/add");
            }
        }
        $blog = $this->blogs_category_model->view();
        foreach ($blog as $b) {
            $data["blog"][$b->id] = $b->name;
        }
        $this->display('add', $data);
    }
    public function edit($id)
    {
        $data = $this->blogs_model->view($id);
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $image_parts = explode(";base64,", $this->input->post("input_image"));
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = uniqid() . '.png';
                file_put_contents("./assert/blog/" . $file, $image_base64);
                if ($data[0]->img != "demo.png") {
                    unlink("./assert/blog/" . $data[0]->img);
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
                    unlink("./assert/blog/" . $data[0]->img);
                }
                unset($array["delete"]);
            }            
            $data = $this->blogs_model->edit($array, $id);
            if (!empty($data)) {
                redirect("admin/blogs/blog/add");
            } else {
                redirect("admin/blogs/blog/add");
            }
        }
       
        $blog = $this->blogs_category_model->view();
        $data["blogs"] = $data[0];
        foreach ($blog as $b) {
            $data["blog"][$b->id] = $b->name;
        }
        $this->display("add", $data);
     
  }   
    public function delete($id)
    {
        $data = $this->blogs_model->delete($id);
        if (!empty($data)) {
            redirect("admin/blogs/blog/index");
        } else {
            redirect("admin/blogs/blog/index");
        }
    }
    public function json($name = null)
    {
        if (is_null($name)) {
            $select = !empty($this->input->get("select")) ? $this->input->get("select") : "*";
            $data["blog"]["data"] = $this->blogs_model->view(null, $select);
        } else {
            $name = base64_decode(urldecode($name));
            $old = $this->input->get("name");
            $data["blog"] = $this->blogs_model->findname($name, base64_decode(urldecode($old)));
        }
        if ($data["blog"] == 0) {
            $data["blog"] = FALSE;
        } else if (!isset($data["blog"]["data"]) && $data["blog"] >= 1) {
            $data["blog"] = TRUE;
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200) // Return status
            ->set_output(json_encode($data["blog"]));
    }
}
