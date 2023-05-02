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
<style>
		body {
			background-color: #FFE4E1;
		}
		.container {
			margin-top: 100px;
			background-color: #F0ECEC;
			padding: 30px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
			width:800px;


		}
    </style>
</head>
<body> 
	<div class="container">
		<h1 class="mt-4">Inscription à la Formation Simplon PO4</h1>
		<form method="post" action="connexion.php">
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" style="width:500px;" required>
			</div>
			<div class="form-group">
				<label for="prenom">Prénom :</label>
				<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom" style="width:500px;" required>
			</div>
			<div class="form-group">
				<label for="date_naissance">Date de naissance :</label>
				<input type="date" class="form-control" id="date_naissance" name="date_naissance" placeholder="Entrez votre date de naissance" style="width:500px;" required>
			</div>
			<button type="submit" class="btn btn-primary mt-3 ">S'inscrire</button>
		</form>
	</div>
</body>
<footer> 