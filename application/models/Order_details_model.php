<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Order_details_model
 * https://itinfoway.com
 * @author Admin
 */
class Order_details_model extends CI_Model {

    public function count($where = null) {
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get(ORDER_DETAILS);
        return $query->num_rows();
    }

    public function view($where = null, $select = "*") {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $this->db->select($select);
        $this->db->order_by("id", "asc");
        $query = $this->db->get(ORDER_DETAILS);
        $this->db->trans_complete();
        return $query->result();
    }

    public function add($array) {
        $this->db->trans_start();
        $this->db->insert(ORDER_DETAILS, $array);
        $data = $this->db->insert_id();
        $this->db->trans_complete();
        return $data;
    }

    public function findname($where = null, $old = null) {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("name", $where);
        }
        if (!is_null($old)) {
            $this->db->where("name !=", $old);
        }
        $this->db->order_by("id", "asc");
        $query = $this->db->get(ORDER_DETAILS);
        $this->db->trans_complete();
        return $query->num_rows();
    }

    public function delete($id) {
        $this->db->trans_start();
        $this->db->where('id', $id);
        $data = $this->db->delete(ORDER_DETAILS);
        $this->db->trans_complete();
        return $data;
    }

    public function edit($array, $id) {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update(ORDER_DETAILS);
        $this->db->trans_complete();
        return $data;
    }

}
