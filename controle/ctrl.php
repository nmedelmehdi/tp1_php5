<?php session_start(); ?>
<?php
  if(isset($_SESSION['username']))
	{
		$action = "all";
	}
	else 
	{
		$action = "login";
	}
	
	switch ($action)
	{
		case 'all':
        require('../model/model_verif.php'); 
		if($nombre == 1) 
				{
					require('../model/model_all.php');

					include ('../view/v_list.php');
				}
			else 
				{
					session_destroy();
					header('Location: http://localhost/tp1_php5/controle/ctrl.php?action=login');
				} 

		break;

		case 'modif':
        	$client = $_POST;
		require('../model/model_modif.php');
			
		 	header('Location: http://localhost/tp1_php5/controle/ctrl.php?action=all');
		break;

		case 'del':
          
			require('../model/model_del.php');
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
			header('Location: http://localhost/tp1_php5/');
			
		break;
		

		default:
			# code...
		break;
	}

?>

