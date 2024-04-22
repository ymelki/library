<?php
include "header.php";


// 1 . Connecte à la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=library', 'root', 'Decembre2020!');

$query="SELECT b.id as id_book, b.name as book_name, c.name as book_category
FROM dblibrary.book as b 
inner join dblibrary.category as c
on b.category_id=c.id";


// 2 . Requete 

$statement=$pdo->query($query);


// 3 . Recupere
$books=$statement->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($books);
echo "</pre>";


?>
<?php
foreach ($books as $book){ ?>
    Nom : 
    <a href="detailbook.php?id=<?=$book['id_book']?>">
        <?=$book['book_name']?> 
    </a>
    - Catégorie :  <?=$book['book_category']?> 
    - <a href="edit_book.php?id=<?=$book['id_book']?>">
        Modifier
    </a> -
    <a href="supprimerbook.php?id=<?=$book['id_book']?>"> 
       Supprimer
    </a>
    <br>
<?php
}
?>
<a href="add_book.php" class="btn btn-success">Add book</a>
</body>
</html>