<?php ob_start();
$titre ="Catalogue de cours gratuits";
?>

<!-- Connexion à la BDD -->
<?php
$dsn = 'mysql:dbname=margotte_catalogue;host=mysql-margotte.alwaysdata.net';
$user = 'margotte';
$password = 'Shalom1303';

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);

try {
    $pdo = new PDO($dsn, $user, $password,$options);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

$req = "SELECT * FROM cours";
$stmt = $pdo->prepare($req);
$stmt->execute();
$cours = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="row no-gutters">
    <?php foreach($cours as $c) : ?>
        <div class="col-4">
            <div class="card m-2" style="width: 18rem;" >
                <img src="source/<?= $c['image'] ?>" class="card-img-top" alt="..."style="width: 50%;
    margin-left: auto;
    margin-right: auto;" >
                <div class="card-body">
                    <h5 class="card-title"><?= $c['libelle'] ?></h5>
                    <p class="card-text"><?= $c['description'] ?></p>
                    <a href="construct.php">Lire ici</a>
                    <br>
                    <?php 
                    $req2 = "SELECT libelle FROM type WHERE idType = :idType";
                    $stmt = $pdo->prepare($req2);
                    $stmt->bindValue(":idType", $c['idType'],PDO::PARAM_INT);
                    $stmt->execute();
                    $typeTxt = $stmt->fetch(PDO::FETCH_ASSOC);
                    
                    ?>
                    <span class='badge badge-primary'><?= $typeTxt['libelle'] ?></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
/************************
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "template.php";
?>
<?php
/* PERMET d INCLURE LE FOOTER DU SITE*/
include_once('footer.php')
?>
