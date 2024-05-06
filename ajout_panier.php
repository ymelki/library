<?php
session_start();
// recuperer l'identifiant du livre
$id_book=$_GET['id'];

// stocker dans la session
if (isset($_SESSION['cart']))  {
    
    if (in_array( $id_book ,$_SESSION['cart']  )) {
        echo "test";
        //echo "le produit est déjà dans le panier";
        // recupere le panier existant dans une variable 
        // cart
        // on va aller recuperer la clé correspondant 
        // a cette valeur
        $cart=$_SESSION['cart'];
        // 2 on recuperer la clé correspondant au produit 
        // sur lequel on veut recherche une quantité
        
        $cart[$id_book]=$cart[$id_book]+1;
        // sauvegarde en session
        $_SESSION['cart']=$cart;
    }

    else {
        $_SESSION['cart'][$id_book]=1;
            
    }
}
else {
    $_SESSION['cart'][$id_book]=1;

}
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";


