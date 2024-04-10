<?php

/**
 * Supprimer la catégorie en question
 *  1. connecter à la B.D. 2. requete suppression
 * rediriger vers la page des catégories
 *  3. rediriger
 */
$id=$_GET['id'];
 // 1 . Connecte à la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=library', 'root', 'Decembre2020!');

// 2 requete de suppression
$pdo->exec("DELETE FROM category WHERE idcategory=$id");

// 3 redirection
header("location:liste_category.php");