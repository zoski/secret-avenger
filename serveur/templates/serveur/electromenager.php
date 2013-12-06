
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Search&Find">
		<meta name="authors" content="Xid_Smurf_Team">
		<link rel="shortcut icon" href="ico/favicon.png">
		<title>Site Search&Find</title>

		<!-- Bootstrap core CSS + CSS perso -->
		<link href="../../static/serveur/css/bootstrap.css" rel="stylesheet">
		<link href="../../static/serveur/css/perso.css" rel="stylesheet">
		<link href="../../static/serveur/css/font-awesome.min.css" rel="stylesheet" >
		<link href="../../static/serveur/css/animations.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
			  		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
			  		</button>
			 		<a class="navbar-brand" href="index.php">Search&Find </a>
				</div>
			
				<div class="collapse navbar-collapse">
			  		<ul class="nav navbar-nav">
						<li><a href="index.php"><i class="fa fa-home fa-lg"></i> Accueil</a></li>
						<li><a href="inscription.php"><i class="fa fa-user fa-lg"></i> Inscription</a></li>
						<li><a href="FAQ.php"><i class="fa fa-question fa-lg"></i> FAQ</a></li>
						<li><a href="contact.php"><i class="fa fa-envelope-o fa-lg"></i> Contact</a></li>
			  		</ul>
				</div><!--/.nav-collapse -->
      		</div>
		</div>
		
		<!-- Le code commence ici-->
		
		<div class="container"> <!-- Fin dans le footer-->
			<div class="starter-template">
				<div class="row">
				
					<div class="col-lg-6">
						<a href=http://google.fr class="btn btn-warning btn-block cat" role="button">Cafetiere</a>
					</div>
					
					<div class="col-lg-6">
						<a href=http://google.fr class="btn btn-danger btn-block cat" role="button">Lave vaisselle</a>
					</div>
	
				</div>
				
				<div class="row">
				
					<div class="col-lg-6">
						<a href=http://google.fr class="btn btn-success btn-block cat" role="button">Frigidaire</a>
					</div>
					
					<div class="col-lg-6">
						<a href=http://google.fr class="btn btn-primary btn-block cat" role="button">Machine a laver</a>
					</div>
	
				</div>
	
	 <!-- et finit la-->
	
	
	    		<script src="js/jquery.js"></script>
	    		<script src="js/bootstrap.min.js"></script>
			</div><!-- fin du contener-->
		</div><!-- fin du starter template-->
	</body>
</html>
<?php include "includes/footer.php" ?>

