<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>Document</title>
</head>

<body>

<?php
$search="";
if (isset($_GET['search'])){
    $search=$_GET['search'];
}
?>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="liste_book.php">
                        <i class="fa-solid fa-book"></i>
                        Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="liste_author.php">
                        <i class="fa-solid fa-pen-to-square"></i>    
                        Author</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="liste_category.php">
                        <i class="fa-solid fa-list"></i>    
                        Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">
                        <i class="fa-solid fa-user-plus"></i>
                        Register</a>
                    </li>
                </ul>
                
                <form class="d-flex" role="search" action="search.php" method="GET">
                    <input class="form-control me-2" name="search"
                    value="<?=$search?>"
                    type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

               

            </div>
        </div>
    </nav>


    <div class="container">

