<?php

function getConnection()
{
	static $connection = null;

	if ($connection == null) {

		$env = parse_ini_file(ROOT . '/.env');

		$servername = $env["DB_HOST"];
		$username = $env["DB_USER"];
		$password = $env["DB_PASSWORD"];
		$database = $env["DB_DATABASE"];
		$port = $env["DB_PORT"];

		$connection = new mysqli($servername, $username, $password, $database, $port);

		if ($connection->connect_error) {
			die("Connection failed: " . $connection->connect_error);
		}
	}
	return $connection;
}