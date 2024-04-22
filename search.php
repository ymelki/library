<?php
include "header.php";

// 1. se connecter à la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');



// 2. requete protégé des injections SQL

$statement = $pdo->prepare("select
                            id as id_book,
                            name as book_name, 
                            category_id as book_category 
                            from book 
                where name like(:search)");

$statement->bindValue(':search', "$search%" , \PDO::PARAM_STR);

$statement->execute();

// 3 . Recupere
$results=$statement->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($results);
echo "</pre>";

if (count( $results  ) > 0) {
    echo "Nombre de résultat : ".count($results)." <br>";

    // 3. afficher les données dans un foreach
    foreach ($results as $result){ ?>
        Nom : 
        <a href="detailbook.php?id=<?=$book['id_book']?>">
            <?=$result['book_name']?> 
        </a>
        - Catégorie :  <?=$result['book_category']?> 
        - <a href="edit_book.php?id=<?=$result['id_book']?>">
            Modifier
        </a> -
        <a href="supprimerbook.php?id=<?=$result['id_book']?>"> 
        Supprimer
        </a>
        <br>
<?php
    }
}
else {
    echo "no results";
}
?>