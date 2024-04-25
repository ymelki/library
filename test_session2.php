<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nombre">
        <input type="submit">

    </form>

    <?php
    session_start();
    // 1 recuperer les données
    $nombre=$_POST['nombre'];

    // recuperer le tableau deja existant potentiellement
    // je verifie si la variable session tab existe deja. si c'est le cas
    // on a tableau a faire evoluer
    if (isset($_SESSION['tab'])){
        // on recupere le tableau
        $tab=$_SESSION['tab'];
        // on insere la nouvelle valeur
        $tab[]=$_POST['nombre'];
        // on met a jour notre session. tab va contenir un nouveau tableau
        $_SESSION['tab']=$tab;
    }
    else {
        $tab[0]=$_POST['nombre'];
        $_SESSION['tab']=$tab;
    }
    

    echo $nombre;
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

?>

    <hr>
    Les nombres renseignés :
    <?php
    foreach($_SESSION['tab'] as $tab1){
        echo $tab1 . " - ";
    }
    ?>
        <hr>

</body>
</html>