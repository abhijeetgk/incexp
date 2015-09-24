<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transactions extends MY_Controller {

	public function add(){
		$user_data=$this->session->userdata('logged_in');
		$userid=$user_data['id'];
		$this->load->library('Common');
		$this->common->chcek_login();
		$this->config->load("incexp");
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['menu']=$this->config->item("menu");
		$data['project_name']=$this->config->item('project_name');
		$data['type_array']=array(""=>"SELECT","inc"=>"Income","exp"=>"Expence");

		$this->load->model('category_model','ctm');
		$this->load->model('company_model','cm');
		$this->load->model('transaction_model','tm');
		$categories=$this->ctm->get_categories();
		$cat_array[""]="SELECT";
		foreach($categories as $category){
			$cat_array[$category->id]=$category->name;
		}
		$data['category_dropdown']=$cat_array;
		$companies=$this->cm->get_companies();
		$company_array[""]="SELECT";
		foreach($companies as $company){
			$company_array[$company->id]=$company->name;
		}
		$data['company_dropdown']=$company_array;

		if($this->input->post()){
			if ($this->form_validation->run('transactions') == TRUE){
					$this->tm->add_transaction(array("userid"=>$userid,"post"=>$this->input->post()));
					$this->session->set_flashdata('transaction_success', '<div role="alert" class="alert alert-success">
        <strong>Well done!</strong> You successfully added a new transaction!!.
      </div>');
					
			redirect('/transactions/add');
			}
		}
		$data['transactions']=$this->tm->get_transactions(10);
		$this->data=$data;	
		$this->layout_folder="layout";
		$this->middle = 'transactions/home'; // passing middle to function. change this for different views.
    	$this->layout(array("header"=>1,"middle"=>1,"footer"=>1));
	}
}