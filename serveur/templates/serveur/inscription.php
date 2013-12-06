<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/ban.php" ?>
<form class="form-horizontal" role="form">
		<h1>Inscription</h1>
		<form method="post" action="serveur\templates\serveur\login">
		<p class="lead">Veuillez remplir les champs suivants :</p>

	<!--  Formulaire d'inscription-->
		 <div class="form-group">
			<label for="inputPseudo" class="col-sm-4">Pseudonyme:</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Ex : Paul984" size="30" required/>
			</div>
		</div>

		<div class="form-group">
			<label for="inputMdp" class="col-sm-4">Mot de passe (qui doit comporter minimum 6 caracteres) :</label>
			<div class="col-sm-8">
				<input type="password" class="form-control"  name="pass" id="pass"required/>
			</div>
		</div>
		
		<div class="form-group">
			<label for="inputMdp" class="col-sm-4">Confirmation de votre mot de passe:</label>
			<div class="col-sm-8">
				<input type="password" class="form-control"  name="pass_conf" id="pass_conf"required/>
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail" class="col-sm-4">Adresse electronique:</label>
				<div class="col-sm-8">
				<input type="email" class="form-control" name="mail" id="mail" placeholder="Ex : Paul984@free.fr" size="30" required/>
				</div>
		</div>
		<button type="submit" class="btn btn-default btn-lg btn-block">Envoyer ;-)</button>				
	</form>

<?php include "includes/footer.php" ?>

