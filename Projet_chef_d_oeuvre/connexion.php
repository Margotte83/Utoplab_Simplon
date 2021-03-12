<?php
    session_start();
    include('db/connexionDB.php'); // Fichier PHP contenant la connexion votre BDD
  // S'il y a une session alors on ne retourne plus sur cette page  
    if (isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }
    // Si la variable "$_Post" contient des informations alors on les traitres
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
        if (isset($_POST['connexion'])){
            $mail = htmlentities(strtolower(trim($mail)));
            $mdp = trim($mdp);
            if(empty($mail)){ // Vérification qu'il y est bien un mail de renseigné
                $valid = false;
                $er_mail = "Il faut mettre un mail";
            }
            if(empty($mdp)){ // Vérification qu'il y est bien un mot de passe de renseign�
                $valid = false;
                $er_mdp = "Il faut mettre un mot de passe";
            }
            // On fait une requête pour savoir si le couple mail / mot de passe existe bien car le mail est unique !
            $req = $DB->query("SELECT * 
                FROM inscrits
                WHERE mail = ? AND mdp = ?",
                array($mail, crypt($mdp, '$6$rounds=5000$macleapersonnaliseretagardersecret$')));
            $req = $req->fetch();
            // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
	if (!isset($req['id'])){
        $valid = false;
	$er_mail = "Le mail ou le mot de passe est incorrecte";
	    }elseif($req['n_mdp'] == 1){ // On remet à zéro la demande de nouveau mot de passe s'il y a bien un couple mail / mot de passe
		$DB->insert("UPDATE inscrits SET n_mdp = 0 WHERE id = ?", 
		array($req['id']));
	}
            // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
            if ($valid){
                $_SESSION['id'] = $req['id']; // id de l'utilisateur unique pour les requêtes futures
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];
                header('Location:index.php');
                exit;
            }   
        }
    }
?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Connexion</title>
        <!--BOOSTRAP-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="css/style.css">
        <!--FAVICON-->
        <link rel="icon" type="image/png" sizes="96x96" href="source/favicon-96x96.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!--FONTS!-->
        <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6681f2c2a6.js" crossorigin="anonymous"></script>
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
            <div class="row">
                <div class="col-0 col-sm-0 col-md-2 col-lg-3"></div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                <h1 style="font-size:2.5rem;">Connexion</h1>
                    <p></p>
                    <form method="post">
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
                                    <label for="nom1">Email</label>
                                    <input class="form-control" type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>
                                </div>
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
                                            <label for="nom1">Mot de passe</label>
                                            <input class="form-control" type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
                                        </div>
                                        <button class="btn btn-primary" type="submit" name="connexion">Envoyer</button>
                    </form>
                    <!-- Option JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
    </html>
