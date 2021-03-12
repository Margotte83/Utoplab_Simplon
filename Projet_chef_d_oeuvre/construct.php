<?php
    session_start(); // Permet de savoir s'il y a une session. C'est dire si un utilisateur c'est connect� � votre site.

    include('db/connexionDB.php'); // Fichier PHP contenant la connexion votre BDD
?>
    <!DOCTYPE html>
    <html lang="fr" prefix="og: http://ogp.me/ns#">

    <head>
        <!-- Required meta tags -->
        <base href="" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="language" content="fr" />
        <meta name="description" content="description">
        <meta name="keywords" content="lovecode&design,lifestyle,code informatique, webdesign, Utoplab, Simplon.co," />
        <!--SUMMARY CARD!-->
        <meta name=”twitter:card” content=”summary” />
        <meta name=”twitter:site” content=”” />
        <meta name=”twitter:title” content=”LoveCode&Design” />
        <meta name=”twitter:description” content=”Code,Design,Ethique” />
        <meta name=”twitter:image” content=”source/love.png” />
        <!--BOOSTRAP!-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-social.css">
        <!--CSS!-->
        <link rel="stylesheet" href="css/style.css">
        <!--ANIMATE.CSS!-->
        <link rel="stylesheet" href="animate.css">
        <!--FAVICON-->
        <link rel="icon" type="image/png" sizes="96x96" href="source/favicon-96x96.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!--FONT!-->
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <!--FONTAWESOME!-->
        <script src="https://kit.fontawesome.com/6681f2c2a6.js" crossorigin="anonymous"></script>
        <!--protocole Open Graph!-->
        <title>Lovecode&design</title>
        <meta property="og:title" content="Lovecode&design" />
        <meta property="og:type" content="site.web" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
    </head>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
        
        .bgimg {
            background-image: url('source/responsive-web-design.jpg');
            height: 100%;
            background-position: center;
            background-size: cover;
            position: relative;
            color: white;
            font-family: "Courier New", Courier, monospace;
            font-size: 25px;
        }
        
        .topleft {
            position: absolute;
            top: 0;
            left: 16px;
        }
        
        .bottomleft {
            position: absolute;
            bottom: 0;
            left: 16px;
        }
        
        .middle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        
        hr {
            margin: auto;
            width: 40%;
        }
    </style>
    <body>
        <div class="bgimg">
            <div class="topleft">
                <a href="index.php" style="color:white;">Accueil</a>
            </div>
            <div class="middle">
                <h1 class="display-3" style="color:orangered; font-family: fantasy;">Page en construction</h1>
            </div>
            <div class="bottomleft">
                <a href="contact.php" style="color:white;" target_blank="">Contactez-moi ici</a>
                </p>
                </a>
                </p>
            </div>
        </div>
        </section>
        <!-- Option JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
    </body>
    </html>