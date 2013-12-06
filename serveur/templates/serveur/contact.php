<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<form class="form-horizontal" role="form">
	<h1>Nous contacter</h1>
	<p class="lead">Pour nous contacter, veuillez remplir les champs suivants :</p>
	<form method="post" action="serveur\templates\serveur\contact">
	<div class="form-group">
			<label for="inputPseudo" class="col-sm-4">Pseudonyme:</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Ex : Paul984" size="30" required/>
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail" class="col-sm-4">Adresse electronique:</label>
				<div class="col-sm-8">
				<input type="email" class="form-control" name="mail" id="mail" placeholder="Ex : Paul984@free.fr" size="30" required/>
				</div>
		</div>
		
		<div class="form-group">
			<label for="inputMdp" class="col-sm-4">Confirmation de votre mot de passe:</label>
			<div class="col-sm-8">
				<input type="password" class="form-control"  name="pass_conf" id="pass_conf"required/>
			</div>
		</div>
   
		<div class="form-group">
			<label for="inputMsg" class="col-sm-4">Votre message :</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="message" id="message" size="30" required/>
				</div>
		</div>	
			
	<button type="submit" class="btn btn-default btn-lg btn-block">Envoyer ;-)</button>	
</form>
<?php include "includes/footer.php" ?>
	<!-- Espacer chaque ligne, centrer le titre et la touche "Envoyer" -->
