<?php
include "header.php";
$id=$_GET['id'];

// 1 . Connecte à la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=library', 'root', 'Decembre2020!');

// 2 . Requete 
$statement=$pdo->query("select * from category where idcategory=$id");

// 3 . Recupere
$category=$statement->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($category);
echo "</pre>";

?>
Vous avez cliqué sur la catégorie n °
<?=$id?>
 Nom : 
<?=$category['name']?>
</body>
</html>