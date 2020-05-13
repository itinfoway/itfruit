<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
class Login_model extends CI_Model
{

    
    public function getuser($whare = array())
    {
        $this->db->trans_start();
        $this->db->where("email", $whare["username"]);
        $this->db->select("email");
        $query = $this->db->get(USERS);
        $this->db->trans_complete();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data[0];
        } else {
            return TRUE;
        }
    }
    public function view($whare = array())
    {
        $this->db->trans_start();
        $this->db->or_where("username", $whare["username"]);
        $this->db->or_where("email", $whare["username"]);
        $this->db->or_where("mobile", $whare["username"]);
        $this->db->having("ip_attempt", $whare["ip_attempt"]);
        $this->db->select("attempt,ip_attempt,lastattempt");
        $query = $this->db->get(USERS);
        $this->db->trans_complete();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data[0];
        } else {
            return TRUE;
        }
    }
    public function forgetPassword($data = array(), $whare = array())
    {
        $this->db->trans_start();
        $this->db->set($data);
        $this->db->where("email", $whare["email"]);
        $data = $this->db->update(USERS);
        $this->db->trans_complete();
    }
    public function attept($data = array(), $whare = array(), $string = null)
    {
        $this->db->trans_start();
        if (is_null($string)) {
            $this->db->set('attempt', 0, false);
        } else {
            $this->db->set('attempt', "attempt + 1", false);
        }
        $this->db->set('lastattempt', time());
        $this->db->set('ip_attempt', $data["ip_address"]);
        $this->db->or_where("username", $whare["username"]);
        $this->db->or_where("email", $whare["username"]);
        $this->db->or_where("mobile", $whare["username"]);
        $data = $this->db->update(USERS);
        $this->db->trans_complete();
    }
    public function login($data = array(), $whare = array())
    {
        $this->db->trans_start();
        if (!empty($whare)) {
            $this->db->or_where("username", $whare["username"]);
            $this->db->or_where("email", $whare["username"]);
            $this->db->or_where("mobile", $whare["username"]);
            $this->db->having("password", $whare["password"]);
            $this->db->having("status", 1);
        }
        $this->db->select("username,fname,lname,email,img,id,strip_id,password");
        $query = $this->db->get(USERS);
        $this->db->trans_complete();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
}
