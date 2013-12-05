<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<html>
	<h1>Nous contacter :<h1><br />
	<h3>Pour nous contacter, veuillez remplir les champs suivants :<h3>
	<form method="post" action="requete.php">
    <p>
        <ul>
			<li><label>Pseudonyme :</label> <input type="text" name="pseudo" required autofocus/></li>
			<li><label>Adresse electronique :</label> <input type="email" name="pseudo" required/></li>
			<li><label for="probleme">Description de votre probleme :</label> <textarea name="ameliorer" id="ameliorer"></textarea></li>
		</ul>
		<input type="submit" value="Envoyer"/>
	</p>
	</form>
<?php include "includes/footer.php" ?>
	<!-- Espacer chaque ligne, centrer le titre et la touche "Envoyer" -->
