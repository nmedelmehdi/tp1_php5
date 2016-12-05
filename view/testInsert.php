<? session_start()?>

<form name="myForm" method="POST" action="../controle/ctrl.php?action=add">
				

						<table class="table-condensed table-striped">
							<thead>
								<tr>
									<th><!--Label--></th>
									<th><!--Input--></th>						
								</tr>
							</thead>
							<tbody>
								<tr>
									<td width="50%">Nom</td>
									<td width="50%"><input type="hidden" name="num"/><input type="text" name="nom" placeholder="Entrer le Nom du Client" title="Add Custmer LastName"/></td>
								</tr>
								<tr>
									<td>Prenom</td>
									<td><input type="text" name="prenom" placeholder="Entrer le Prenom du Client" title="Add Custmer FirstName"/></td>
								</tr>
								<tr>
									<td>Genre</td>
									<td>Femme : <input type="radio" name="genre" value="Femme"/> Homme :<input type="radio" name="genre" value="Homme"/></td>
								</tr>
								<tr>
									<td>Date</td>
									<td><input type="text" name="date" id="datepicker"/></td>
								</tr>
								
								<tr>
									<td>Telephone</td>
									<td><input type="text" name="tele" placeholder="Ex : +212606204057" value=""/></td>
								</tr>

								<tr>
									<td>Mail</td>
									<td><input type="mail" name="mail" placeholder="Ex : example@gmail.com" value=""/></td>
								</tr>
								<tr>
									<td><input class="btn-warning" type="reset"</td>
									<td><input name="ok" type="submit" class="btn-primary" value="Valider"/></td>
								</tr>

							</tbody>
						
						</table>
				
					</form>
					
					
					 <?php
/*
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "crm";

               
                if(isset($_GET['ok']))
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
                    $nom = "John";
                    $prenom = "Doe";
                    $mail = "john@example.com";
                    $stmt->execute();
                    
                  echo "New records created successfully";
                  }
              catch(PDOException $e)
                  {
                  echo "Error: " . $e->getMessage();
                  }
              $conn = null;*/
            ?>
					
					
					
