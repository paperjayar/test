<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings extends MY_Controller {
    function __construct(){
        parent::__construct();
        $this->load->module("users");
        if(!$this->users->_is_admin()){
            redirect('signin');
        }
    }
    function index() {
        $data['settings'] = $this->settings_model->get_all_settings();
        $this->template->load('page','settings_view',$data);
    }
    function save(){
        if(isset($_POST) && !empty($_POST)) {
            $items = $_POST;
            foreach($items as $key=>$val) {
                $this->settings_model->save($key,$val);
            }
            $this->session->set_flashdata('error','Settings Updated!');    
        } else {
            $this->session->set_flashdata('error','No Settings Updated!');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
}
