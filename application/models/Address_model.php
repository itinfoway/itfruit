<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Faq_model
 * https://itinfoway.com
 * @author Admin
 */
class Address_model extends CI_Model
{
    public function view_where($where = null, $select = "a.*,u.username")
    {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $this->db->select($select);
        $this->db->join(USERS . " as u", "u.id = a.user_id");
        $this->db->order_by("id", "asc");
        $query = $this->db->get(ADDRESS . " as a");
        $this->db->trans_complete();
        $data = $query->result();

        return $data;
    }

    public function view($where = null, $select = "a.*,u.username")
    {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("a.id", $where);
        }
        $this->db->select($select);
        $this->db->join(USERS . " as u", "u.id = a.user_id");
        $this->db->order_by("id", "asc");
        $query = $this->db->get(ADDRESS . " as a");
        $this->db->trans_complete();
        $data = $query->result();

        return $data;
    }

    public function add($array)
    {
        $this->db->trans_start();
        $this->db->insert(ADDRESS, $array);
        $data = $this->db->insert_id();
        $this->db->trans_complete();
        return $data;
    }

    public function findname($where = null, $old = null)
    {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("type", $where);
        }
        if (!is_null($old)) {
            $this->db->where("type !=", $old);
        }
        $this->db->order_by("id", "asc");
        $query = $this->db->get(ADDRESS);
        $this->db->trans_complete();
        return $query->num_rows();
    }

    public function delete($id)
    {
        $this->db->trans_start();
        $this->db->where('id', $id);
        $data = $this->db->delete(ADDRESS);
        $this->db->trans_complete();
        return $data;
    }

    public function edit($array, $id)
    {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update(ADDRESS);
        $this->db->trans_complete();
        return $data;
    }
}
