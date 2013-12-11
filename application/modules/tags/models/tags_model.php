<?php

class Tags_model extends CI_Model{
var $table = 'tags';
    function get_all() {
        $q = $this->db->get($this->table);
        return $q->result();
    }
    function get_single($id) {
        $this->db->where('tags_id',$id);
        $q = $this->db->get($this->table);
        return $q->row();
    }
    function isValid($items_tag,$items_id) {
        $this->db->where('items_tag',$items_tag);
        $this->db->where('items_id',$items_id);
        $q = $this->db->get($this->table);
        if($q->num_rows()<=0) {
            return true;
        } else {
            return false;
        }
    }
    function get_some($val,$key,$unique = false) {
        if($unique == true) {
            $this->db->distinct();
        }    
        if($key != '' && $val != '') {
            $this->db->where($key,$val);
        } else {
            $this->db->select($key);
        }
        $q = $this->db->get($this->table);
        return $q->result();
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
        $this->db->where('tags_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows()>0) {
            return true;
        } else {
            return false;
        }
    }
    function delete($id) {
        $this->db->where('tags_id',$id);
        $this->db->delete($this->table);
        if($this->db->affected_rows()>0) {
            return true;
        } else {
            return false;
        }
    }
}