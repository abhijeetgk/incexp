<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masters extends MY_Controller {


	public function company(){

		$this->config->load("incexp");
		$data['menu']=$this->config->item("menu");
		$data['project_name']=$this->config->item('project_name');
		$this->load->model('company_model','cm');

		if($this->input->post()){
			if ($this->form_validation->run('company_master') == TRUE){
					// process input
					$this->cm->insert_company($this->input->post('cname',true));
					$this->session->set_flashdata('company_success', '<div role="alert" class="alert alert-success">
        <strong>Well done!</strong> You successfully added a new company!!.
      </div>');
			redirect('/masters/company');
			}
		}
		$company_data=$this->cm->get_companies();
		$data['company_data']=$company_data;
		$this->data=$data;
		$this->layout_folder="layout";
		$this->middle = 'masters/company'; // passing middle to function. change this for different views.
    	$this->layout(array("header"=>1,"middle"=>1,"footer"=>1));
	}

	public function category(){
		$this->config->load("incexp");
		$data['menu']=$this->config->item("menu");
		$data['project_name']=$this->config->item('project_name');
		$this->load->model('category_model','ctm');
		if($this->input->post()){
			if ($this->form_validation->run('category_master') == TRUE){
					// process input
					$this->ctm->insert_category($this->input->post('catname',true));
					$this->session->set_flashdata('category_success', '<div role="alert" class="alert alert-success">
        <strong>Well done!</strong> You successfully added a new Category!!.
      </div>');
			redirect('/masters/category');
			}
		}
		$category_data=$this->ctm->get_categories();
		$data['category_data']=$category_data;
		$this->data=$data;
		$this->layout_folder="layout";
		$this->middle = 'masters/category'; // passing middle to function. change this for different views.
    	$this->layout(array("header"=>1,"middle"=>1,"footer"=>1));
	}
}