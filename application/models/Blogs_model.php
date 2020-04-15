<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Blogs_model
 * https://itinfoway.com
 * @author Admin
 */
class Blogs_model extends CI_Model {

    public function view($where = null, $select = "*") {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("id", $where);
        }
        $this->db->select($select);
        $this->db->order_by("id", "asc");
        $query = $this->db->get(BLOGS);
        $this->db->trans_complete();
        return $query->result();
    }

    public function add($array) {
        $this->db->trans_start();
        $this->db->insert(BLOGS, $array);
        $data = $this->db->insert_id();
        $this->db->trans_complete();
        return $data;
    }

    public function findname($where = null, $old = null) {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("qus", $where);
        }
        if (!is_null($old)) {
            $this->db->where("qus !=", $old);
        }
        $this->db->order_by("id", "asc");
        $query = $this->db->get(BLOGS);
        $this->db->trans_complete();
        return $query->num_rows();
    }

    public function delete($id) {
        $this->db->trans_start();
        $this->db->where('id', $id);
        $data = $this->db->delete(BLOGS);
        $this->db->trans_complete();
        return $data;
    }

    public function edit($array, $id) {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update(BLOGS);
        $this->db->trans_complete();
        return $data;
    }

}
