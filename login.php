<?php
	
	require 'includes/mysqlconnect.php' ;
	require 'traitemant/traitemant_user.php' ;



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
			$stmt = $pdo->prepare("SELECT * FROM user WHERE username = ?");
			$stmt->execute([$_POST['username']]);
			$user = $stmt->fetch();

			if ($user && password_verify($_POST['password']))
			{
    			echo "valid!";
			} else {
    			echo "invalid";
			}
		}
	}


 ?>