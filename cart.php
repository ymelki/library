<?php
session_start();
// voir le panier
var_dump($_SESSION);

// enrichir les données pour avoir un panier qui affiche
// le nom du livre


?>
<table border="1">
    <tr>
        <td>ID_PRODUIT</td>
        <td>book_name</td>
        <td>book_category</td>
        <td>price</td>
        <td>Quantité</td>
        <td>Total</td>
        <td>Supprimer du panier</td>
    </tr>
    <?php
    $totalPrice=0;
    foreach ($_SESSION['cart'] as $key=>$row){
        ?>
        <tr>
            <td>
                <?=$key?>

                <?php


    // 1 . Connecte à la B.D.
    $pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

    $id_book=$key;
    $query="SELECT b.id as id_book,
                   b.name as book_name,
                   c.name as book_category,
                   b.price as price
    FROM dblibrary.book as b 
    inner join dblibrary.category as c
    on b.category_id=c.id where b.id=$id_book  ";

    // 2 . Requete 

    $statement=$pdo->query($query);


    // 3 . Recupere
    $book=$statement->fetch(PDO::FETCH_ASSOC);
    $total=$book['price']*$row;



                ?>
                <td><?=$book['book_name']?></td>
                <td><?=$book['book_category']?></td>
                <td><?=$book['price']?></td>
                <td> <a href="reduire_quantite.php?id=<?=$key?>">-</a>
                      <?=$row?>
                      <a href="augmenter_quantite.php?id=<?=$key?>">+</a>
                </td>
                <td>
                    <?=$total?>
                </td>
                <td><a href="supprimer_panier.php?id=<?=$key?>">
                    Supprimer du panier
                    </a>
                </td>
            </td>
        </tr>
        <?php
        $totalPrice=$totalPrice+$total;
    }
    ?>

</table>
Total : <?=$totalPrice?>
<br>
<a href="viderpanier.php">Vider le panier</a>