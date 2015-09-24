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
	function get_companies($limit=0){
		$this->db->order_by('date_modified','desc');
		if($limit>0)
			$query=$this->db->get("company_master",$limit);
		else 
			$query=$this->db->get("company_master");
		return $query->result();
	}
	function get_company_report(){
		$this->db->flush_cache();
		$this->db->start_cache();
		$res['count']=$this->db->count_all('company_master');
		$this->db->select('*')->from('company_master')->where('date_added >','SUBDATE(NOW(),1)',FALSE);
		$data1=$this->db->count_all_results();
		$res['data']=$data1;
		$this->db->stop_cache();
		return $res;
	}
}
