<?php include('model_auth.php');
	
	$switch01 = $queryAuth->fetchAll();
	$nombre;
	foreach($switch01 as $result)

			{
				if ($result['res'] == 1) 
					{
						 $nombre = 1;
					}
				else 
					{
						 $nombre = 0;
					}			
			}

?>

	
