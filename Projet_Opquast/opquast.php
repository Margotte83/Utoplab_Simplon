<!DOCTYPE html>
<?php
include "glossaire.php";
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!--CSS-->
<link rel="stylesheet" href="style.css">

    <title>Opquast exercice</title>
  </head>
  <body>

    <h1 class="h1">GLOSSAIRE OPQUAST</h1>
<br>
	<a href=""><input type="button" class="btn btn-warning" name="newtip" value="Cliquez ici"></a>
	<br><br>

	<?php
	//var_dump($glossaire);
	//echo count($glossaire);

	//$index = rand(0, count($glossaire) -1); //
	$ranIndx = random_int(0, count($glossaire));
	
    echo "<h3>"."<b>". $glossaire[$ranIndx]['title'] ."</b>". "<br><br><br><br>". $glossaire [$ranIndx]['description'];"</h3>" 
   
    //echo $glossaire[$index]['description']; // autre façon d'écrire ce code//
    
	?>
	 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

