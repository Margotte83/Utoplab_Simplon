<?php

//$userCredentials = $_POST;
$name = $_POST['name'];

try {
  $connexion = new PDO("mysql:host=localhost;dbname=charte;charset=utf8","root", "");
  //$connexion-> setAttribute( PDO: ATTR_ERRMODE, PDO::ERRMODE_EXCE )//
  $connexion->query('INSERT INTO apprenants (name) VALUES ($name)');

  if (isset($_POST['name'])) {
	// on affiche nos résultats
	echo 'Votre nom est '.$_POST[''];
}

  //->fetchAll();

  //echo 'Connected to db';
  // var_dump($result);
  //foreach ($result as $user){
  // echo $user['pseudo'] . '<br>'


} catch (PDOException $error){
  echo $error->getMessage();
}
	// depuis le terminal myslql> select * from user;// pour voir les utilisateurs s'afficher
?>
