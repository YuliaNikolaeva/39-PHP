<?php
    session_start();
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
    include 'index.php';


    deleteProduct($_GET['id']);

?>