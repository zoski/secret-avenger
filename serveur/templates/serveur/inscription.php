<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

<div class="row">
		<div class="col-md-6">
			<form class="form-horizontal" role="form">
	 <div class="form-group">
		<h1>Inscription</h1>
		<form method="post" action="serveur\templates\serveur\confirmation.php">
		<h2 class="inscritpion">Veuillez remplir les champs suivants:</h2>

	<!--  Formulaire d'inscription-->
			<label for="inputPseudo" class="col-sm-3">Pseudonyme:</label>
				    <div class="col-sm-3">
						<input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Ex : Paul984" size="30" required/>
					</div>

			<label for="inputMdp" class="col-sm-3">Mot de passe (qui doit comporter minimum 6 caracteres) :</label>
					<div class="col-sm-3">
						<input type="password" class="form-control"  name="pass" id="pass"required/>
					</div>
	
			<label for="inputMdp" class="col-sm-4">Confirmation de votre mot de passe:
				<input type="password" class="form-control"  name="pass" id="pass"required/>
			</label>

			<label for="inputEmail" class="col-sm-4">Adresse electronique:
				<input type="email"  class="form-control" name="pseudo" id="pseudo" placeholder="Ex : Paul984@free.fr" size="30" required/>
			</label>
	
			<div style="text-align:center"><input type="submit" value="Envoyer"/></div>
	</form>
</div>
</div>
<?php include "includes/footer.php" ?>

