<?php 

	require "config.php";

	try
	{
		$connection = new PDO("mysql:host=$host;port=8889;",$username, $password, $options);
		$sql = file_get_contents("data/init.sql");
		$connection->exec($sql);

		echo "Database and table users created successfully.";
	}

	catch(PDOException $error)
	{
		echo $sql . "<br>" . $error->getMessage();
	}

	