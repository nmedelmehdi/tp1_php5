<?php
	include('modelle.php');

	$query = $conn -> prepare("select * from client where num = :num");
	
	$query->bindParam(':num', $num);
	
	$num = $_GET['num'];
	
	$query-> execute();

	$queryresult = $query -> fetchAll();

?>
