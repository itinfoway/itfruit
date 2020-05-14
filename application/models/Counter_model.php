<?php

/**
 * Description of Counter_model
 * https://itinfoway.com
 * @author Admin
 */
class Counter_model extends CI_Model {

    public function users_count($where = null) {
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get(USERS);
        return $query->num_rows();
    }
    
    public function orders_count($where = null) {
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get(ORDER_DETAILS);
        return $query->num_rows();
    }
    public function subscription_count($where = null) {
        if (!is_null($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get(SUBSCRIPTION);
        return $query->num_rows();
    }

}
