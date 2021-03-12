<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="FR-fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Bootstrap!-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!--css!-->
  <link rel="stylesheet" href="style.css">
  <!--Favicon!-->
  <link rel="icon" href="/image/favicon.ico" type="image/x-icon">
</head>
<title>Charte</title>

<body>
  <section id="fonctionnement">
    <h1>Charte de l'apprenant.e</h1>
    <br>
    <br>
    <div class="container">
      <div class="row align-items-start">
        <div class="col">
          <h2>Fonctionnement global de la promo</h2>
          <p>Le confort de tous en compte tu prendras.
            <br>Des locaux propres tu préserveras.
            <br>Collectivement le vendredi tu rangeras.
            <br>La météo brièvement tu feras.
            <br>La veille tu respecteras.
            <br>La feuille de présence tu signeras.
            <br>Dans le travail concentré tu seras.</p>
        </div>
        <div class="col">
          <h2>Etat d'esprit /vision de la promo</h2>
          <p>A la réussite collective tu oeuvreras.
            <br>Plus haut que tes fesses ne pèteras.
            <br>Quand la parole tu prendras l'attention tu auras.
            <br>Au bien être de tous tu veilleras.
            <br>Dans le partage tu travailleras.
            <br>Avec patience et persévérance tu apprendras.
            <br>Ton utopote tu respecteras.
            <br>Ton esprit ouvert tu garderas.
            <br>En autonomie tu feras mais l'esprit de groupe tu protègeras.
            <br>
          </p>
        </div>
        <div class="col">
          <h2>Engagements de l'apprenant.e</h2>
          <p>Assidu tu seras.
            <br>Le temps de parole tu respecteras.
            <br>Tes formateurs tu respecteras.
            <br>L'entraide tu pratiqueras.
            <br>Ta curiosité tu aiguiseras.
            <br>Ta connaissance constamment tu élargiras.
            <br>Dans tes recherches, méthodique tu seras.
            <br>Ces règles tu appliqueras.
            <br>Le matériel tu respecteras.
            <br>
          </p>
        </div>
      </div>
  </section>
  <hr>
  <br>
  <div style="text-align:center">
    <h3>Liste des signataires</h3>
    <br>
    <br>
    <form action="" method="POST">
      <table>
        <tr>
          <td>
            <label for="name">Nom :</label>
          </td>
          <td>
            <input type="text" name="name" id="name" required placeholder="votre nom">
          </td>
        </tr>
        <tr>
          <td>
            <br>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button name="formsoumettre" value="Soumettre" type="submit" class="btn btn-primary">Envoyer!</button>
            </div>
          </td>
        </tr>
      </table>
  </div>
  </form>
  <hr>
  <div>
	  	<?php
	  	foreach ($name as $element) {
	  		echo $element . '<br>';//
	  		# code...
	  	}
	  	 ?>
	  	</div>
	 
</body>
</html>

