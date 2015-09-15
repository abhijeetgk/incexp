<?php 
class Category_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function insert_category($name){
		$data['name']=$name;
		$data['status']="y";
		$data['date_added']=date("Y-m-d h:i:s");
		$data['date_modified']=date("Y-m-d h:i:s");
		$this->db->insert("category_master",$data);
	}
	function get_categories(){
		$this->db->order_by('date_modified','desc');
		$query=$this->db->get("category_master",10);
		return $query->result();
	}
}
