<?php
include "header.php";

$category=getTable("category");
echo "<pre>";
var_dump($category);
echo "</pre>";
?>
<h1>Liste des catégories</h1>
<hr>
<?php

foreach ($category as $onecategorie){ ?>
    Nom : 
    <a href="detailcategorie.php?id=<?=$onecategorie['id']?>">
        <?=$onecategorie['name']?> 
    </a>
    - Modifier -
    <a href="supprimercategorie.php?id=<?=$onecategorie['id']?>"> 
       Supprimer
    </a>
    <br>
<?php
}
?>

<a href="create_category.php" class="btn btn-success">
    Add category
</a>
</body>
</html>