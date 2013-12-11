<?php

class Tags extends MY_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model("tags/tags_model");
    }
    function add($items_id = 0) {
        if(!empty($_POST)){
            if($this->tags_model->isValid($this->input->post('items_tag'),$this->input->post('items_id'))) {
                if($this->tags_model->create($_POST)){
                    $this->session->set_flashdata('error','tags saved!');    
                } else {
                    $this->session->set_flashdata('error','tags not saved!');    
                }
            } else {
                $this->session->set_flashdata('error','tags is aready assigned!');    
            }
            redirect(base_url().'items/view/'.$items_id);
        } else {
            $data['items_id'] = $items_id;
            $this->load->view('tags/tags_create',$data);
        }
    }
    function view($id) {
        $data['tags'] = $this->tags_model->get_single($id);
        if(!$data['tags']) {
            $this->session->set_flashdata('error','not a valid tags!');    
            redirect('tags');
        }
        $this->template->load('page','tags/tags_view',$data);
    }
    function delete($id) {
        if(!empty($id)) {
            if($this->tags_model->delete($id)){
                $this->session->set_flashdata('error','tags removed!');    
            } else {
                $this->session->set_flashdata('error','tags not removed!');    
            }
        }
        redirect('tags');
    }
}
?>