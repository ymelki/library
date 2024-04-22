<?php

$id=$_GET['id'];
var_dump($_POST);

$name=$_POST['name_book'];
$category=$_POST['category'];



        
$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

$statement=$pdo->prepare("update book 
set name=:name,
category_id=:category
where id=:id");
$statement->bindValue(":id",$id,PDO::PARAM_INT);
$statement->bindValue(":category",$category,PDO::PARAM_STR);
$statement->bindValue(":name",$name,PDO::PARAM_STR);
$statement->execute();
// redirect to detail book

