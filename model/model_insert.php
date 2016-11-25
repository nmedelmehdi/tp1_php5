<?php

	require_once('http://localhost/tp1_php5/model/modelle.php');
	
	 try {
                    
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
 ?>
