 
<?php
    session_start(); // Permet de savoir s'il y a une session. C'est dire si un utilisateur c'est connecté.
    include('db/connexionDB.php'); // Fichier PHP contenant la connexion BDD.
?>
    <!DOCTYPE html>
    <html lang="fr" prefix="og: http://ogp.me/ns#"style="margin-right:auto; margin-left:auto;">
    <head>
        <!--META TAGS -->
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
        <!--BOOTSTRAP!-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-social.css">
        <!--CSS!-->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <!--MEDIA QUERIES-->
        <!--Pour ceux qui ont une résolution écran < à 1400px-->
        <link rel="stylesheet" media="screen and (max-width:1400)" href="style.css">
        <!--ANIMATE.CSS!-->
        <link rel="stylesheet" href="css/animate.css">
        <!--FAVICON-->
        <link rel="icon" type="image/png" sizes="96x96" href="source/favicon-96x96.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!--FONT!-->
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <!--FONTAWESOME!-->
        <script src="https://kit.fontawesome.com/6681f2c2a6.js" crossorigin="anonymous"></script>
        <!--PROTOCOLE OPEN GRAPH-->
        <title>Lovecode&design</title>
        <meta property="og:title" content="Lovecode&design" />
        <meta property="og:type" content="site.web" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <img class="navbar-brand" src="source/logo2.png" alt="logo ordinateur et peinture">
            <a class="navbar-brand" href="index.php">Accueil</a>
            <a class="navbar-brand" href=""></a>
            <a class="navbar-brand" href="#contact_footer">Contact</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php
                if(!isset($_SESSION['id'])){
                }else{
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="profil.php">Mon profil</a>
                            <li class="nav-item">
                                <a class="nav-link" href="catalogue.php">Catalogue</a>
                                <li class="nav-item">
                                    <a class="nav-link" href="articles.php">Lifestyle</a>
                                </li>
                            </li>
                        </li>
                        <?php
                } 
	?>
                </ul>
                <ul class="navbar-nav ml-md-auto">
                    <?php
        if(!isset($_SESSION['id'])){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="inscription.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="connexion.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""></a>
                        </li>
                        <?php
        }else{
            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                            </li>
                            <?php
	} 
        ?>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div>
                <?php
	/*if(isset($_SESSION['id'])){
                echo 'ID : ' . $_SESSION['id'] . ', Nom : ' . $_SESSION['nom'] . ", pr�nom : " . $_SESSION['prenom'] . ", mail : " . $_SESSION['mail'];
	} 
        */?>
            </div>
        </div>
        <!--Alerte JS!-->
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:5px;
    margin-right: 35px;
    margin-left: 35px">
        <img src="source/virus.png" class="rounded float-left" alt="image virus" style="width:40px;margin-bottom:10px;margin-right:10px;">
  <strong> Alerte Coronavirus!</strong>- <a href="https://gisanddata.maps.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6">Suivez l'état actuel de la pandémie</a>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    
  </button>
  <!--Carrousel!-->
</div>
        <!--<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner"style="margin-left: auto;
    margin-right: auto; width:95%;">
                <div class="carousel-item active">
                    <img src="source/wireframe-min.jpg" class="d-block w-100" alt="image maquettes web">
                    <div class="carousel-caption d-none d-md-block">
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="source/numeric.jpg" class="d-block w-100" alt="image webdesign développement">
                    <div class="carousel-caption d-none d-md-block">
                        
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="source/coder.jpg" class="d-block w-100" alt="image code informatique">
                    <div class="carousel-caption d-none d-md-block">
                        
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>!-->
        <!--A PROPOS-->
        <section class="container-fluid about">
            <div class="container">
                <section id="a_propos">
                    <h1 id="bienvenue">Bienvenue</h1>
                    <br>
                    <br>
                    <h2 id="about">&Agrave; propos</h2>
                    <hr class="separator">
                    <div class="row">
                        <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                            <h3>Qui suis-je?</h3>
                            <p id="index">Bonjour, je suis Marjorie et je suis développeuse web et mobile, webdesigner, passionnée par les arts et par la culture du web. J'ai une appétence pour le Front-end, les animations en CSS et le Motion Design. A mes heures, je suis gameuse,et, j'accorde de l'importance à l'éthique du web. Je suis aussi maman, pratique le sport et aime les longues balades au grand air.
                            </p>
                            <img id="avatarmarj" src="source/avatar.png" class="rounded mx-auto d-block" style="width: 45%;
                            margin-top: 70px;" alt="avatar de Marjorie">
                        </article>
                        <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                            <h3>Pourquoi ce site?</h3>
                            <p id="index">C'est simple: envie de partager ma passion du code et du design. Au cours de ma formation en développement web et mobile chez UtopLab/Simplon.Co, je me suis découvert des compétences insoupçonnées pour les langages informatiques. Ainsi, venez découvrir tout ce que j'ai appris à travers le catalogue en ligne mais aussi de nombreux articles sur le lifstyle d'une codeuse.</p>
                            <img src="source/share.png" class="rounded mx-auto d-block" style="width:50%;" alt="...">
                        </article>
                        <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                            <h3>Pourquoi pas s'inscrire?</h3>
                            <p id="index">
                                Si vous voulez avoir accès à tous mes articles lifstyle et au catalogue en ligne sur les langages
                                HTML/CSS, JavaScript, PHP, Symfony, ainsi que quelques conseils pour avoir un beau site avec un design simplifié et une ergonomie pensée: 
                                <p><a href="inscription.php"><strong>INSCRIVEZ-VOUS!</strong></a></p>
                            </p>
                            <img src="source/like.png" class="rounded mx-auto d-block" style="width:50%;" alt="...">
                            
                            <!--ACTION APPELEE -->
                            <!--<ul class="list-unstyled list-inline text-center py-1">
                                <li class="list-inline-item">
                                    <a href="inscription.php" class="btn peach-gradient" style="margin-top:90px;"></a>
                                </li>
                            </ul>!-->
                            <!--FIN ACTION APPELEE -->
                        </article>
                    </div>
                </section>
            </div>
            <!--FIN A PROPOS-->
            <!--FOOTER-->
            <footer id="index2" class="page-footer font-small blue-grey lighten-5">
                <div class="index_footer" id="contact_footer" style="background-color:#77EFB2;">
                    <div class="container">
                        <!-- Grid row-->
                        <div class="row py-4 d-flex align-items-center">
                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                                <h5 class="mb-0">Connectez-vous avec moi sur les réseaux sociaux!</h5>
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-7 text-center text-md-right">
                                <!-- Facebook -->
                                <a class="fb-ic" href="https://www.facebook.com/marjorie.Eva.ngoupende">
                                    <i class="fab fa-facebook-f white-text mr-4"> </i>
                                </a>
                                <!-- Twitter -->
                                <a class="tw-ic" href="https://twitter.com/MarjorieN83">
                                    <i class="fab fa-twitter white-text mr-4"> </i>
                                </a>
                                <!--Linkedin -->
                                <a class="li-ic" href="https://www.linkedin.com/in/marjorie-ngoupende-dev/">
                                    <i class="fab fa-linkedin-in white-text mr-4"> </i>
                                </a>
                                <!--Instagram-->
                                <a class="ins-ic" href="https://github.com/Margotte83/">
                                    <i class="fab fa-github white-text"> </i>
                                </a>
                            </div>
                        </div>
                        <!-- Grid row-->
                    </div>
                </div>
                <!-- Footer Links -->
                <div class="container text-center text-md-left mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3 dark-grey-text">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                            <!-- Content -->
                            <h5 class="text-">Partenaire UtopLab</h5>
                            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>UTOPLAB est un lieu de rencontre pour tous, citoyens, associations, et entreprises du territoire. Un lieu d’expérimentation, de formation et de partage autour du numérique et du développement durable.
                                <a class="dark-grey-text" href="http://utoplab.fr/">UtopLab.fr</a></p>
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                            <!-- Links -->
                            <h5 class="text-">Mes productions</h5>
                            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <a class="dark-grey-text" href="https://margotte.alwaysdata.net/portfolio2/">Portfolio</a>
                            </p>
                            <p>
                                <a class="dark-grey-text" href="https://margotte.alwaysdata.net/Happy_New_Year_2020/">Animation CSS</a>
                            </p>
                            <p>
                                <a class="dark-grey-text" href="https://ma-meilleure-mutuelle.com/">Landing page mutuelle santé</a>
                            </p>
                            <p>
                                <a class="dark-grey-text" href="https://assurer-sa-voiture.com/">Landing page assurance auto</a>
                            </p>
                            <p>
                                <a class="dark-grey-text" href="https://margotte.alwaysdata.net/wordpress/">Elegant Shopping WordPress/Elementor</a>
                            </p>
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h5 class="text-">Liens préférés</h5>
                            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <a class="dark-grey-text" href="https://stackoverflow.com/">Stackoverflow</a>
                            </p>
                            <p>
                                <a class="dark-grey-text" href="https://www.w3.org/">W3C</a>
                            </p>
                            <p>
                                <a class="dark-grey-text" href="https://www.freecodecamp.org/">Freecodecamp</a>
                            </p>
                            <p>
                                <a class="dark-grey-text" href="https://lawsofux.com/">Law of Ux</a>
                            </p>
                            <p>
                                <a class="dark-grey-text" href="http://cocoribou.com/">Cocoribou Films</a>
                    
                            </p>
                            <p>
                                <a class="dark-grey-text" href="https://bulma.io/">Bulma framework</a>
                    
                            </p>

                        </div>
                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h5 class="text-">Contactez-moi</h5>
                            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <i class="fas fa-home mr-3"></i>83000 Toulon</p>
                            <p>
                                <i class="fas fa-envelope mr-3"></i><a class="dark-grey-text" href="contact.php">Formulaire de contact</a></p>
                            
                            <p>
                                <i class="fas fa-phone mr-3"></i>07.83.27.21.59</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
                <!-- Footer Links -->
                <!-- Copyright -->
                <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
                    <a class="dark-grey-text" href="index.php">LoveCode&Design.com</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!--FIN FOOTER-->
            </section>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
    </html>