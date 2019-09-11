<?php
	
	$server = "localhost";
	$username = "admin";
	$password = "admin";
	$db = "php5_pdo" ;

	try {

		$pdo = new PDO("mysql:host=$server;dbname=$db,$username,$password");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Welcome my noob hacker ! :)";
		
	} catch (PDOexception $e) {
		echo 'Connection failed bro' . $e->getMessage();
	}



	$username = $_GET['username'] ;
	$password = $_GET['password'] ;

	if(isset($username) && isset($password))
	{
		if(empty($username) || empty($password))
		{
			echo '<p class="text-danger">une erreur s\'est produite pendant votre identification.Vous devez remplir tous les champs</p>';
		}
		if(!empty($username) && !empty($password))
		{
			
			$stmt = $pdo->prepare("SELECT * FROM user WHERE username = $username");
			$stmt->execute($username);
			$user = $stmt->fetch();

			if ($user && password_verify($password))
			{
    			header('Location:home.html') ;
    			exit ;
			} else {

				header('Location:login.html') ;
    			exit ;
			}
		}
	}


 ?>