<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		
		
	}
	public function index()
	{
		$this->load->library('Common');
		$this->common->chcek_login();
		$this->config->load("incexp");
		$this->load->model('category_model','ctm');
		$this->load->model('company_model','cm');
		$this->load->model('transaction_model','tm');
		$session_data = $this->session->userdata('logged_in');
     	$data['username'] = $session_data['username'];
		$data['menu']=$this->config->item("menu");
		$data['project_name']=$this->config->item('project_name');
		$data['username']=$session_data['username'];
		$data['category_data']=$this->ctm->get_category_report();
		$data['company_data']=$this->cm->get_company_report();
		$data['transaction_data']=$this->tm->get_transaction_report();
		$data['left']='';
		$this->data=$data;
		$this->layout_folder="layout";
		$this->middle = $this->layout_folder.'/home'; // passing middle to function. change this for different views.
    	$this->layout(array("header"=>1,"middle"=>1,"footer"=>1));
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */