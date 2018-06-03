<?php
//on charge un fichier de parametrage
include('config/settings.php');

?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header>
		<div class="logo">
			<img src="">
		</div>
	</header>
	
	<div class="row">
		<div class="baseline col-7">
			<h1>Vivez au rythme de vos pulsations avec Pace Me</h1>
			
			<p>Que vous soyez seul ou à deux, prenez du plaisir avec vos groupes préférés !</p>
		</div>
		<div class="col-5 contact">
			<h2>Si vous êtes intéressé par notre projet laissez nous votre email !</h2>
			<form action="core/addEmail.php" method="post">
				<input type="email" name="email" placeholder="Adresse email">
				<input type="submit" value="Envoyer">
			</form> 
		</div>
	</div>
	<footer>
		<ul>
			<li><a href="" />Facebook</li>
			<li><a href="" />Instagram</li>
			<li><a href="" />Twitter</li>
		</ul>
		
	</footer>
</body>