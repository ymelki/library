<?php
include "header.php";
$id=$_GET['id'];

// 1 . Connecte à la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=library', 'root', 'Decembre2020!');

// 2 . Requete 
// prepare est une fonction permettant de faire
// la requete en protegeant les données sensibles
// (id)
$statement = $pdo->prepare("select * from category 
                where idcategory=:idprotege");

// bindvalue est la fonction permettant de 
// valoriser proprement à la variable id
$statement->bindValue(':idprotege', $id , \PDO::PARAM_INT);

$statement->execute();

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