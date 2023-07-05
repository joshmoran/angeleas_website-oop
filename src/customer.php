<?php

namespace AW;

class user extends database {
	private $basket_id;
	private $customer_id;
	
	private $loggedIn;
	
	private $sqlAccount = 'SELECT * FROM accounts ';
	private $sqlCustomer = 'SELECT * FROM customers '; 


	private $firstName = '';
	private $lastName = '';
	private $email = '';
	private $mobileNo = 0;
	private $homeNo = 0;
	
	function __CONSTRUCT ( $customer_id, $admin = false ) {
		$sql = $this->sqlAccount .= " WHERE customer_id = '" . $customer_id . "'";
		
		$query = parent::getOneRow();
		
		if (  ) {
			$_SESSION
		}
	}
	
	
}