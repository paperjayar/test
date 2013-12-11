<?php

class Items_model extends CI_Model{
var $table = 'items';
var $tags = 'tags';
var $rates = 'rates';
    function get_all() {
        $q = $this->db->get($this->table);
        return $q->result();
    }
    function get_single($id) {
        $this->db->where('items_id',$id);
        $q = $this->db->get($this->table);
        return $q->row();
    }
    function get_some($key,$val,$unique = false) {
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
    function search($q = 'all',$mode = 'none',$sort = 'default',$limit = 0,$offset = 0,$count = false) {
        if($mode == 'none' && $q != 'all') {
            $this->db->or_like('name',$q);
            $this->db->or_like('site',$q);
            $this->db->or_like('episode',$q);
        } else if ($mode == 'name' && $q != 'all'){
            $this->db->like('name',$q,'after');
        } else if ($mode == 'site' && $q != 'all'){
            $this->db->where('site',$q);
        } else if ($mode == 'date' && $q == 'all'){
            $this->db->order_by('datetime','desc');
        } else if ($mode == 'views' && $q == 'all'){
            $this->db->order_by('views','desc');
        } else if ($mode == 'tags'){
            $this->db->where($this->tags.'.items_tag',$q);
            $this->db->join('tags',$this->table.'.items_id = '.$this->tags.'.items_id');
        } else if ($mode == 'rate'){
            if($limit != 0 || $offset != 0) {
                $count = $this->db->query("
                SELECT *,
                    (
                        SELECT avg(rates.rate_value)
                        FROM rates
                        WHERE rates.items_id = items.items_id
                    ) as rate
                FROM items
                ");
                $data['count'] = $count->num_rows();
                $result = $this->db->query("
                SELECT *,
                    (
                        SELECT avg(rates.rate_value)
                        FROM rates
                        WHERE rates.items_id = items.items_id
                    ) as rate
                FROM items
                Order by rate desc
                LIMIT {$limit}
                OFFSET {$offset}
                ");
                $data['result'] = $result->result();
            } else {
                $q = $this->db->query('
                SELECT *,
                    (
                        SELECT avg(rates.rate_value)
                        FROM rates
                        WHERE rates.items_id = items.items_id
                    ) as rate
                FROM items
                Order by rate desc
                ');
                $data['result'] = $q->result();
                $data['count'] = $q->num_rows();
            }            
            return $data;
        } else {
            //
        }
        if($limit != 0) {
            $this->db->limit($limit);
        }
        if($offset != 0) {
            $this->db->offset($offset);
        }
        $q = $this->db->get($this->table);
        if($count == true) {
            return $q->num_rows();
        } else {
            return $q->result();
        }
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
        $this->db->where('items_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows()>0) {
            return true;
        } else {
            return false;
        }
    }
    function delete($id) {
        $this->db->where('items_id',$id);
        $this->db->delete($this->table);
        if($this->db->affected_rows()>0) {
            return true;
        } else {
            return false;
        }
    }
    function increment($id,$key) {
        $this->db->where('items_id', $id);
        $this->db->set($key, "$key+1", FALSE);
        $this->db->update($this->table);
        if($this->db->affected_rows()>0) {
            return true;
        } else {
            return false;
        }
    }
}