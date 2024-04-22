<?php
include "header.php";
$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

$statement=$pdo->query("select id, name from category");


// 3 . Recupere
$categories=$statement->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($categories);
echo "</pre>";


?>
<h1>Add book</h1>
<form method="POST" action="save_book.php">
    <input type="text" name="name_book">
    
    <select name="category">
        <option value="">--Please choose an option--</option>
     <?php // boucler pour afficher l'ensemble des catégories
     foreach ($categories as $category){ ?>
           <option value=<?=$category['id'] ?>><?=$category['name'] ?></option>
  
    <?php
    }
    ?>

    </select>
    

    <input type="submit">
</form>