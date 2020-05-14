<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Ledger_model
 * https://itinfoway.com
 * @author Admin
 */
class Ledger_model extends CI_Model {

    public function view_where($where = null, $select = "*",$wherein=null) {
        $this->db->trans_start();
        if (!is_null($wherein)) {
            $this->db->where_in("type",$wherein);
        }
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $this->db->select($select);
        $this->db->order_by("id", "DESC");
        $query = $this->db->get(LEDGER);
        $this->db->trans_complete();
        $data = $query->result();

        return $data;
    }

    public function count() {
        $this->db->trans_start();
        $query = $this->db->get(LEDGER);
        $this->db->select('id');
        $this->db->trans_complete();
        return $query->num_rows();
    }

    public function view($where = null, $select = "*") {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("a.id", $where);
        }
        $this->db->select($select);
        $this->db->order_by("id", "asc");
        $query = $this->db->get(LEDGER);
        $this->db->trans_complete();
        $data = $query->result();

        return $data;
    }

    public function add($array) {
        $this->db->trans_start();
        $this->db->insert(LEDGER, $array);
        $data = $this->db->insert_id();
        $this->db->trans_complete();
        return $data;
    }

    public function findname($where = null, $old = null) {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("type", $where);
        }
        if (!is_null($old)) {
            $this->db->where("type !=", $old);
        }
        $this->db->order_by("id", "asc");
        $query = $this->db->get(LEDGER);
        $this->db->trans_complete();
        return $query->num_rows();
    }

    public function delete($id) {
        $this->db->trans_start();
        $this->db->where('id', $id);
        $data = $this->db->delete(LEDGER);
        $this->db->trans_complete();
        return $data;
    }

    public function edit($array, $id) {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update(LEDGER);
        $this->db->trans_complete();
        return $data;
    }

}
