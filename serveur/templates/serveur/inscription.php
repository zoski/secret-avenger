<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

<form role="form">
	 <div class="form-group">
		<h1>Inscription</h1>
		<form method="post" action="serveur\templates\serveur\confirmation.php">
		<h2 class="inscritpion">Veuillez remplir les champs suivants:</h2>

	<!--  Formulaire d'inscription-->
		<ul>
			<label>Pseudonyme:
				<input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Ex : Paul984" size="30" required/>
			</label>
			<label>Mot de passe (qui doit comporter minimum 6 caracteres) :</li><input type="password" name="pass" id="pass"required/></label>
		<label><li>Confirmation de votre mot de passe:</li><input type="password" name="pass" id="pass"required/></label>
		<label><li>Adresse electronique:</li><input type="email" name="pseudo" id="pseudo" placeholder="Ex : Paul984@free.fr" size="30" required/></label></ul>
		<div style="text-align:center"><input type="submit" value="Envoyer"/></div>
	</form>
<?php include "includes/footer.php" ?>

