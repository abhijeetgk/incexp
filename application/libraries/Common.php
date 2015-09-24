<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Common{
	public function __construct(){
		$this->CI =& get_instance();
	}
	public function chcek_login(){
		if(!$this->CI->session->userdata('logged_in')){
			redirect('/login','refresh');
		}
	}
}