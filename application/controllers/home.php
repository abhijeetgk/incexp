<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
	public function index(){
		$this->load->library('calendar');
		$data['cal']=$this->calendar->generate();
		$this->load->view('home',$data);
		}		
}