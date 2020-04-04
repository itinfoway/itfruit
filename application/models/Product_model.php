<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Fruit_model
 * https://itinfoway.com
 * @author Admin
 */
class Product_model extends CI_Model {
	

    public function fruit($where = array())
    {
        $this->db->trans_start();
        $this->db->where_in($where);
        $this->db->select("name");
        $query = $this->db->get(FRUIT_NAME);
        $this->db->trans_complete();
        return $dataF = $query->result();
    }
    public function view($where = null, $select = "*")
    {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("id", $where);
        }
        $this->db->select($select);
        $this->db->order_by("id", "asc");
        $query = $this->db->get(PRODUCTS_NAME);
        $this->db->trans_complete();
        $data = $query->result();
        if (!empty($data)) {
            $count = 0;
            while ($data) {

                $fruit = $this->fruit(json_decode($data[$count]->fruit_ids));
                $data[$count]->fruit = $fruit;
                $count++;
                if (!isset($data[$count])) {
                    break;
                }
            }
        }
        return $data;
    }

    public function add($array)
    {
        $this->db->trans_start();
        $this->db->insert(PRODUCTS_NAME, $array);
        $data = $this->db->insert_id();
        $this->db->trans_complete();
        return $data;
    }
    

    public function findname($where = null, $old = null)
    {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("qus", $where);
        }
        if (!is_null($old)) {
            $this->db->where("qus !=", $old);
        }
        $this->db->order_by("id", "asc");
        $query = $this->db->get(PRODUCTS_NAME);
        $this->db->trans_complete();
        return $query->num_rows();
    }

    public function delete($id)
    {
        $this->db->trans_start();
        $this->db->where('id', $id);
        $data = $this->db->delete(PRODUCTS_NAME);
        $this->db->trans_complete();
        return $data;
    }

    public function edit($array, $id)
    {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update(PRODUCTS_NAME);
        $this->db->trans_complete();
        return $data;
    }

}