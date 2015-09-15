<?php 
class Company_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function insert_company($name){
		$data['name']=$name;
		$data['status']="y";
		$data['date_added']=date("Y-m-d h:i:s");
		$data['date_modified']=date("Y-m-d h:i:s");
		$this->db->insert("company_master",$data);
	}
	function get_companies(){
		$this->db->order_by('date_modified','desc');
		$query=$this->db->get("company_master",10);
		return $query->result();
	}
}
