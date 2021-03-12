<?php
    session_start();
    include('db/connexionDB.php');
    if (!isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }
    // On récupère tous les utilisateurs sauf l'utilisateur en cours
    $afficher_profil = $DB->query("SELECT * 
        FROM inscrits
        WHERE id <> ?",
        array($_SESSION['id']));
    $afficher_profil = $afficher_profil->fetchAll(); // fetchAll() permet de r�cup�rer plusieurs enregistrements
    ?>
    <!DOCTYPE html>
    <html lang="fr" xmlns="http://www.w3.org/1999/html">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Utilisateurs</title>
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
                            <a class="nav-link" href="profil.php">Mon profil</a>
                            <li class="nav-item">
                                <a class="nav-link" href="modifier-profil.php">Modifier</a>
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

            <div id="row" class="row">
                <div class="container">
                    <h1 id="titre" style="font-size:60px;">Utilisateurs</h1>
                    <p style="text-align:center;">Cette page vous permet de connaître la liste de toutes les personnes inscrites au site et d'avoir accès aux différents profils.</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Voir le profil</th>
                            </tr>
                            <?php
            // Foreach agit comme une boucle mais celle-ci s'arrête de façon intelligente.
            // Elle s'arrête avec le nombre de lignes qu'il y a dans la variable $afficher_profil

            // La variable $afficher_profil est comme un tableau contenant plusieurs valeurs
            // pour lire chacune des valeurs distinctement on va mettre un pointeur que l'on appellera ici $ap
            foreach($afficher_profil as $ap){
                ?>
                                <tr class="table-primary">
                                    <td>
                                        <?= $ap['nom'] ?>
                                    </td>
                                    <td>
                                        <?= $ap['prenom'] ?>
                                    </td>
                                    <td><a href="voir_profil.php?id=<?= $ap['id'] ?>">Aller au profil</a></td>
                                </tr>
                                <?php
            }
            ?>
                        </thead>
                    </table>
                </div>
            </div>
            <div></div>
            <div></div>
            <!-- Footer -->
    </body>
    </html>