<?php 
include('header.php');
?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mes images en PHP</title>
	<!--Lien css!-->
	<link type="text/css" rel="stylesheet" href="style.css" />
	<!--favicon!-->
	<link rel="shortcut icon" href="src/favicon.ico" type="image/x-icon">
	<!--Lien fonts!-->
	<link href="https://fonts.googleapis.com/css?family=Alice|Pacifico&display=swap" rel="stylesheet"> 
	
</head>
<body>


<?php include('container.php');?>

<link type="text/css" rel="stylesheet" href="style.css" />
<div class="container">
	<h2>Télécharger et compresser des images en PHP</h2>
	<br>
	<br>	
	<form method="post" name="upload_form" id="upload_form" enctype="multipart/form-data" action="upload.php">   
		<label>Choisir des images</label>
		<br>
		<br>
		<input type="file" name="upload_images" id="image_file">
		<div class="file_uploading hidden">
			<label>&nbsp;</label>
			<img src="uploading.gif" alt="Uploading......"/>
		</div>
		<input type="submit" value="Envoyer !">
	</form>
	<div id="uploaded_images_preview"></div>

	<br>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="https://codepen.io/marjorie-ngoupende/full/ExNjoOg">Marjorie's Page</a>		
	</div>
</div>

<?php include('footer.php');?>
<!--Gérer le formulaire de téléchargement d'image "Soumettre" à l'aide de jQuery
Gérer l'envoi de formulaire à l'aide du plugin jQuery Form, inclure les fichiers du plugin.-->
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<script type="text/javascript" src="scripts/upload.js"></script>
</body>
</html>
