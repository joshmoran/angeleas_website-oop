<?php

namespace AW;

use mysqli;

class database
{
	private $db_connect;

	function __construct($root = false)
	{
		if ($root) {
			$root = '/';
		} else {
			$root = '../';
		}

		include(__DIR__ . '/../config/database.php');
		print_R(
			include(__DIR__ . '/../config/database.php')
		);
		echo 'yes';

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

	// function db_get_row ( $sql ) {
	// 	$result = '';

	// 	if ( $sql != '' ) {
	// 		try {
	// 			$result = $this->db_connection->query( $sql ));
	// 		} catch {
	// 			die( $this->db_connection->error );
	// 		}
	// 	}

	// 	return $result;

	// }

	// function db_execute ( $sql ) {

	// }

	// function db_insert ( ) {

	// }

	// function db_num_rows () {

	// }
}
