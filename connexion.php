<?php
session_start();
// 1.recuperation des données en POST 
$login=$_POST['login'];
$password=$_POST['password'];

var_dump($_POST);


// 2. on verifie que c'est bien en existant dans la B.D.
// 2.1 connexion en PDO
$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

// 2.2 requete prepare avec un filtre sur le login
$statement = $pdo->prepare("select * from user 
                where login=:loginprotege");

// bindvalue est la fonction permettant de 
// valoriser proprement à la variable id
$statement->bindValue(':loginprotege', $login , \PDO::PARAM_STR);

$statement->execute();

$user=$statement->fetch(PDO::FETCH_ASSOC);

var_dump($user);
// si le user saisie dans le formulaire n'existe pas en B.D. 
if ($user==false){
    // redirection
    $_SESSION['error']="Le user saisie est incorect";
    header("location:index.php");
}
// si non le user saisie existe bien en B.D.
else{
   // on vérifie le mot de passe
   if ($user['password']==$password) {
        $_SESSION['user']=$login;
        header("location:index.php");
   }
   else {
        $_SESSION['error']="Le mot de passe saisie est incorect";
        header("location:index.php");
   }
}
// 3.3 comparaison
// 3.4 Si c'est ok la comparaison => on est connecté en SESSION
//              KO                => redirection vers la page de connexion avec message d'erreur
// 3.5 La gestion des mots de passe crypté en B.D.    


