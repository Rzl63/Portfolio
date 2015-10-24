<style type="text/css">
#contact{background: url(img/concept5.jpg) no-repeat fixed center;  -webkit-background-size: cover; background-size: cover; margin-bottom: 40px; font-family: 'Raleway'; color: #fff; height: 650px}
#contact form{display: none}
#contact #civil{display: none}
#contact h1{font-family: 'Poiret One'; color: #fff; margin-bottom: 30px}
#contact h4{font-family: 'Poiret One'; font-weight: bold}
#contact #bn{border: solid 1px #000}
#contact textarea{border: solid 1px #000;background:#fff; padding: 20px; color red;}
#contact p{font-family: 'Raleway', sans-serif; color: #000}
.btnEnvoi { display: block; width: 100%; margin-top: 10px;border: solid 2px #2d2b2d; background-color: #2d2b2d; color: #fff; padding: 10px; text-decoration: none; font-weight: bold; font-family: 'Poiret One' }
/*.btnEnvoi:hover {background:#000; text-decoration: none; color:#fff;}*/
#contact #info{display: none; margin-top: 20px;}
#contact iframe{display: none; margin-top: 10px;}
</style>

<section id="contact">
	<img src="img/sep.png" width="100%" height="20px">
	<div class="row">
				<div class="container">
					<h1 class="text-center">CONTACT</h1>
					<div class="col-md-6 col-lg-4 text-center">		
						<form action="#contact" method="POST" style="color:#fff">
							<h4>Contactez moi</h4>	
							<div class="form-group">
								<input type="text" id="bn" class="form-control" onfocus="focusFunction()" name="name" placeholder="Nom ou Raison sociale*"></br>
								<input type="text" id="bn" class="form-control" name="surname" placeholder="Prénom*"></br>				
								<input type="text" id="bn" class="form-control" name="mail" placeholder="Mail de contact*"></br>
								<input type="tel" id="bn" class="form-control" name="phone" placeholder="Téléphone*"></br>
								<textarea class="form-control" rows="6" name="message" placeholder="Votre message*"></textarea>
				  				<input id="bn-sub" type="submit" class="btnEnvoi form-control text-center" name="envoi" value="ENVOYER">
			  				</div>	
						</form>
					</div> 
						       
					<div id ="civil" class="col-lg-3 text-center">
						<h4 class="text-center">Mourad Mekrazi</h4>
						<p>12 rue Georges Teissier</br>
							42000 SAINT-ETIENNE</p>
						<p>06-95-61-20-59</p>
						<div class="addthis_sharing_toolbox"></div>
						<p>* Champs Obligatoires</p>
						<?php  require_once('validator.php')  ?>
					</div> 
					<div id="info" class="col-lg-5">
						<a href="https://github.com/Rzl63" target="_blank"><img src="img/info1.png" width="100%"></a>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.6004735416377!2d4.383644914980815!3d45.43755454324308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5aea8c2c2cc0d%3A0x8ff3d4231e8c386!2s12+Rue+Georges+Teissier%2C+42000+Saint-%C3%89tienne!5e0!3m2!1sfr!2sfr!4v1445167362669" width="100%" height="140" frameborder="0" style="border:solid 2px #fff" allowfullscreen></iframe>
					</div> 
				</div>					    
	</div>
</section>
<?php 

// require_once('formulaire.php');
//require_once('libs/bdd.php');
//require_once('libs/subscribs.php');				
	//addUsersInBdd(); // inscription des informations dans la Bdd 
	//echo '<script>alert("Votre message à bien été envoyé");</script>';

?>							