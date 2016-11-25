<?php

    $servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "crm";
	
	try {
    	  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   		 // set the PDO error mode to exception
    		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		echo "Connected successfully";
   		}
		
	  catch(PDOException $e)
		  {
			  echo "Connection failed: " . $e->getMessage();
		  }

	
	

	$insert = $conn->prepare("INSERT INTO client (nom, prenom, mail) VALUES (:nom, :prenom, :mail)");
    
    

	echo "done from insert";

	$clients =  $conn -> prepare ("select * from client");
?>
