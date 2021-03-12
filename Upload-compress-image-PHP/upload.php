<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">!-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Image compressée PHP</title>
	<!--font!-->
	<link href="https://fonts.googleapis.com/css?family=Alice|Pacifico&display=swap" rel="stylesheet">
	
    <!--Liens CSS!-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="src/upload.css">
	<!--Lien favicon!-->
	<link rel="shortcut icon" href="src/favicon.ico" type="image/x-icon">
	<!--Musique de fond!-->
	<embed src="src/Happy.mp3" autostart="true" loop="false" hidden="true"></embed>

</head>
<body>
	<div class="title">
	<h2>Voici votre image compressée!</h2>
</div>
	<h4>Faire Clic droit et "enregistrer sous"</h4>
	
</body>
</html>
<?php 

//Gérer le téléchargement des images et compresser les fonctionnalités.Créer la fonction compressImage () pour compresser 
//les fichiers images “JPG, GIF ou PNG” .Passer la valeur de qualité d'image par défaut dans les fonctions PHP de compression d'image. 
//La valeur de qualité d'image par défaut peut être modifiée en fonction des exigences de qualité d'image. 
//Code PHP avec une fonction permettant de télécharger et de compresser une image. Dans cet exemple de code, 
//on télécharge le fichier image d'origine, puis on compresse ce fichier image et le renommer avec «min-» dans le même répertoire.//
	$file_type_error = '';
	//Variable de téléchargement de fichier//
	if($_FILES['upload_images']['name']) {
	//Renvoie au chemin d'accès du répertoire de téléchargement actuel.//
		$upload_dir = "uploads/";	
		if (($_FILES["upload_images"]["type"] == "image/gif") ||
		   ($_FILES["upload_images"]["type"] == "image/jpeg") ||
		   ($_FILES["upload_images"]["type"] == "image/png") ||
		   ($_FILES["upload_images"]["type"] == "image/pjpeg")) {
			$file_name = $_FILES["upload_images"]["name"];
			// Extension de fichier//
			$extension = end((explode(".", $file_name)));
			$upload_file = $upload_dir.$file_name;
			if(move_uploaded_file($_FILES['upload_images']['tmp_name'],$upload_file)){
				 $source_image = $upload_file;
				 $image_destination = $upload_dir."min-".$file_name;
			// Compresser l'image//
				 $compress_images = compressImage($source_image, $image_destination);
			}		 
		} else {

			$file_type_error = "Upload only jpg or gif or png file type";
			//Télécharge uniquement le type de fichier jpg, gif ou png//
		}	
	}
	// Créer un fichier JPEG etc. compressé à partir du fichier source//
	function compressImage($source_image, $compress_image) {//fonction compressImage() pour compresser les images JPEG, PNG et GIF.//
	//Renvoie les dimensions avec le type de fichier et une chaîne de texte hauteur / largeur à utiliser 
	//dans une balise HTML normale img et le type de contenu HTTP correspondant.//
		$image_info = getimagesize($source_image);	
			//Appeler 'imagecreatefrom...()pour créer une nouvelle image en fonction de la $info['mime'] de $info['mime']//
			//Ces fonctions créent une nouvelle image à partir du fichier ou de l'URL en la passant en paramètre.//
			if ($image_info['mime'] == 'image/jpeg') {
			$source_image = imagecreatefromjpeg($source_image);
			imagejpeg($source_image, $compress_image, 75);//Exécuter la méthode imagejpeg() pour stocker l’image dans la destination//
			
		} elseif ($image_info['mime'] == 'image/gif') {
			$source_image = imagecreatefromgif($source_image);  
			imagegif($source_image, $compress_image, 75);
		} elseif ($image_info['mime'] == 'image/png') {
			$source_image = imagecreatefrompng($source_image);
			imagepng($source_image, $compress_image, 6);
		}	    
		return $compress_image;
	}
?>
<div>
	<!--Affiche image compressée-->
	<img src=<?php echo $compress_images ?>>
	</div>
	<!--Librairies!-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
