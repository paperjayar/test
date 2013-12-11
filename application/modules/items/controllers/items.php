<?php

class Items extends MY_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model("items/items_model");
    }
    function index(){
        $this->display();
    }
    function display(){
        $data['items'] = $this->items_model->get_all();
        $this->template->load('page','items/items_list',$data);
    }
    function create() {
        if(!empty($_POST)){
            if($this->items_model->create($_POST)){
                $this->session->set_flashdata('error','items saved!');    
            } else {
                $this->session->set_flashdata('error','items not saved!');    
            }
            redirect('items');
        } else {
            $this->template->load('page','items/items_create');
        }
    }
    function edit($id) {
        if(!empty($_POST)){
            $this->items_model->update($id,$_POST);
            $this->session->set_flashdata('error','items updated!');    
            redirect('items');
        } else {
            $data['items'] = $this->items_model->get_single($id);
            if(!$data['items']) {
                $this->session->set_flashdata('error','not a valid items!');    
                redirect('items');
            }
            $this->template->load('page','items/items_edit',$data);
        }
    }
    function view($id) {
        $this->load->model("tags/tags_model");
        $this->load->model("rates/rates_model");
        $data['items'] = $this->items_model->get_single($id);
        $data['tags'] = $this->tags_model->get_some($id,'items_id');
        $data['votes'] = $this->rates_model->get_ave($id,'items_id');
        $data['rates'] = $this->rates_model->get_ave($id,'items_id',true);
        if(!$data['items']) {
            $this->session->set_flashdata('error','not a valid items!');    
            redirect('items');
        }
        $this->items_model->increment($id,'views');
        $this->template->load('page','items/items_view',$data);
    }
    function delete($id) {
        if(!empty($id)) {
            if($this->items_model->delete($id)){
                $this->session->set_flashdata('error','items removed!');    
            } else {
                $this->session->set_flashdata('error','items not removed!');    
            }
        }
        redirect('items');
    }
}

?>