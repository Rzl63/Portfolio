<?php
	require_once 'db.php';
	$errors = array();
	//$email = $username = null;
	if (isset($_POST) && !empty($_POST) && isset($_POST['subscribe'])){
		// Validation des champs du formulaire
			
			if(!(isset($_POST['name']) && !empty($_POST['name']))) {
				$errors[] = 'Votre Nom est utile...';
			} else {
				$name = $_POST['name'];
				if(strpos($name, '@') !== false){
					$errors[] = '"@" non autorisé sur le champ nom';
				} elseif(strlen($name) < 3 || strlen($name) > 30) {
					$errors[] = 'Votre nom ou votre Raison Social doit être compris entre 3 et 30';
				}
			}

			if(!(isset($_POST['mail']) && !empty($_POST['mail']))) {
				$errors[] = 'Votre Email est requise';
			} elseif(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
				$errors[] = 'Email invalide';
			} else {
				$mail = $_POST['mail'];
			}
		// Fin de validation des champs de formulaire
			echo '<script>alert("Une reponse vous sera apporté rapidement")</script>';
			header('Location:cv.php');
	}
?>