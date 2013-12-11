<?php

class Rates_model extends CI_Model{
var $table = 'rates';
    function get_all() {
        $q = $this->db->get($this->table);
        return $q->result();
    }
    function get_single($id) {
        $this->db->where('rates_id',$id);
        $q = $this->db->get($this->table);
        return $q->row();
    }
    function get_some($val,$key) {
        $this->db->where($key,$val);
        $q = $this->db->get($this->table);
        return $q->result();
    }
    function get_ave($val,$key,$count = false) {
        if($count ==false ) {
            $this->db->where($key,$val);
            $q = $this->db->get($this->table);
            return $q->num_rows();
        } else {
            $this->db->select_avg('rate_value');
            $this->db->where($key,$val);
            $q = $this->db->get($this->table);
            return round($q->row()->rate_value,2);
        }
    }
    function count_all() {
        return $this->db->count_all($this->table);
    }
    function create($data) {
        $this->db->insert($this->table,$data);
        if($this->db->affected_rows()>0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
    function update($id,$data) {
        $this->db->where('rates_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows()>0) {
            return true;
        } else {
            return false;
        }
    }
    function delete($id) {
        $this->db->where('rates_id',$id);
        $this->db->delete($this->table);
        if($this->db->affected_rows()>0) {
            return true;
        } else {
            return false;
        }
    }
}