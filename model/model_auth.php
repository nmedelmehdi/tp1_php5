<?php 
		
		require_once('modelle.php');
		
		$queryAuth = $conn-> prepare('SELECT count( username ) as res
FROM `user`
WHERE `username` = :username
AND `password` = :password');

$queryAuth->bindParam(':username', $username);
$queryAuth->bindParam(':password', $password);


$username = $_POST['username'];

$password = $_POST['password'];
	

$queryAuth->execute();
		
?>
