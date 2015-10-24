                                                                                                <?php

// var_dump($_POST);
if (isset($_POST) && !empty($_POST) && isset($_POST['envoi'])) {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$mail = $_POST['mail'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$error = array();
	$mail = 'mail@mourad-mekrazi.fr';
	$sujet = 'Demande de Renseignement : ';

	// Verification du champs Name
	if (empty($name) || !preg_match('/^[a-zA-Z0-9 _-]{3,16}$/',$name)) {
		$error[] = "<p style='color:red; font-weight: bold'>Nom ou Raison Social invalide</p><br>";
		
	}

		// Verification du champs Prénom
		if (empty($surname) || !preg_match('/^[a-zA-Z0-9 _-]{3,16}$/',$surname)) {
			$error[] = "<p style='color:red; font-weight: bold'>Prénom invalide</p><br>";
			
		}

			// Verification de validation Mail	
			//if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
			  if (empty($mail) || !preg_match('/^[a-zA-Z0-9 .@_-]{3,30}$/',$mail)) {
				$error[] = "<p style='color:red; font-weight: bold'>Email invalide</p><br>";
				
			}

				//Verification du champ Téléphone	
				if (empty($phone) || !preg_match('/^[0-9-_ ]{4,14}$/',$phone)) {
					$error[] = "<p style='color:red; font-weight: bold'>Téléphone invalide</p><br>";
					
				}

					//Validation du champs Messgae
					if (empty($message) || !preg_match("/^[a-zA-Z0-9\' .@_-]{1,1000}$/", $message)) {
						$error[] = "<p style='color:red; font-weight: bold'>Le message est invalide</p><br>";
						
					}
					
						if (0 !== count($error)) {
							foreach ($error as $values) {
								echo $values;
							}
							
							
						}else{
							
							echo "<p style='color:green; font-weight: bold'>Message Envoyé</p>";
							mail($mail, $sujet, $message);
							}
						

}//echo "<p style='color:red; font-weight: bold'>Le formulaire n'est pas valide, veuillez remplir les champs manquants ou incorrects</p></br>";




?>