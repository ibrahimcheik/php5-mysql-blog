<?php
	
	$server = "localhost";
	$username = "admin";
	$password = "admin";
	$db = "php5_pdo" ;

	try {

		$pdo = new PDO("mysql:host=$server;dbname=$db",$username,$password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Welcome my noob hacker ! :)";
		
	} catch (PDOexception $e) {
		echo 'Connection failed bro' . $e->getMessage();
	}



	if(isset($_POST['login']))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
		if(!empty($_POST["username"]) && !empty($_POST["password"]))
		{
			$query = "SELECT * FROM user WHERE username = :username AND password = :password";  
                $statement = $pdo->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                	session_start();
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:../home.html");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
		}
	}


 ?>