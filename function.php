<?php

function connectBd(){      
    // 1. se connecter à la B.D.
    $pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');
    return $pdo;
}

function getBooks(){
        
    // 1 . Connecte à la B.D.
    $pdo = connectBd();

    $query="SELECT b.id as id_book, b.name as book_name, c.name as book_category
    FROM dblibrary.book as b 
    inner join dblibrary.category as c
    on b.category_id=c.id";

    // 2 . Requete 

    $statement=$pdo->query($query);


    // 3 . Recupere
    $books=$statement->fetchAll(PDO::FETCH_ASSOC);
    return $books;
}
function getTable($table){
     // 1 . Connecte à la B.D.
    $pdo = connectBd();

    // 2 . Requete 
    $statement=$pdo->query("select * from $table");

    // 3 . Recupere
    $results=$statement->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function search($search,
                $table,
                $columns,
                $filtre
                ){
        
    // 1. se connecter à la B.D.
    $pdo = connectBd();

    $infoColumn="";
    // $key contient le nom des colonnes
    // $values contient les alias
    foreach ($columns as $key => $value){
        $infoColumn=$infoColumn." ".$key." as ".$value.","; 
    }

    // 2. requete protégé des injections SQL
    $statement = $pdo->prepare("select
                                $infoColumn 1                              
                                from  $table 
                    $filtre");

    $statement->bindValue(':search', "$search%" , \PDO::PARAM_STR);

    $statement->execute();

    // 3 . Recupere
    $results=$statement->fetchAll(PDO::FETCH_ASSOC);


    if (count( $results  ) > 0) {
        echo "Nombre de résultat : ".count($results)." <br>";

        // 3. afficher les données dans un foreach
        foreach ($results as $result){ 
            foreach ($result as $key => $value){ ?>
                <br> : <?=$key?> <?=$value?>
            <?php
            }
            ?>
            <hr>
    <?php
        }
    }
    else {
        echo "no results";
    }

}