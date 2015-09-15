<?php 
$config['menu']=array(
					"User Management"=>array("Add User"=>site_url("user/add"),"Edit User"=>site_url('user/edit'),"Manage Rights"=>site_url("user/managerights")),
					"Masters Management"=>array("Company Master"=>site_url('masters/company'),"Category Master"=>site_url('masters/category')),
					"Reports"=>array("Monthly Reports"=>site_url('reports'),"Custom Reports"=>site_url('reports/custom')),
					"Transactions"=>array("Add Transaction"=>site_url("transactions/add"))
	);

$config['project_name']="INCEXP";