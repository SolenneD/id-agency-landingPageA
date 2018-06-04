<?php
//on charge un fichier de parametrage
include('config/settings.php');

?><!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120265874-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-120265874-1');
    </script>
    <!--  Google Analytics  -->
    <script>
        dataLayer = [{
            'pageCategory': 'signup',
            'visitorType': 'high-value'
        }];
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KPP7XMR');</script>
    <!-- End Google Tag Manager -->



    <title>Paceme - Laissez votre corps guider la musique</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Synchronisez passion musicale et plaisir infini avec votre nouvelle bague connectée">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPP7XMR"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


	<header>
		<div class="logo">
			<img src="" alt="logo-paceme">
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