<?php
	
	$server = "localhost";
	$username = "admin";
	$password = "admin";
	$db = "php5_pdo" ;

	try {

		$pdo = new PDO("mysql:host=$server;dbname=$db",$username,$password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Welcome my noob hacker ! :)";
		
	} catch (PDOException $e) {
		echo 'Connection failed bro' . $e->getMessage();
	}

 ?>