<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends MY_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   $this->load->helper(array('form'));
   $this->config->load("incexp");
	$data['menu']=$this->config->item("menu");
	$data['project_name']=$this->config->item('project_name');
	$this->data=$data;
   $this->layout_folder="layout";
   $this->middle = 'login_view'; // passing middle to function. change this for different views.
   $this->layout(array("header"=>1,"middle"=>1,"footer"=>1));
 }
 
}
 
?>