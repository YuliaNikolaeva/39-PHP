<?php
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
    include_once 'init.php';

    $userCart->delete($_GET['id']);

?>