<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		$this->config->load("incexp");
		$data['menu']=$this->config->item("menu");
		$data['project_name']=$this->config->item('project_name');
		$data['title']='Page Title';
		$this->data=$data;
		$data['left']='';
		$this->layout_folder="layout";
		$this->middle = $this->layout_folder.'/home'; // passing middle to function. change this for different views.
    	$this->layout();
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */