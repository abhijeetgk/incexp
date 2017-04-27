<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		
		
	}

	public function add(){
		$this->load->library('Common');
		$this->common->chcek_login();
		$this->config->load("incexp");
		$session_data = $this->session->userdata('logged_in');
     	$data['username'] = $session_data['username'];
		$data['menu']=$this->config->item("menu");
		$data['project_name']=$this->config->item('project_name');
		$this->data=$data;
		$this->layout_folder="layout";
		$this->middle = 'users/add'; // passing middle to function. change this for different views.
    	$this->layout(array("header"=>1,"middle"=>1,"footer"=>1));
	}
}