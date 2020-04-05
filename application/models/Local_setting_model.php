<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Local_setting_model
 * https://itinfoway.com
 * @author Admin
 */
class Local_setting_model extends CI_Model {

    public function view($select = "*") {
        $this->db->trans_start();
        $this->db->select($select);
        $this->db->order_by("id", "asc");
        $this->db->limit(1);
        $query = $this->db->get(LOCAL_SETTING);
        $this->db->trans_complete();
        return $query->result();
    }

    public function edit($array, $id) {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update(LOCAL_SETTING);
        $this->db->trans_complete();
        return $data;
    }

}
