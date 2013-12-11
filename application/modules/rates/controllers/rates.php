<?php

class Rates extends MY_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model("rates/rates_model");
    }
    function index(){
        $this->display();
    }
    function display(){
        $data['rates'] = $this->rates_model->get_all();
        $this->template->load('page','rates/rates_list',$data);
    }
    function create() {
        if(!empty($_POST)){
            if($this->rates_model->create($_POST)){
                $this->session->set_flashdata('error','rates saved!');    
            } else {
                $this->session->set_flashdata('error','rates not saved!');    
            }
            redirect('rates');
        } else {
            $this->template->load('page','rates/rates_create');
        }
    }
    function add($items_id,$val) {
        if(!empty($items_id) && !empty($val)){
            $data = array(
                'items_id'=>$items_id,
                'rate_value'=>$val,
            );
            $this->rates_model->create($data);
        }
        $average = $this->rates_model->get_ave($items_id,'items_id',true);
        if(count($average) > 0) {
            echo $average;
        } else {
            echo '0 - Be the first to rate!';
        }
    }
    function edit($id) {
        if(!empty($_POST)){
            $this->rates_model->update($id,$_POST);
            $this->session->set_flashdata('error','rates updated!');    
            redirect('rates');
        } else {
            $data['rates'] = $this->rates_model->get_single($id);
            if(!$data['rates']) {
                $this->session->set_flashdata('error','not a valid rates!');    
                redirect('rates');
            }
            $this->template->load('page','rates/rates_edit',$data);
        }
    }
    function view($id) {
        $data['rates'] = $this->rates_model->get_single($id);
        if(!$data['rates']) {
            $this->session->set_flashdata('error','not a valid rates!');    
            redirect('rates');
        }
        $this->template->load('page','rates/rates_view',$data);
    }
    function delete($id) {
        if(!empty($id)) {
            if($this->rates_model->delete($id)){
                $this->session->set_flashdata('error','rates removed!');    
            } else {
                $this->session->set_flashdata('error','rates not removed!');    
            }
        }
        redirect('rates');
    }
}

?>