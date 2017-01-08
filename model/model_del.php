<?php
	require_once('modelle.php');
	
	$sql = $conn -> prepare("DELETE FROM `crm`.`client` WHERE `client`.`num` =  :num");
	$sql->bindParam(':num', $num);
                   
	// insert a row
    $num = $_GET['num'];
    $sql->execute();

?>
