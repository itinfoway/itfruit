<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
class Login_model extends CI_Model {

    public function view($whare = array()) {
        $this->db->trans_start();
        if (!empty($whare)) {
            $this->db->where($whare);
        }
        $query = $this->db->get(ADMIN_NAME);
        $this->db->trans_complete();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
