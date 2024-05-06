<?php
session_start();
// recuperer la clé du panier (book id)
$bookId=$_GET['id'];
// Recuperer le panier
$cart=$_SESSION['cart'];
// ajouter un a la valeur de la clé du panier

$cart[$bookId]=$cart[$bookId]+1;
// sauvegarde dans la session
$_SESSION['cart']=$cart;

header('location:cart.php');