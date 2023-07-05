<?php

namespace AW;

use mysqli;

class database
{
	private $db_connect = '';

	function __construct($root = false)
	{
		$root = '';
		if ($root) {
			$root = '/';
		} else {
			$root = '../';
		}

		require __DIR__ . '/../config/database.php';

		$this->db_connect = new mysqli($hostname, $username, $password, $database, $port);
	}

	// function db_get_array ( $sql ) {
	// 	$result = '';

	// 	if ( $sql != '' ) {
	// 		try {

	// 		} catch {
	// 			die( $this8
	// 		}

	// 	}

	// }

	function db_get_row($sql)
	{
		$result = '';

		if ($sql != '') {
			try {
				$result = $this->db_connect->query($sql);
			} catch ( $e) {
				die($this->db_connect->error);
			}
		}

		return $result;
	}

	function db_update ( $sql ) {

	}

	function db_insert ( ) {

	}

	function db_num_rows ($sql) {

		if ($sql != '' || $sql!= null) {
			if ( $db->)

	}
}
