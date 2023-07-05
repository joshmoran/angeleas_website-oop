<?php

namespace AW;

class customer extends database {
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
		$where = " WHERE customer_id = '" . $customer_id . "'";
		$sql = array(
			'account' => $this->sqlAccount . $where,
			'customer' => $this->sqlCustomer. $where
		);

		$sql = $this->sqlAccount .= " WHERE customer_id = '" . $customer_id . "'";
		
		for ($a = 0; )
			$query = parent::db_get_row($sql[$a]);
			
			if ( $query != null ) {
				try {
					if ($sql[$a] == 'account') {

					} else if ( $sql[$a] == 'customer'){

					} else {
						die($this-)
					}


				$this->
			}
	}
	
	
}