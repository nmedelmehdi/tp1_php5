<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF_16"/>

	    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	    <script>
	    $( function() {
		  $( "#datepicker" ).datepicker();
	    } );
	   </script>
	</head>
	<body>
	

		<div class="modal-dialog">
		
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">L'Ajout d'un nouveau Client</h4>
				</div>
				<div class="modal-body">
				  <script>
				      function changeActionURL() {
                    var forma = document.getElementById('myForm');
                    forma.action += "?action=add" ;
                }
				  </script>
					<form name="myForm" id="myForm" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF'])."/../controle/ctrl.php?action=add" ?>" onsubmit="changeUrlAction()">
				

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
									<td><input type="submit" class="btn-primary" value="Valider"/></td>
									
								</tr>
  
							</tbody>
						
						</table>
				
					</form>

				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
				</div>
			  </div>
			  
			</div>
    
	</body>
</html>

