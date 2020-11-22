<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Marine Merveillie RP attachée de presse freelance</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/570318d29a.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway&display=swap" rel="stylesheet">   
        <link rel="stylesheet" href="./styles/styles.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <div class="menu">
                <div class="logo">
                    <img class="logo-img" src="./assets/logo-marine-merveillie-rp.png" alt="">
                </div>
                <div class="menu-links">
                    <a href="./expertise.html">
                        Expertise
                    </a>
                    <a href="./accompagnement.html">
                        Accompagnement
                    </a>
                    <a href="./references.html">
                        Réfèrences
                    </a>
                    <a href="./a-propos.html">
                        À propos
                    </a>
                    <a href="./contact.html">
                        <i class="fas fa-envelope"></i>
                    </a>   
                    <a href="https://www.linkedin.com/in/marine-merveillie-b142aa3b/" target="blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://twitter.com/Marinemer" target="blank">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    <a href="https://www.instagram.com/marine_merveillierp/" target="blank">
                        <i class="fab fa-instagram-square"></i>
                    </a>
                </div>
            </div>
        </header>

        <div class="intro">
            <h1>Votre message a bien été envoyé</h1>
            <p>Je reviendrais vers vous rapidemment</p>  
        </div>
        <footer>
            <p>
                Marine Merveillie RP
            </p>
            <a href="./mentions-legales.html">
                Mentions légales
            </a>
            <p>
                06.75.39.59.12 
            </p>
            <p>
                Copyright © 2020
            </p>
        </footer>
    </body>
</html>
<?php
require 'recaptcha.php';

$to      = 'marine-merveillie@gmail.com';
$subject = 'Nouveau message du formulaire de contact marine-merveillie.com';
$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$telephone = htmlspecialchars($_POST['phone']);
$message = "Message de : \n $prenom \n $nom \n $telephone \n \n" . htmlspecialchars($_POST['message']);
$sender = htmlspecialchars($_POST['email']);
$headers = "From: $sender" . "\r\n" .
    'Reply-To: $sender' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if (!empty($_POST)) {
        $captcha = new Recaptcha('6Lcei-gZAAAAADjAi--GlUvpJ_cj5T33Nrz0IUeN');
        if($captcha->isValid($_POST['g-recaptcha-response']) === true) {
            mail(htmlspecialchars($to), htmlspecialchars($subject), htmlspecialchars($message), htmlspecialchars($headers));
        }
    }    

?>