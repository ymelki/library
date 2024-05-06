<?php
session_start();
// recuperer l'identifiant du livre
$id_book=$_GET['id'];

// stocker dans la session
if (in_array( $id_book ,$_SESSION['cart']  )) {
   echo "le produit est déjà dans le panier";
}
else {
    $_SESSION['cart'][]=$id_book;
}

var_dump($_SESSION);

