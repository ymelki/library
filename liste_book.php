<?php
include "header.php";

$books=getBooks();
echo "<pre>";
// var_dump($books);
echo "</pre>";


?>

<div class="card-group">

<?php
foreach ($books as $book){ ?>
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title"> Nom : 
    <a href="detailbook.php?id=<?=$book['id_book']?>">
        <?=$book['book_name']?> 
    </a></h5>
      <p class="card-text">
      - Catégorie :  <?=$book['book_category']?> 
      - <a href="edit_book.php?id=<?=$book['id_book']?>">
        Modifier
    </a> -
    <a href="supprimerbook.php?id=<?=$book['id_book']?>"> 
       Supprimer
    </a>
      </p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">
        <a href="ajout_panier.php?id=<?=$book['id_book']?>">
            Ajouter au panier
        </a>
        
    </small>
    </div>
  </div>
<?php
}
?>
</div>
<a href="add_book.php" class="btn btn-success">Add book</a>




</body>
</html>