<?php 
class Transaction_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function add_transaction($data1){
		$post=$data1['post'];
		$userid=$data1['userid'];
		$data['type']=$post['transaction_type'];
		$data['amount']=$post['amount'];
		$data['description']=$post['description'];
		$data['category_id']=$post['category'];
		$data['company_id']=$post['company'];
		$data['added_by']=$userid;
		$data['date_added']=date("Y-m-d h:i:s");
		$data['date_modified']=date("Y-m-d h:i:s");
		$this->db->insert('transactions',$data);
	}
	function get_transaction_report(){
		$this->db->flush_cache();
		$this->db->start_cache();
		$res['count']=$this->db->count_all('transactions');
		$this->db->select('*')->from('transactions')->where('date_added >','SUBDATE(NOW(),1)',FALSE);
		$data1=$this->db->count_all_results();
		$res['data']=$data1;
		$this->db->stop_cache();
		return $res;
	}
	function get_transactions ($limit=0) {
		
		$this->db->order_by('date_modified','desc');
		if($limit>0)
			$query=$this->db->get("transactions",$limit);
		else 
			$query=$this->db->get("transactions");
		return $query->result();
	
	}
}
