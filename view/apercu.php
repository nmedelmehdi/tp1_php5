<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF_16"/>

	    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  
	</head>
	<body>
	

		<div class="modal-dialog">
		
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Information Sur le Client</h4>
				</div>
				<div class="modal-body">
					
					
					<table class="table table-condensed table-striped table-hover">
 
						<?php	foreach($queryresult as $row )

									{

									
									echo "<tr><th>ID du Client : </th><td>".$row['num']."</td></tr>";
									echo "<tr><th>Nom du Client : </th><td>".$row['nom']."</td></tr>";
									echo "<tr><th>Le Prenom</th><td>".$row['prenom']."</td></tr>";
									echo "<tr><th>Date </th><td>".$row['date']."</td></tr>";
									echo "<tr><th>Genre </th><td>".$row['genre']."</td></tr>";
									echo "<tr><th>Mail</th><td>".$row['mail']."</td></tr>";
									echo "<tr><th>Telephone</th><td>".$row['telephone']."</td></tr>";
								
									}
									?>
									
											
									

						
					</table>
				</div>
				<div class="modal-footer">
				<button type="button"><img src="../layout/images/pdf-icon.png" width="20px" height="20px"/></button>
			<form name="any" method=post action ="http://localhost/tp1_php5/controle/ctrl.php?action=all"> 
		<button type="submit" class="btn btn-default btn-danger">Close</button>
			</form>
				</div>
			  </div>
			  
			</div>
    
	</body>
</html>

