<?php session_start(); ?>
<?php

		if(isset($_SESSION['username']))
			{
				
				if(isset($_GET['action'])) $action = $_GET['action'];
			}
		else 
			{
				if(!isset($_POST['login']))
					{
						$action = "login";
					}
				else 
					{
						include('../model/model_auth.php');
						include('../model/model_verif.php');
						
							if ($nombre == 1)
								{
									$_SESSION['username'] = $_POST['username'];
									$action = "all";
								}
							else 
								{
									$action = "login";
								}
					}
			}
	switch ($action)
	{
		case 'all':
					require('../model/model_all.php');
					include ('../view/v_list.php');

		break;

		case 'modif':
        	$client = $_POST;
		require('../model/model_modif.php');
			
		 	header('Location: http://localhost/tp1_php5/controle/ctrl.php?action=all');
		break;

		case 'del':
          
			include_once('../model/model_del.php');
			header('Location: http://localhost/tp1_php5/controle/ctrl.php?action=all');
			
		break;
	


		case 'apercu':
			
			include_once('../model/model_apercu.php');
			include('../view/apercu.php');
		break;

		case 'add':
			$client = $_POST;
			
		  echo $_POST['nom']." la valeur du client est <br/> ";
		  echo " prenom est : ". $client['prenom'] ;
			    require('../model/model_insert.php');
      			header('Location: http://localhost/tp1_php5/controle/ctrl.php?action=all');
			
		break; 
	
		case 'login':
			
			include('../view/login.php');
			
		break;
		

		case 'deconnexion':
			require('../model/model_decx.php');
			header('Location: http://localhost/tp1_php5/controle/ctrl.php?action=login');
			
		break;
		

		default:
			# code...
		break;
	}

?>

