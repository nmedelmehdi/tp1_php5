<?php
		$STH = $conn -> prepare( "select * from client" );
		$STH -> execute();

		$result = $STH -> fetchAll();
	

?>
