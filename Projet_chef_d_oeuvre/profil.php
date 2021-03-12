<?php
session_start();
    include('db/connexionDB.php'); 
    // S'il n'y a pas de session alors on ne va pas sur cette page
    if (!isset($_SESSION['id'])){
        header('Location: index.php'); 
        exit;
    }
    // On récupère les informations de l'utilisateur connecté
    $afficher_profil = $DB->query("SELECT * FROM inscrits WHERE id = ?",
        array($_SESSION['id']));
    $afficher_profil = $afficher_profil->fetch();
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
    
    </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <img class="navbar-brand" src="source/logo2.png" alt="logo ordinateur et peinture"style="width:10%;">
            <a class="navbar-brand" href="index.php">Accueil</a>
            <a class="navbar-brand" href=""></a>
            <a class="navbar-brand" href="contact.php">Contact</a>
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
                            <a class="nav-link" href="modifier-profil.php">Modifier</a>
                            <li class="nav-item">
                                <a class="nav-link" href="utilisateurs.php">Utilisateurs</a>
                                <li class="nav-item">
                                    <a class="nav-link" href=""></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href=""></a>
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
                            <a class="nav-link" href=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="deconnexion.php">Déconnexion</a>
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

            
            <div id="profil" class="card" style="width: 18rem;">
                <img src="source/logo.png" class="card-img-top" alt="logo du site">
                <div class="card-body">
                    <p >Voici votre profil:
                        <br>
                        <strong>
                        <?= $afficher_profil['nom'] . " " . $afficher_profil['prenom']; ?>
                        </strong>
                    </p>
                    <div>Quelques informations sur vous : </div>
                    <ul>
                        <li>Votre identifiant est :
                            <?= $afficher_profil['id'] ?>
                        </li>
                        <li>Votre mail est :
                            <?= $afficher_profil['mail'] ?>
                        </li>
                        <li>Votre compte a été crée le :
                            <?= $afficher_profil['date_creation_compte'] ?>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
            <!-- Footer -->
    </body>
    </html>