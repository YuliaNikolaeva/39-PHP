<?php 
    session_start();
    include_once 'cart.php';
    include_once 'user.php';

    $userCart = new Cart();
    $newUser = new User();
?>