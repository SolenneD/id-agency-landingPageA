<?php
//on charge un fichier de parametrage
include('config/settings.php');

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Paceme - Laissez votre corps guider la musique</title>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120265874-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-120265874-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KPP7XMR');</script>
    <!-- End Google Tag Manager -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Synchronisez passion musicale et plaisir infini avec votre nouvelle bague connectée">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-120265874-1']);
        _gaq.push(['_trackEvent']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>
<div class="wrapper">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPP7XMR"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <header>
        <div class="logo">
            <img src="" alt="logo-paceme">
        </div>
    </header>

    <div class="baseline">
        <h1>Pace Me</h1>
        <h2>Laissez votre corps guider la musique</h2>
    </div>

    <div class="heartbeat">


    </div>

    <p class="baseline2">Si vous êtes intéressé par notre projet laissez nous votre email !</p>

    <form action="core/addEmail.php" method="post">
        <input type="email" name="email" placeholder="Votre email">
        <input onClick="_gaq.push(['_trackEvent', 'Formulaire', 'Clic', 'LandingPage']);" title="Formulaire" type="submit" value="Envoyer">
    </form>
    <footer>
        <a class="mention-legal" href="legales.html">Mentions légales</a>
    </footer>
<!--    <ul>-->
<!--        <li><a href="" onClick="_gaq.push(['_trackEvent', 'Page Facebook', 'Clic', 'LandingPage']);" title="Facebook" />Facebook</li>-->
<!--        <li><a href="" onClick="_gaq.push(['_trackEvent', 'Page Instagram', 'Clic', 'LandingPage']);" title="Instagram" />Instagram</li>-->
<!--        <li><a href="" onClick="_gaq.push(['_trackEvent', 'Page Twitter', 'Clic', 'LandingPage']);" title="Twitter" />Twitter</li>-->
<!--    </ul>-->


</div>

<script>
    var pageTracker = _gat._getTracker('UA-120265874-1');
    pageTracker._trackPageview();
</script>



</body>
</html>