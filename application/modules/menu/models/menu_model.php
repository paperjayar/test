<?php

class Menu_model extends CI_Model{
    
    function create() {
        
    }
    
    function read() {
        $menu = array();
        $menu[0] = new stdClass();
        $menu[0]->url = "";
        $menu[0]->name = "Home";
        return $menu;
    }
    
    function menu_admin(){
        $menu = array();
        $menu[1] = new stdClass();
        $menu[1]->url = "settings";
        $menu[1]->name = "Settings";
        $menu[2] = new stdClass();
        $menu[2]->url = "items";
        $menu[2]->name = "Items";
        return $menu;
    }
    
    function menu_logged_out(){
        $menu = array();
        $menu[2] = new stdClass();
        $menu[2]->url = "search/name";
        $menu[2]->name = "Model Name";
        $menu[3] = new stdClass();
        $menu[3]->url = "search/site";
        $menu[3]->name = "By Site";
        $menu[4] = new stdClass();
        $menu[4]->url = "search/date";
        $menu[4]->name = "By Date";
        $menu[5] = new stdClass();
        $menu[5]->url = "search/views";
        $menu[5]->name = "By Views";
        $menu[6] = new stdClass();
        $menu[6]->url = "search/rate";
        $menu[6]->name = "By Rate";
        $menu[7] = new stdClass();
        $menu[7]->url = "search/tags";
        $menu[7]->name = "By Tags";
        return $menu;
    }
    
    function update(){
        
    }
    
    function delete(){
        
    }
}

?>