<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Fruit_model
 * https://itinfoway.com
 * @author Admin
 */
class Fruit_model extends CI_Model
{

    public function vitamin($where = array())
    {
        $this->db->trans_start();
        $this->db->select("name,id");
        $query = $this->db->get(VITAMIN_NAME);
        $this->db->trans_complete();
        return $dataV = $query->result();
    }
    public function view($where = null, $select = "*")
    {
        $this->db->trans_start();
        if (!is_null($where)) {
            $this->db->where("id", $where);
        }
        $this->db->select($select);
        $this->db->order_by("id", "asc");
        $query = $this->db->get(FRUIT_NAME);
        $this->db->trans_complete();
        $data = $query->result();
        $vitamin = $this->vitamin();
        $vit=array();
        foreach($vitamin as $d){
            $vit[$d->id]=$d->name;
        }
        if (!empty($data)) {
            $count = 0;
            while ($data) {
                $vitarray=array();
                foreach(json_decode($data[$count]->vitamin_ids) as $id){
                    $vitarray[]=$vit[$id];
                }
                $data[$count]->vitamin = $vitarray;
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
        $this->db->insert(FRUIT_NAME, $array);
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
        $query = $this->db->get(FRUIT_NAME);
        $this->db->trans_complete();
        return $query->num_rows();
    }

    public function delete($id)
    {
        $this->db->trans_start();
        $this->db->where('id', $id);
        $data = $this->db->delete(FRUIT_NAME);
        $this->db->trans_complete();
        return $data;
    }

    public function edit($array, $id)
    {
        $this->db->trans_start();
        $this->db->set($array);
        $this->db->where('id', $id);
        $data = $this->db->update(FRUIT_NAME);
        $this->db->trans_complete();
        return $data;
    }
}
