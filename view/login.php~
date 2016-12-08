<?php session_start();?>
<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta charset="UTF_16"/>
	</head>
	<body>
		<div class="container" align="center">
			<div class="panel panel-default" style="width:50%">
				<div class="panel-heading">Login Page</div>
				<form name=any method=post action=ctrl.php?action=verif>
				
						<div class="form-group">
							<label name="usernamer">Nom : </label>
							<input class="form-control"  type="text" name="username" placeholder="Entrer Votre Nom " required  style="width: 50%"/><br/>
						
						<div class="form-group">
							<label name="password">Mot de Pass : </label>
							<input class="form-control"  type="password" name="username" placeholder="Entrer Votre Mot de Pass" required style="width: 50%"/><br/>			
						</div>
						<div class="form-group">
							<input class="btn btn-primary"  type="submit" name="login" Value="Login">
						</div>
				</form>

				<?php 
					if(isset($_POST['login']))
						{
							$_SESSION['username'] = $_POST['username'];
						}
				?>
			</div>
		</div>
	</body>
</html>
