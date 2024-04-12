<?php
include "header.php";

// 1 . Connecte à la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=library', 'root', 'Decembre2020!');

// 2 . Requete 
$statement=$pdo->query("select * from category");


// 3 . Recupere
$category=$statement->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($category);
echo "</pre>";
?>
<h1>Liste des catégories</h1>
<hr>
<?php
foreach ($category as $onecategorie){ ?>
    Nom : 
    <a href="detailcategorie.php?id=<?=$onecategorie['idcategory']?>">
        <?=$onecategorie['name']?> 
    </a>
    - Modifier -
    <a href="supprimercategorie.php?id=<?=$onecategorie['idcategory']?>"> 
       Supprimer
    </a>
    <br>
<?php
}
?>

<a href="create_category.php" class="btn btn-success">
    Add book
</a>
</body>
</html>