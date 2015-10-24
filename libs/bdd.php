<?php
	function bddConnect(){
		$host = 'db576985956.db.1and1.com';
		$user= 'dbo576985956';
		$pw= 'raziel63';
		$dbname = 'db576985956';
		$link = mysqli_connect($host, $user, $pw, $dbname);
		if (mysqli_connect_error()) {
			die('Erreur de connexion (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());}
			echo 'Seko... ' . mysqli_get_host_info($link) . "\n";
		return $link;
		exit();
	}

	function addUsersInBdd(){
		bddConnect();
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$mail = $_POST['mail'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$query = "INSERT INTO `Formulaire`(`id`, `nom`, `prenom`, `mail`, `phone`, `message`, `date`) 
		VALUES (NULL, '$name','$surname','$mail','$phone','$message', CURRENT_TIMESTAMP);";
		echo "Query effectué : $query";
		$result = mysqli_query(bddConnect(), $query);	
		return $query;
		header('Location:cv.php');
	}

	function verifChamps(){
		
	}

?>