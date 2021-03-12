<?php
session_start();
include('db/connexionDB.php');
if (!isset($_SESSION['id'])) {
  header('Location: index.php');
  exit;
}
// On récupère les informations de l'utilisateur connecté
$afficher_profil = $DB->query(
  "SELECT * 
        FROM inscrits
        WHERE id = ?",
  array($_SESSION['id'])
);
$afficher_profil = $afficher_profil->fetch();
if (!empty($_POST)) {
  extract($_POST);
  $valid = true;
  if (isset($_POST['modification'])) {
    $nom = htmlentities(trim($nom));
    $prenom = htmlentities(trim($prenom));
    $mail = htmlentities(strtolower(trim($mail)));
    if (empty($nom)) {
      $valid = false;
      $er_nom = "Il faut mettre un nom";
    }
    if (empty($prenom)) {
      $valid = false;
      $er_prenom = "Il faut mettre un pr�nom";
    }
    if (empty($mail)) {
      $valid = false;
      $er_mail = "Il faut mettre un mail";
    } elseif (!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)) {
      $valid = false;
      $er_mail = "Le mail n'est pas valide";
    } else {
      $req_mail = $DB->query(
        "SELECT mail 
                    FROM inscrits
                    WHERE mail = ?",
        array($mail)
      );
      $req_mail = $req_mail->fetch();
      if ($req_mail['mail'] <> "" && $_SESSION['mail'] != $req_mail['mail']) {
        $valid = false;
        $er_mail = "Ce mail existe d�j�";
      }
    }
    if ($valid) {
      $DB->insert(
        "UPDATE inscrits SET prenom = ?, nom = ?, mail = ? 
                    WHERE id = ?",
        array($prenom, $nom, $mail, $_SESSION['id'])
      );
      $_SESSION['nom'] = $nom;
      $_SESSION['prenom'] = $prenom;
      $_SESSION['mail'] = $mail;
      header('Location:profil.php');
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
  <title>Modifier votre profil</title>
  <!--CSS-->
  <link rel="stylesheet" href="css/style.css">
  <!--FAVICON-->
  <link rel="icon" type="image/png" sizes="96x96" href="source/favicon-96x96.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <img class="navbar-brand" src="source/logo2.png" alt="logo ordinateur et peinture"style="width:10%;">
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
                            <a class="nav-link" href="deconnexion.php">Se déconnecter</a>
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

  <style>
    /* CARD profil */

    body {
      font-family: "Poppins", sans-serif;
      height: 100vh;
    }

    a {
      color: #92badd;
      display: inline-block;
      text-decoration: none;
      font-weight: 400;
    }

    h2 {
      text-align: center;
      font-size: 16px;
      font-weight: 600;
      text-transform: uppercase;
      display: inline-block;
      margin: 40px 8px 10px 8px;
      color: #cccccc;
    }



    /* STRUCTURE */

    .wrapper {
      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: center;
      width: 100%;
      min-height: 100%;
      padding: 20px;
    }

    #formContent {
      -webkit-border-radius: 10px 10px 10px 10px;
      border-radius: 10px 10px 10px 10px;
      background: #fff;
      padding: 30px;
      width: 90%;
      max-width: 450px;
      position: relative;
      padding: 0px;
      -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
      box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    #formFooter {
      
      border-top: 1px solid #dce8f1;
      padding: 25px;
      text-align: center;
      -webkit-border-radius: 0 0 10px 10px;
      border-radius: 0 0 10px 10px;
    }



    /* Tables */

    h2.inactive {
      color: #cccccc;
    }

    h2.active {
      color: #0d0d0d;
      border-bottom: 2px solid #5fbae9;
    }



    /* Typographie*/

    input[type=button],
    input[type=submit],
    input[type=reset] {
      background-color: #56baed;
      border: none;
      color: white;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      font-size: 13px;
      -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
      margin: 5px 20px 40px 20px;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover,
    input[type=submit]:hover,
    input[type=reset]:hover {
      background-color: #39ace7;
    }

    input[type=button]:active,
    input[type=submit]:active,
    input[type=reset]:active {
      -moz-transform: scale(0.95);
      -webkit-transform: scale(0.95);
      -o-transform: scale(0.95);
      -ms-transform: scale(0.95);
      transform: scale(0.95);
    }

    input[type=text] {
      background-color: #f6f6f6;
      border: none;
      color: #0d0d0d;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 5px;
      width: 85%;
      border: 2px solid #f6f6f6;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
    }

    input[type=text]:focus {
      background-color: #fff;
      border-bottom: 2px solid #5fbae9;
    }

    input[type=text]:placeholder {
      color: #cccccc;
    }



    /* ANIMATIONS */

    /* Simple CSS3 Animation */
    .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }

      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }

    @keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }

      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }

    /* Simple CSS3 Animation */
    @-webkit-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @-moz-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .fadeIn {
      opacity: 0;
      -webkit-animation: fadeIn ease-in 1;
      -moz-animation: fadeIn ease-in 1;
      animation: fadeIn ease-in 1;

      -webkit-animation-fill-mode: forwards;
      -moz-animation-fill-mode: forwards;
      animation-fill-mode: forwards;

      -webkit-animation-duration: 1s;
      -moz-animation-duration: 1s;
      animation-duration: 1s;
    }

    .fadeIn.first {
      -webkit-animation-delay: 0.4s;
      -moz-animation-delay: 0.4s;
      animation-delay: 0.4s;
    }

    .fadeIn.second {
      -webkit-animation-delay: 0.6s;
      -moz-animation-delay: 0.6s;
      animation-delay: 0.6s;
    }

    .fadeIn.third {
      -webkit-animation-delay: 0.8s;
      -moz-animation-delay: 0.8s;
      animation-delay: 0.8s;
    }

    .fadeIn.fourth {
      -webkit-animation-delay: 1s;
      -moz-animation-delay: 1s;
      animation-delay: 1s;
    }

    /* Simple CSS3 Animation */
    .underlineHover:after {
      display: block;
      left: 0;
      bottom: -10px;
      width: 0;
      height: 2px;
      background-color: #56baed;
      content: "";
      transition: width 0.2s;
    }

    .underlineHover:hover {
      color: #0d0d0d;
    }

    .underlineHover:hover:after {
      width: 100%;
    }



    /* Autres */

    *:focus {
      outline: none;
    }

    #icon {
      width: 30%;
    }
  </style>
  <div class="wrapper fadeInDown">
    <div id="formContent">

      <!-- Logo -->
      <div class="fadeIn first">
        <img src="source/user.png" id="icon" alt="User Icon" />
      </div>

      <!-- Formulaire-->
      <div>Modification</div>
      <form method="post">
      <?php
    if (isset($er_nom)) {
    ?>
      <div><?= $er_nom ?></div>
    <?php
    }
    ?>
        <input type="text" id="nom" class="fadeIn second" name="nom" placeholder="Votre nom" value="<?php if (isset($nom)) {
                                                                    echo $nom;
                                                                  } else {
                                                                    echo $afficher_profil['nom'];
                                                                  } ?>" required>
                                                                  <?php
    if (isset($er_prenom)) {
    ?>
      <div><?= $er_prenom ?></div>
    <?php
    }
    ?>
        <input type="text" id="prenom" class="fadeIn third" name="prenom" placeholder="Votre prénom"value="<?php if (isset($prenom)) {
                                                                          echo $prenom;
                                                                        } else {
                                                                          echo $afficher_profil['prenom'];
                                                                        } ?>" required>
                                                                         <?php
    if (isset($er_mail)) {
    ?>
      <div><?= $er_mail ?></div>
    <?php
    }
    ?>
    <input type="text" id="mail" class="fadeIn third" placeholder="Adresse mail" name="mail" value="<?php if (isset($mail)) {
                                                                        echo $mail;
                                                                      } else {
                                                                        echo $afficher_profil['mail'];
                                                                      } ?>" required>
    <input type="submit" class="fadeIn fourth" name="modification">
  </form>
        <!--<input type="submit" class="fadeIn fourth" value="Log In">!-->
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Mot de passe oublié?</a>
      </div>

    </div>
  </div>
</body>
</html>