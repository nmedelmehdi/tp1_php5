<? session_start()?>
<?php
  
  $action = "add";
  $action = $_GET['action'] ;



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
          
			require('../model/model_del.php');
			header('Location: http://localhost/tp1_php5/controle/ctrl.php?action=all');
			
		break;
	
		case 'vadd':
			include('view/v_insert.php');
		break;

		case 'add':
			$client = $_POST;
			
		  echo $_POST['nom']." la valeur du client est <br/> ";
		  echo " prenom est : ". $client['prenom'] ;
			    require('../model/model_insert.php');
      			header('Location: http://localhost/tp1_php5/controle/ctrl.php?action=all');
			
		break; 
	
		default:
			# code...
		break;
	}

?>

