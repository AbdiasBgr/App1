<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
  crossorigin="anonymous"
/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<title>Formulaire d'inscription</title>
</head>
<body> 
	<div class="container">
		<h1>Inscription</h1>
		<form method="post" action="connexion.php">
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required>
			</div>
			<div class="form-group">
				<label for="prenom">Prénom :</label>
				<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
			</div>
			<div class="form-group">
				<label for="date_naissance">Date de naissance :</label>
				<input type="date" class="form-control" id="date_naissance" name="date_naissance" placeholder="Entrez votre date de naissance" required>
			</div>
			<button type="submit" class="btn btn-primary">S'inscrire</button>
		</form>
	</div>
  <?php
  include('enregistrement.php');?>
</body>
<footer> 