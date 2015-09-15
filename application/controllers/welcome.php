<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

	
	public function index()
	{
		$this->config->load("incexp");
		$data['menu']=$this->config->item("menu");
		$data['title']='Page Title';
		$this->data=$data;
		$this->layout_folder="layout";
		$this->middle = $this->layout_folder.'/home'; // passing middle to function. change this for different views.
    	$this->layout();
	}
	public function test(){
		$data['title']='Page Title1';
		$this->data=$data;
		$this->layout_folder="layout";
		$this->middle = $this->layout_folder.'/home'; // passing middle to function. change this for different views.
    	$this->layout();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */