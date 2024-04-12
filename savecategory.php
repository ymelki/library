<?php

var_dump($_POST);


// 1. connect to D.B
$pdo = new \PDO('mysql:host=localhost;dbname=library', 'root', 'Decembre2020!');

// recuperer une catégorie du formulaire
$category=$_POST['category'];
// $category=" ; truncate table category";
// 2. query 
// $pdo->exec("INSERT INTO category ( `name`) VALUES ('$category')");
$statement=$pdo->prepare("INSERT INTO category ( `name`) VALUES (:category)");
$statement->bindValue(':category', $category, \PDO::PARAM_STR);
$statement->execute();

header("location:liste_category.php");