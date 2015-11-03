<?php

namespace \assets;

class ValideForm{
	
	public $name = $_POST['name'];
	public $surname = $_POST['surname'];
	public $destinataire = $_POST['mail'];
	public $phone = $_POST['phone'];
	public $message = $_POST['message'];
	public $error = array();

	

	public function isValid($name, $surname, $destinataire, $phone, $message){
		if (isset($_POST) && !empty($_POST) && isset($_POST['envoi'])) {
			if (empty($name) || !preg_match('/^[a-zA-Z0-9 _-]{3,16}$/',$name)) {
				$error[] = "<p style='color:red; font-weight: bold'>Nom ou Raison Social invalide</p><br>";
				
			}

			// Verification du champs Prénom
			if (empty($surname) || !preg_match('/^[a-zA-Z0-9 _-]{3,16}$/',$surname)) {
				$error[] = "<p style='color:red; font-weight: bold'>Prénom invalide</p><br>";
					
			}

			// Verification de validation Mail	
			//if (empty($expediteur) || !filter_var($expediteur, FILTER_VALIDATE_EMAIL) === false) {
			if (empty($expediteur) || !preg_match('/^[a-zA-Z0-9 .@_-]{3,30}$/',$expediteur)) {
				$error[] = "<p style='color:red; font-weight: bold'>Email invalide</p><br>";
						
			}

			//Verification du champ Téléphone	
			if (empty($phone) || !preg_match('/^[0-9-_ ]{4,14}$/',$phone)) {
				$error[] = "<p style='color:red; font-weight: bold'>Téléphone invalide</p><br>";
							
			}

			//Validation du champs Messgae
			if (empty($message) || !preg_match("/^[a-zA-Z0-9\' .@_,èé()?;à&:!ùôàç-]{1,10000}$/", $message)) {
				$error[] = "<p style='color:red; font-weight: bold'>Le message est invalide</p><br>";
								
			}
							
			if (0 !== count($error)) {
				foreach ($error as $values) {
					echo $values;
				}
			}else{
				echo "<p style='color:green; font-weight: bold'>Message Envoyé</p>";
				mail($destinataire, $sujet, $message, $headers);
				
			}


		}
	 }



}