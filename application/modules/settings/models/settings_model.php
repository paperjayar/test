<?php

class Settings_model extends CI_Model{
var $table = 'settings';
    function get_setting($name) {
        $this->db->where('settings_name',$name);
        $q = $this->db->get($this->table);
        $row = $q->row();
        return $row->settings_value;
    }
    function get_all_settings(){
        $this->db->where('show',0);
        $q = $this->db->get($this->table);
        return $q->result();
    }
    function save($name,$value) {
        $this->db->where('settings_name',$name);
        $q = $this->db->update($this->table,array('settings_value'=>$value));
    }
}