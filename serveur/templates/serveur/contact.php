<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<form class="form-horizontal" role="form">
	<h1>Nous contacter :<h1><br />
	<h3>Pour nous contacter, veuillez remplir les champs suivants :<h3>
	<form method="post" action="serveur\templates\serveur\contact">
   
			<li><label>Pseudonyme :</label> <input type="text" name="pseudo" required autofocus/></li>
			<li><label>Adresse electronique :</label> <input type="email" name="pseudo" required/></li>
			<li><label for="probleme">Description de votre probleme :</label> <textarea name="ameliorer" id="ameliorer"></textarea></li>
		</ul>
	<button type="submit" class="btn btn-default btn-lg btn-block">Envoyer ;-)</button>	
</form>
<?php include "includes/footer.php" ?>
	<!-- Espacer chaque ligne, centrer le titre et la touche "Envoyer" -->
