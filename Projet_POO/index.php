<!doctype html>
<html lang="fr">
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>POO Calculatrice</title>
<!--CSS!-->
<link type="text/css" rel="stylesheet" href="style.css">
<!--BULMA librairie!-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<!--Favicon!-->
    <link rel="shortcut icon" type="image/x-icon" href="img/calculatrice.ico">
</head>
<body>
<div class="columns">
  <div class="column">
  <form  action="" method="POST">
  <table>
  <center>
  <!--Bannière!-->
  <h1><a href="#">Ma calculatrice POO !</a></h1>
  <br>
  <!--JavaScript phrase défile!-->
  <marquee id="id1" scrollamount="2"><span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();">Ma calculatrice est réalisée avec HTLM/ CSS/ PHP "POO"</span></marquee>
  <tr>
  <!--Calculatrice!-->
  <div class="field">
  <div class="control">
    <td id="val1">Entrez une valeur:</td>
    <tr><td><input class="input is-primary" type="text" placeholder="Nombre" name="nb1" required></td></tr>
    <div class="field">
   <div class="control">
    <td id="val1">Entrez une valeur:</td>
    <tr><td><input class="input is-primary" type="text" name="nb2" placeholder="Nombre" required ></td></tr>
  </tr>
  </div>
</div>
</div>
</div>
<tr>
<div class="field">
  <div class="control">
  <td id="val1">Sélectionnez une opération:</td>
<td>
   <br>  
      <div class="select is-primary">
        <select name="calcul">
          <option value="none">Choisir</option>
          <option value="add">Addition</option>
          <option value="sous">Soustraction</option>
          <option value="mul">Multiplication</option>
          <option value="div">Division</option>
        </select>
      </div>
    </div>
  </div>
    </td></tr>
      <div class="buttons">
      <tr><td><button type="reset" class="button is-link">Effacer valeurs</button></td></tr>
      <td><button name="submit" type="submit" class="button is-primary">Calculer</button></td></tr>
</div>
<tr>
  <!--Avatar!-->
  <td id="avatar">By Margotte<br>
  <img src="img/myAvatar.gif" alt="visage avatar de Margotte"></td>
</tr>
</center>
</table>
      </form> 
      <br><br>
      <div class="result-box">
 <h3>Le résultat est : 
 <?php
    include('calc.php');
    ?></h3>
    </h3>
  </div>  
  <br><br><br>
<!--Formulaire!-->
  <p class="title is-3">Contactez-moi</p>
  <div class="field">
    <label class="label">Email</label>
    <div class="control has-icons-left has-icons-right">
      <input class="input is-danger" type="email" placeholder="Entrez email " value="mail" required>
      <span class="icon is-small is-left">
        <i class="fas fa-envelope"></i>
      </span>
  </div>
  <div class="field">
    <label class="label">Message</label>
    <div class="control">
      <textarea class="textarea" name="message" placeholder="message" required></textarea>
    </div>
  </div>
  <div class="field is-grouped">
    <div class="control">
      <button class="button">Submit</button>
    </div>
    <div class="control">
      <button class="button is-link is-light">Cancel</button>
    </div>
  </div>
  </body>
  </html>