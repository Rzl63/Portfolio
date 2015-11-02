<style type="text/css">
#contact{background: url(img/concept5.jpg)fixed center no-repeat;padding-bottom: 40px; font-family: 'Raleway'; color: #000}
#contact form{display: noe}
#contact #civil{display: noe}
#contact h1{font-family: 'Indie Flower'; color: #fff; margin-bottom: 30px}
#contact h4{font-family: 'Raleway'; background-color:#2d2b2d; padding: 10px; border: solid 1px #fff; color: #fff}
#contact #bn{border: solid 1px #000}
#contact textarea{border: solid 1px #000;background:#fff; padding: 20px; color red;}
#contact p{font-family: 'Raleway',serif; color: #fff}
.btnEnvoi { display: block; width: 100%; margin-top: 10px;border: solid 1px #fff; background-color: #2d2b2d; color: #fff; padding: 10px; text-decoration: none; font-weight: bold; font-family: 'Raleway' }
#contact #info{display: noe; margin-top: 20px;}
</style>

<section id="contact">
	<img src="img/sep.png" width="100%" height="20px">
	<div class="row">
				<div class="container">
					<h1 class="text-center">CONTACT ...</h1>
					<div class="col-md-6 col-lg-4 text-center">		
						<form action="#contact" method="POST" style="color:#fff">
							<h4>Contactez moi !</h4>	
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
						</br>
						<div class="addthis_sharing_toolbox"></div>
						<p>* Champs Obligatoires</p>
						<?php  require_once('validator.php'); 
						Validator(); ?>
						
					</div> 
					<div id="info" class="col-lg-5">
						<a href="https://github.com/Rzl63" target="_blank"><img src="img/info1.png" width="100%"></a>
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