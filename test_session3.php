<?php
session_start();
if (isset($_SESSION['tab'])){
    echo "OK";
    // dans le cas ou la session existe deja
    // on supprimer la case sur laquel on cliqué.
    $case=$_GET['id'];
    // recuperer la session dans une variable $tab
    $tab=$_SESSION['tab'];
    // supprimer du tableau de la session cette case
    unset($_SESSION['tab'][$case]);
}
else {
    for ($i=0;$i<10;$i++){ 
        $tab[$i]=$i;
    }
    $_SESSION['tab']=$tab;
}

var_dump($_SESSION);

foreach ($_SESSION['tab'] as $montab ){ 
    ?>
    <a href="test_session3.php?id=<?=$montab?>"> <?=$montab?></a> - 

<?php
}