<?php

  include 'calc.inc.php';

  $num1 = $_POST['nb1'];
  $num2 = $_POST['nb2'];
  $cal = $_POST['calcul'];
/* On va créer un nouvel objet avec le nom de la classe à instancier*/
  $calculator = new Calc($num1, $num2, $cal);
  try{
    echo $calculator->calculatrice();

  } catch (TypeError $e ) {
    echo 'Erreur!:' . $e->getMessage();
  }
  
 ?>