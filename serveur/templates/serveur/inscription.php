<<<<<<< HEAD
<<<<<<< HEAD


<form role="form">
	 <div class="form-group">
<h1>Inscription</h1>
<form method="post" action="serveur\templates\serveur\confirmation.php">
	<h2 class="inscritpion">Veuillez remplir les champs suivants:</h2>
	<ul><!--  Formulaire d'inscription-->
		<label>Pseudonyme:
			<input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Ex : Paul984" size="30" required/>
		</label>
=======
>>>>>>> 9d8b873ff0687b3fb5bbcdb32d37a0b34b6dbeab


=======
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
>>>>>>> 1f5e7992931dea7478f47cf942a52d64437a36ea
	<h1><center>Inscription</center></h1>
	<form method=post action="serveur\templates\serveur\confirmation.php">
		<h2><u>Veuillez remplir les champs suivants:</u></h2>
		<ul><label><li>Pseudonyme:</li><input type="text" name="pseudo"id="pseudo" placeholder="Ex : Paul984" size="30" required/></label>
		<label><li>Mot de passe (qui doit comporter minimum 6 caracteres) :</li><input type="password" name="pass" id="pass"required/></label>
		<label><li>Confirmation de votre mot de passe:</li><input type="password" name="pass" id="pass"required/></label>
		<label><li>Adresse electronique:</li><input type="email" name="pseudo" id="pseudo" placeholder="Ex : Paul984@free.fr" size="30" required/></label></ul>
		<div style="text-align:center"><input type="submit" value="Envoyer"/></div>
	</form>
<?php include "includes/footer.php" ?>

