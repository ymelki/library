<?php
session_start();
unset($_SESSION['cart']);
header('location:liste_book.php');