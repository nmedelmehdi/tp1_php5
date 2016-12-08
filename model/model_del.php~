<?php
	require_once('modelle.php');
	
	$sql = $conn -> prepare("delete from client where num = :num");
	$sql->bindParam(':num', $num);
                   
	// insert a row
    $num = $_GET['num'];
    $sql->execute();

?>
