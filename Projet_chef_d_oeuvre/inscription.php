<?php
    session_start();
    include('db/connexionDB.php'); // Fichier PHP contenant la connexion BDD
    // S'il y a une session alors on ne retourne plus sur cette page
    if (isset($_SESSION['id'])){
        header('Location: index.php'); 
        exit;
    }
    // Si la variable "$_Post" contient des informations alors on les traite
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
        // On se place sur le bon formulaire grâce au "name" de la balise "input"
        if (isset($_POST['inscription'])){
            $nom  = htmlentities(trim($nom)); // On récupère le nom
            $prenom = htmlentities(trim($prenom)); // on récupère le prénom
            $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail
            $mdp = trim($mdp); // On récupère le mot de passe 
            $confmdp = trim($confmdp); //  On récupère la confirmation du mot de passe
            //  Vérification du nom
            if(empty($nom)){
                $valid = false;
                $er_nom = ("Le nom ne peut pas être vide");
            }       
            //  Vérification du prénom
            if(empty($prenom)){
                $valid = false;
                $er_prenom = ("Le prénom ne peut pas être vide");
            }       
            // Vérification du mail
            if(empty($mail)){
                $valid = false;
                $er_mail = "Le mail ne peut pas être vide";
                // On vérifie que le mail est dans le bon format
            }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)){
                $valid = false;
                $er_mail = "Le mail n'est pas valide";
            }else{
                // On vérifie que le mail est disponible
                $req_mail = $DB->query("SELECT mail FROM inscrits WHERE mail = ?",
                    array($mail));
                $req_mail = $req_mail->fetch();
                if ($req_mail['mail'] <> ""){
                    $valid = false;
                    $er_mail = "Ce mail existe déjà";
                }
            }
            // Vérification du mot de passe
            if(empty($mdp)) {
                $valid = false;
                $er_mdp = "Le mot de passe ne peut pas être vide";
            }elseif($mdp != $confmdp){
                $valid = false;
                $er_mdp = "La confirmation du mot de passe ne correspond pas";
            }
            // Si toutes les conditions sont remplies alors on fait le traitement
            if($valid){
                $mdp = crypt($mdp,'$6$rounds=5000$macleapersonnaliseretagardersecret$');
                $date_creation_compte = date('Y-m-d H:i:s');
                // On insert nos données dans la table utilisateur
                $DB->insert("INSERT INTO inscrits (nom, prenom, mail, mdp, date_creation_compte) VALUES 
                    (?, ?, ?, ?, ?)", 
                    array($nom, $prenom, $mail, $mdp, $date_creation_compte));
                header('Location: connexion.php');
                exit;
            }
        }
    }
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
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-0 col-sm-0 col-md-2 col-lg-3"></div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                    <h1 style="font-size:2.5rem;">Inscription</h1>
                    <form method="post">
                        <?php
                // S'il y a une erreur sur le nom alors on affiche
                if (isset($er_nom)){
                ?>
                            <div>
                                <?= $er_nom ?>
                            </div>
                            <?php   
                }
            ?>
                                <div class="form-group">
                                    <label for="nom1">Nom</label>
                                    <input class="form-control" type="text" placeholder="Votre nom" name="nom" value="<?php if(isset($nom)){ echo $nom; }?>" required>
                                </div>
                                <?php
                if (isset($er_prenom)){
                ?>
                                    <div>
                                        <?= $er_prenom ?>
                                    </div>
                                    <?php   
                }
            ?>
                                        <div class="form-group">
                                            <label for="prenom1">Prénom</label>
                                            <input class="form-control" type="text" placeholder="Votre prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }?>" required>
                                            <?php
                if (isset($er_mail)){
                ?>
                                                <div>
                                                    <?= $er_mail ?>
                                                </div>
                                                <?php   
                }
            ?>
                                                    <div class="form-group">
                                                        <label for="email1">Email</label>
                                                        <input class="form-control" type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>
                                                        <?php
                if (isset($er_mdp)){
                ?>
                                                            <div>
                                                                <?= $er_mdp ?>
                                                            </div>
                                                            <?php   
                }
            ?>
                                                                <div class="form-group">
                                                                    <label for="mdp1">Mot de passe</label>
                                                                    <input class="form-control" type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
                                                                    <label for="mdp1">Confirmez mot de passe</label>
                                                                    <input class="form-control" type="password" placeholder="Confirmer le mot de passe" name="confmdp" required>
                                                                </div>
                                                                <div>
                                                                    <button type="submit" class="btn btn-primary" name="inscription">Envoyer</button>
                                                                </div>
                                                    </div>
                                        </div>
                    </form>
      <!-- Footer -->
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>

    </html>