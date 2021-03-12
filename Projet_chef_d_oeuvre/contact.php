<!DOCTYPE html>
<html lang="fr">

<head>
    <!--meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--BULMA!-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <!--BOOTSTRAP!-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!--FAVICON!-->
    <link rel="icon" type="image/png" sizes="96x96" href="source/favicon-96x96.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6681f2c2a6.js" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>
</head>
<!--Entête!-->
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <img class="navbar-brand" src="source/logo2.png" alt="logo ordinateur et peinture" style="width:10%;">
            <a class="navbar-brand" href="index.php">Accueil</a>
            <a class="navbar-brand" href=""></a>
            <a class="navbar-brand" href=""></a>
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
                            <a class="nav-link" href="profil">Mon profil</a>
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
                            <a class="nav-link" href="connexion.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inscription.php">Inscription</a>
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
        <!--Contact-->
    <div class="block">
        <footer class="footer">
            <section id="contact" style="width: 60%;
    display: block;
    margin-left: auto;
    margin-right: auto;">
                <h2 class="Subtitle" style="font-size: 2.5rem;">Contactez-moi</h2>
                <div class="footer-contact-form">
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                            <input id="name" class="input" type="text" placeholder="Votre nom" name="name">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Prénom</label>
                        <div class="control">
                            <input id="firstname" class="input" type="text" placeholder="Votre prénom" name="firstname">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">e-mail</label>
                        <div class="control">
                            <input id="email" class="input" type="text" placeholder="e-mail" name="email">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea id="message" class="textarea" placeholder="Votre message" name="message"></textarea>
                            <br>
                            <button class="button is-link" id="send_email">Envoyer !</button>
                        </div>
                    </div>
                </div>
                <!--Footer!-->
                <div class="footer-informations">
                    
                </div>
        <!--LIBRAIRIES-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
        <!--JavaScript-->
        <script src="Js/main.js"></script>
    </body>

</html>