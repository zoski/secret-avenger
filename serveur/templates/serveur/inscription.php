<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/ban.php" ?>

<div class="row">
	<div class="col-md-5">
		<form class="form-horizontal" role="form" action="serveur\templates\serveur\inscription">
			<h2 class="form-signin-heading">Inscription</h2>
			<p class="lead">Veuillez remplir les champs suivants :</p>

		<!--  Formulaire d'inscription-->
			 <div class="form-group">
				<label for="pseudo" class="col-sm-4">Pseudonyme :</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Ex : Paul984" size="30" required/>
					</div>
			</div>
			
			<div class="form-group">
				<label for="pass" class="col-sm-4">Mot de passe :</label>
					<div class="col-sm-8">
						<input type="password" class="form-control"  name="pass" id="pass" required/>
					</div>
			</div>
			
			<div class="form-group">
				<label for="pass_conf" class="col-sm-4">Confirmation mot de passe :</label>
					<div class="col-sm-8">
						<input type="password" class="form-control"  name="pass_conf" id="pass_conf" required/>
					</div>
			</div>
			
			<div class="form-group">
				<label for="mail" class="col-sm-4">Adresse electronique :</label>
					<div class="col-sm-8">
						<input type="email" class="form-control" name="mail" id="mail" placeholder="Ex : Paul984@free.fr" size="30" required/>
					</div>
			</div>
			
			<div id="object" class="fadeIn">
				<button type="submit" class="btn btn-primary btn-lg btn-block">Envoyer ;-)</button>
			</div>		
		</form>
	</div>
		<!-- LOGIN -->
	<div class="col-md-5  col-md-offset-2">
		<form class="form-signin" role="form" action="serveur\templates\serveur\login">
        <h2 class="form-signin-heading">Connectez-vous</h2>
		<p class="lead">Avec un compte existant</p>
        <input type="text" class="form-control" placeholder="Adresse mail" required>
        <input type="password" class="form-control" placeholder="Mot de passe" required>
		<p></p>
		<div id="object" class="fadeIn">		
       		<button class="btn btn-lg btn-primary btn-block" type="submit">Envoyer ;-)</button>
		</div>
      </form>
	</div>
<?php include "includes/footer.php" ?>

