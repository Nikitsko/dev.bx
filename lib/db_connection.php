<?php

function dbConnect(string $host, string $username, string $password, string $dbName) : mysqli
{
	$database = mysqli_init();
	$connection = mysqli_real_connect($database, $host, $username, $password, $dbName);
	if(!$connection)
	{
		$error = mysqli_connect_errno() . ": ". mysqli_connect_error();
		trigger_error($error, E_USER_ERROR);
	}

	$result = mysqli_set_charset($database, 'utf8');
	if(!$result)
	{
		trigger_error(mysqli_error($database), E_USER_ERROR);
	}

	return $database;
}
