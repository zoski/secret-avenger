<form role="form">
	 <div class="form-group">
<h1>Inscription</h1>
<form method="post" action="serveur\templates\serveur\confirmation.php">
	<h2 class="inscritpion">Veuillez remplir les champs suivants:</h2>
	<ul><!--  Formulaire d'inscription-->
		<label>Pseudonyme:
			<input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Ex : Paul984" size="30" required/>
		</label>

		<label>Mot de passe (qui doit comporter minimum 6 caracteres) :
			<input type="password" name="pass" id="pass"required/>
		</label>

		<label>Confirmation de votre mot de passe:
			<input type="password" name="pass" id="pass"required/>
		</label>
	
		<label>Adresse electronique:
			<input type="email" name="pseudo" id="pseudo" placeholder="Ex : Paul984@free.fr" size="30" required/>
		</label>
	</ul>

		<!-- Bouton à changer -->
		 <button type="submit" class="btn btn-default">Envoyer</button>
</form>
