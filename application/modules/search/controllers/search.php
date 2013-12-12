<?php

class Search extends MY_Controller{
    var $per_page = 8;
    function __construct(){
        parent::__construct();
        $this->load->model("items/items_model");
        $this->load->model("tags/tags_model");
        $this->load->library('pagination');
    }
    function index($offset = 0){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'search/index/';
        $config['total_rows'] = $this->items_model->search('all','none','default',0,0,true);
        $config['per_page'] = $this->per_page; 
        $this->pagination->initialize($config);
        $data['result'] = $this->items_model->search('all','none','default',$config['per_page'],$offset);
        $data['per_page'] = $config['per_page'];
        $data['total_rows'] = $config['total_rows'];
        $this->template->load('page', 'search_default',$data);
    }
    function term($term='',$offset = 0){
        if($this->input->post('q') != '') {
            $term = $this->input->post('q');
        }
        if($term != '') {
            $this->load->library('pagination');
            $config['uri_segment'] = 4;
            $config['base_url'] = base_url().'search/term/'.$term;
            $config['total_rows'] = $this->items_model->search($term,'none','default',0,0,true);
            $config['per_page'] = $this->per_page; 
            $this->pagination->initialize($config);
            $data['result'] = $this->items_model->search($term,'none','default',$config['per_page'],$offset);
            $data['per_page'] = $config['per_page'];
            $data['total_rows'] = $config['total_rows'];
            $this->template->load('page', 'search_result',$data);
        } else {
            $this->session->set_flashdata('error','Empty Search Term!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    function name($name = '',$term='',$offset = 0){
        if($name != '') {
            $term = $name;
        }
        if($term != '') {
            $this->load->library('pagination');
            $config['uri_segment'] = 4;
            $config['base_url'] = base_url().'search/name/'.$term;
            $config['total_rows'] = $this->items_model->search($term,'name','default',0,0,true);
            $config['per_page'] = $this->per_page; 
            $this->pagination->initialize($config);
            $data['result'] = $this->items_model->search($term,'name','default',$config['per_page'],$offset);
            $data['per_page'] = $config['per_page'];
            $data['total_rows'] = $config['total_rows'];
            $this->template->load('page','search_result',$data);
        } else {
            $this->load->view('search_by_name');
        }
    }
    function site($term='',$offset = 0){
        if($this->input->post('site') != '') {
            $term = $this->input->post('site');
        }
        if($term != '') {
            $this->load->library('pagination');
            $config['uri_segment'] = 4;
            $config['base_url'] = base_url().'search/site/'.$term;
            $config['total_rows'] = $this->items_model->search($term,'site','default',0,0,true);
            $config['per_page'] = $this->per_page; 
            $this->pagination->initialize($config);
            $data['result'] = $this->items_model->search($term,'site','default',$config['per_page'],$offset);
            $data['per_page'] = $config['per_page'];
            $data['total_rows'] = $config['total_rows'];
            $this->template->load('page', 'search_result',$data);
        } else {
            $data['sites'] = $this->items_model->get_some('site','',true);
            $this->template->load('page', 'search_by_site',$data);
        }
    }
    function tags($term='',$offset = 0){
        if($this->input->post('tags') != '') {
            $term = $this->input->post('tags');
        }
        if($term != '') {
            $this->load->library('pagination');
            $config['uri_segment'] = 4;
            $config['base_url'] = base_url().'search/tags/'.$term;
            $config['total_rows'] = $this->items_model->search($term,'tags','default',0,0,true);
            $config['per_page'] = $this->per_page; 
            $this->pagination->initialize($config);
            $data['result'] = $this->items_model->search($term,'tags','default',$config['per_page'],$offset);
            $data['per_page'] = $config['per_page'];
            $data['total_rows'] = $config['total_rows'];
            $this->template->load('page', 'search_result',$data);
        } else {
            $data['tags'] = $this->tags_model->get_some('','items_tag',true);
            $this->load->view('search_by_tags',$data);
        }
    }
    function date($offset = 0){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'search/date/';
        $config['total_rows'] = $this->items_model->search('all','date','default',0,0,true);
        $config['per_page'] = $this->per_page; 
        $this->pagination->initialize($config);
        $data['result'] = $this->items_model->search('all','date','default',$config['per_page'],$offset);
        $data['per_page'] = $config['per_page'];
        $data['total_rows'] = $config['total_rows'];
        $this->template->load('page', 'search_result',$data);
    }
    function views($offset = 0){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'search/views/';
        $config['total_rows'] = $this->items_model->search('all','views','default',0,0,true);
        $config['per_page'] = $this->per_page; 
        $this->pagination->initialize($config);
        $data['result'] = $this->items_model->search('all','views','default',$config['per_page'],$offset);
        $data['per_page'] = $config['per_page'];
        $data['total_rows'] = $config['total_rows'];
        $this->template->load('page', 'search_result',$data);
    }
    function rate($offset = 0){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'search/rate/';
        $config['per_page'] = $this->per_page; 
        $info = $this->items_model->search('all','rate','default',$config['per_page'],$offset);
        $config['total_rows'] = $info['count'];
        $this->pagination->initialize($config);
        $data['result'] = $info['result'];
        $data['per_page'] = $config['per_page'];
        $data['total_rows'] = $config['total_rows'];
        $this->template->load('page', 'search_result',$data);
    }
    /*
        mode = by site,tags,name
        sort = views,rate,date
    */
    function search($q = 'all',$mode = 'none',$sort = 'default',$limit = 1,$offset = 0,$count = false){
        if($mode == 'none') {
            $data['result'] = $this->items_model->search($q);
        }
        $this->template->load('page', 'search_result',$data);
    }
}

?>