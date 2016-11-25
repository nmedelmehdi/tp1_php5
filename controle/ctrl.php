<?php
  
  $action = "add";
  $action = $_GET['action'] ;
  

	echo "the action is $action";


	
	switch ($action)
	{
		case 'all':
			

            header('Location: http://localhost/tp1_php5/view/v_list.php');
		break;
	
		case 'vadd':
			include('view/v_insert.php');
		break;

		case 'add':
			$client = $_POST;
			
		  echo $_POST['nom']." la valeur du client est <br/> ";
		  echo " prenom est : ". $client['prenom'] ;
			    $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "crm";

                 try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // prepare sql and bind parameters
                    $stmt = $conn->prepare("INSERT INTO client (nom, prenom, mail)
                    VALUES (:nom, :prenom, :mail)");
                    $stmt->bindParam(':nom', $nom);
                    $stmt->bindParam(':prenom', $prenom);
                    $stmt->bindParam(':mail', $mail);

                    // insert a row
                    $nom = $client['nom'];
                    $prenom = $client['prenom'];
                    $mail = $client['mail'];
                    $stmt->execute();
                    
                  echo "New records created successfully";
                  }
              catch(PDOException $e)
                  {
                  echo "Error: " . $e->getMessage();
                  }
              $conn = null;
      
			header('Location: http://localhost/tp1_php5/');
		break; 
	
		default:
			# code...
		break;
	}

?>

