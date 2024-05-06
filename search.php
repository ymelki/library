<?php
include "header.php";
$search=$_GET['search'];

// book
?>
<h1>Resultat books</h1>
<?php
$columns=[
    "id"=>"id_book",
    "name"=>"book_name",
    "category_id"=>"book_category"
];
$filtre="where name like(:search)";
// search book
search($search,"book",$columns, $filtre);
// search category
?>
<h1>Resultat categories</h1>
<?php
$columns=[
    "id"=>"id_category",
    "name"=>"category_name",
];
$filtre="where name like(:search)";
search($search,"category",$columns, $filtre);

?>