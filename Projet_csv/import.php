<?php
	
if (isset ($_POST['valider'])){
			
     $uploaddir='/var/www/html/projet_csv';
     $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
     
     

     echo '<pre>';
     if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
     echo "Le fichier est valide, et a été téléchargé
     avec succès. Voici plus d'informations :\n";
               $bdd = new PDO('mysql:host=localhost;dbname=projet_csv', 'root', '');

     $reponse=$bdd->exec("LOAD DATA INFILE '.$uploadfile.' INTO TABLE csv FIELDS TERMINATED BY ';' LINES TERMINATED BY '\n'");
     } else {
     echo "ça ne marche pas";
     }

     echo 'Voici quelques informations de débogage :';
     print_r($_FILES);

     echo '</pre>';

}
?>


