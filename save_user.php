<?php

// recuperation des variables
$login=$_POST['login'];
$password=$_POST['password'];

// 1 connect à la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

var_dump($_POST);

$statement=$pdo->prepare("insert into user (login, password)
                        VALUES (:login, :password)");

$statement->bindValue(":login", $login, PDO::PARAM_STR);
$statement->bindValue(":password", $password, PDO::PARAM_STR);

$statement->execute();
// 3 redirection
header("location:index.php");
