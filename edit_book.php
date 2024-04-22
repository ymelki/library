<?php
include "header.php";

$id_book=$_GET['id'];

$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

$statement=$pdo->prepare("select name, category_id from book where id=:id");
$statement->bindValue(":id",$id_book,PDO::PARAM_INT);
$statement->execute();
$book=$statement->fetch();

echo "<pre>";
var_dump($book);
echo "</pre>";


$statement=$pdo->query("select id, name from category");


// 3 . Recupere
$categories=$statement->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($categories);
echo "</pre>";


?>
<h1>Edit book</h1>
<form method="POST" action="save_edit_book.php?id=<?=$id_book?>">
    <input type="text" name="name_book" value="<?=$book['name']?>">
    
    <select name="category">
        <option value="">--Please choose an option--</option>
     <?php // boucler pour afficher l'ensemble des catégories
     foreach ($categories as $category){ ?>
           <option value=<?=$category['id'] ?>
           
           
           <?php
           if ($category['id']==$book['category_id']){
            echo " selected ";
           }

           ?>
           ><?=$category['name'] ?></option>
  
    <?php
    }
    ?>

    </select>
    

    <input type="submit">
</form>