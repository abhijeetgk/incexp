<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_incexp extends CI_Migration{
	public function up(){
		// user master
		$this->dbforge->add_field("id INTEGER NOT NULL AUTO_INCREMENT ");
		$this->dbforge->add_field("name varchar(100) NOT NULL ");
		$this->dbforge->add_field("password varchar(32) NOT NULL");
		$this->dbforge->add_field('date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
		$this->dbforge->add_field('date_modified TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
		$this->dbforge->add_field('status enum("y","n") NOT NULL DEFAULT "y"');
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('user_master',TRUE);
		// company master
		$this->dbforge->add_field('id INT NOT NULL AUTO_INCREMENT');
		$this->dbforge->add_field('name VARCHAR (100) NOT NULL');
		$this->dbforge->add_field('date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
		$this->dbforge->add_field('date_modified TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
		$this->dbforge->add_field('status enum("y","n") NOT NULL DEFAULT "y"');

		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('company_master',TRUE);
		//category master
		$this->dbforge->add_field('id INT NOT NULL AUTO_INCREMENT');
		$this->dbforge->add_field('name VARCHAR (100) NOT NULL');
		$this->dbforge->add_field('date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
		$this->dbforge->add_field('date_modified TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
		$this->dbforge->add_field('status enum("y","n") NOT NULL DEFAULT "y"');

		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('category_master',TRUE);
		//transactions
		$this->dbforge->add_field("id INT NOT NULL AUTO_INCREMENT");
		$this->dbforge->add_field("type enum('inc','exp') NOT NULL DEFAULT 'inc' ");
		$this->dbforge->add_field("amount float");
		$this->dbforge->add_field("category_id INT ");
		$this->dbforge->add_field("company_id INT ");
		$this->dbforge->add_field("added_by INT ");
		$this->dbforge->add_field('date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
		$this->dbforge->add_field('date_modified TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table("transactions",true);


	}
	public function down(){
		$this->dbforge->drop_table('company_master');
		$this->dbforge->drop_table('category_master');
		$this->dbforge->drop_table('transactions');
		$this->dbforge->drop_table('user_master');

	}
}
