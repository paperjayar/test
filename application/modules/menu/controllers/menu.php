<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends MY_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model("menu_model");
        $this->load->module("users");
    }
    
    function index(){
        $data['current'] = $this->uri->segment(1);
        if($this->users->_is_logged_in()){
            if($this->users->_is_admin()){
                $data['items'] = $this->menu_model->menu_admin();
            } else {
                $data['items'] = $this->menu_model->menu_logged_out();
            }
        } else {
            $data['items'] = $this->menu_model->menu_logged_out();
        }
        
        $data['currentuser'] = @$this->users->userdata();

        $this->load->view("menu", $data);
    }
    
    //Limit access
    function _remap(){
        show_404();
    }
        
}

?>