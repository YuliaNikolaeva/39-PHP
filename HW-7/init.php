<?php 
    session_start();
    include_once 'base.php';

    include_once 'users/user.php';
    include_once 'users/client.php';
    include_once 'users/manager.php';
    include_once 'users/admin.php';

    include_once 'languages/ru.php';
    include_once 'languages/ua.php';
    include_once 'languages/en.php';
    include_once 'languages/it.php';


    $base = $users;

    function op(&$arr) {
        echo "<pre>";
            var_export($arr);
        echo "<pre>";
    }
?>