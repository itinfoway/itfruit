<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/Controller.php";
/**
 * Description of Profile
 * https://itinfoway.com
 * @author Admin
 */
class Profile extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model("user_model");
    }

    public function index()
    {
        $data = $this->user_model->view($this->session->userdata("user")->id);
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $image_parts = explode(";base64,", $this->input->post("input_image"));
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $file = uniqid() . '.png';
                file_put_contents("./assert/user/" . $file, $image_base64);
                if ($data[0]->img != "user_demo.png") {
                    unlink("./assert/user/" . $data[0]->img);
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
                    $array["img"] = "user_demo.png";
                }
                if ($data[0]->img != "user_demo.png") {
                    unlink("./assert/user/" . $data[0]->img);
                }
                unset($array["delete"]);
            }
            unset($array["password_confirmation"]);

            $img = array();
        $img[0]=$this->session->userdata("user");
        $img[0]->img = "user_demo.png";
            $data = $this->user_model->edit($array, $this->session->userdata("user")->id);
            if (!empty($data)) {
                redirect("profile");
            } else {
                redirect("profile");
            }
        }
        $this->display('index', $data[0]);
    }
    public function changepassword(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $pass = $this->input->post();
            $data = $this->user_model->view($this->session->userdata("user")->id);
            if($data[0]->password==$pass["oldpassword"]){
                $this->user_model->edit(["password"=>$pass["new_password"]],$this->session->userdata("user")->id);
                $this->session->set_userdata("success", "successfully password change");
                redirect("logout");
            }else{
               $this->session->set_userdata("error", "old password is incorrect"); 
            }
        }
        $this->display('changepasswor');
    }
}
