<?php
	require_once('modelle.php');
	
	/*$sql = $conn -> prepare("UPDATE `crm`.`client` SET `nom` = :nom and `prenom` = :prenom and `genre` = :genre and `date` = :date and `telephone` = :tele and `mail` = :mail  WHERE `client`.`num` = :num");
	$sql->bindParam(':num', $num);
	$sql->bindParam(':nom', $nom);
	$sql->bindParam(':prenom', $prenom);
	$sql->bindParam(':genre', $genre);
	$sql->bindParam(':date', $date);
	$sql->bindParam(':tele', $tele);
	$sql->bindParam(':mail', $mail);
                   
	// insert a row
    $num = $_GET['num'];
	$nom = $_GET['nom'];
	$prenom = $_GET['prenom'];
	$genre = $_GET['genre'];
	$date = $_GET['date'];
	$tele = $_GET['tele'];
	$mail = $_GET['mail'];

    $sql->execute();*/

$sql = $conn -> prepare("UPDATE `crm`.`client` SET `genre` = :genre, `nom` = :nom, `prenom` = :prenom, `date` = :date, `telephone` = :telephone, `mail` = :mail WHERE `client`.`num` = :num");
	
	echo "";

	$sql->bindParam(':nom', $nom);
	$sql->bindParam(':prenom', $prenom);
	$sql->bindParam(':genre',$genre);
	$sql->bindParam(':num',$num);
	$sql->bindParam(':date', $date);
	$sql->bindParam(':telephone', $telephone);
	$sql->bindParam(':mail', $mail);
	
	$prenom = $client['prenom'];
	$nom = $client['nom'];
	$date = $client['date'];
	$genre = $client['genre'];
	$mail = $client['mail'];
	$telephone = $client['telephone'];
	$num = $_GET['num'];

    $sql->execute();

?>
