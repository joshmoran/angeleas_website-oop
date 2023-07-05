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

	function db_get_assoc($sql)
	{
		$result = '';

		if ($sql != '') {
			$query = $this->db_connect->query($sql) or die($this->db_connect->error);
			$result = $query->fetch_assoc();
		}

		return $result;
	}

	function db_get_row($sql)
	{
		$result = '';

		if ($sql != '') {
			$query = $this->db_connect->query($sql) or die($this->db_connect->error);
			$result = $query->fetch_row();
		}

		return $result;
	}

	function db_update($sql)
	{
	}

	function db_insert($table, $fields, $where)
	{
	}

	function db_num_rows($sql)
	{
		$result = 0;
		if ($sql != '' || $sql != null) {
			$query = $this->db_connect->query($sql) or die($this->db_connect->error);
			$result = $query->num_rows;
		}

		return $result;
	}
}
