<?php

class User_model extends CI_Model{
    
    var $table = "users";
    var $roles_table = "users_roles";
    
    function __construct(){
        parent::__construct();
    }
    
    function create($data){
        $str = $this->db->insert_string($this->table, $data);
        
        $query = $this->db->query($str);
        
        if($query){
            return $this->db->insert_id();
        }else{
            return false;
        }
        
    }
    function add_role($id,$role_id) {
        $data = array(
            'user_id'=>$id,
            'role_id'=>$role_id,
        );
        $q = $this->db->insert($this->roles_table,$data);
        if($this->db->affected_rows()>0) {
            return true;
        } else {
            return false;
        }
    }
    
    function read(){
        $query = $this->db->query("SELECT * FROM $this->table");
        return $query->result();
    }
    
    function user_by_id($id){
        $query = $this->db->query("
            SELECT * 
            FROM $this->table
            WHERE id = $id
        ");
        
        $query->row()->role = $this->get_role($id);
        $query->row()->role_name = $this->get_role_name($query->row()->role);
        
        if($query->num_rows > 0){
            return $query->row();
        }else{
            return false;
        }
    }
    
    function user_by_nicename($user_nicename){
        //Get ID
        $query = $this->db->query("SELECT id FROM $this->table WHERE user_nicename = ?", $user_nicename);
                
        if($query->num_rows > 0){
            return $this->user_by_id($query->row()->id);
        }else{
            return false;
        }
    }
    
    function update($userid, $userdata){
        $data = (array)$userdata;
        $where = "id = $userid"; 
        $str = $this->db->update_string($this->table, $data, $where);
        $query = $this->db->query($str);
        return $query;
    }
    
    
    function delete(){
        
    }
    
    function get_role($user_id){
        $query = $this->db->query("SELECT role_id FROM users_roles WHERE user_id = $user_id");
        if($query->num_rows > 0){
            return (int)$query->row()->role_id;
        }else{
            return 0;
        }
    }
    function get_role_name($role_id){
        $query = $this->db->query("SELECT name FROM roles WHERE id = $role_id");
        if($query->num_rows > 0){
            return $query->row()->name;
        }else{
            return false;
        }
    }
    
    function validate($user_email, $password){
        $query = $this->db->query("SELECT * FROM $this->table WHERE user_email = '$user_email' AND user_pass = '$password'");
        if($query->num_rows === 1){
            return $query->row();
        }else{
            return false;
        }
    }
    
        
}

?>