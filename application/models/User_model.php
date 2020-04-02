<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Faq_model
 * https://itinfoway.com
 * @author Admin
 */
class User_model extends CI_Model
{
    public function view_where($where = null, $select = "*")
    {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $this->db->select($select);
        $this->db->order_by("id", "asc");
        $query = $this->db->get(USERS);
        $this->db->trans_complete();
        $data = $query->result();
        return $data;
    }

    public function view($where = null, $select = "*")
    {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("id", $where);
        }
        $this->db->select($select);
        $this->db->order_by("id", "asc");
        $query = $this->db->get(USERS);
        $this->db->trans_complete();
        $data = $query->result();
        return $data;
    }

    public function add($array)
    {
        $this->db->trans_start();
        $this->db->insert(USERS, $array);
        $data = $this->db->insert_id();
        $this->db->trans_complete();
        return $data;
    }
    public function findemail($where = null, $old = null)
    {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("email", $where);
        }
        if (!is_null($old)) {
            $this->db->where("email !=", $old);
        }
        $this->db->order_by("id", "asc");
        $query = $this->db->get(USERS);
        $this->db->trans_complete();
        return $query->num_rows();
    }

    public function finduname($where = null, $old = null)
    {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("username", $where);
        }
        if (!is_null($old)) {
            $this->db->where("username !=", $old);
        }
        $this->db->order_by("id", "asc");
        $query = $this->db->get(USERS);
        $this->db->trans_complete();
        return $query->num_rows();
    }
    public function findname($where = null, $old = null)
    {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("fname", $where);
        }
        if (!is_null($old)) {
            $this->db->where("fname !=", $old);
        }
        $this->db->order_by("id", "asc");
        $query = $this->db->get(USERS);
        $this->db->trans_complete();
        return $query->num_rows();
    }


    public function delete($id)
    {
        $this->db->trans_start();
        $this->db->where('id', $id);
        $data = $this->db->delete(USERS);
        $this->db->trans_complete();
        return $data;
    }


    public function edit($array, $id)
    {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update(USERS);
        $this->db->trans_complete();
        return $data;
    }
}
