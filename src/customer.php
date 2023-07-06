<?php

namespace AW;

class customer extends database
{
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

	function __CONSTRUCT($customer_id, $admin = false)
	{
		parent::__CONSTRUCT($admin);
		$sql = $this->sqlCustomer . ' WHERE customer_id ' . $customer_id;

		$query = parent::db_get_row($sql);

		if ($query != null) {

			$this->customer_id = $query['customer_id'];
			$this->firstName = $query['first_name'];
			$this->lastName = $query['last_name'];
			$this->email = $query['email'];
			$this->mobileNo = $query['mobile'];
			$this->homeNo = $query['home'];
		}
	}

	// GETTERS
	
}
