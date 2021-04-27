<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/init.php');

    class Client extends User {
            public function __construct($id) {
            $users = $GLOBALS['base'];
            $user = $users[$id];

            $translates = $GLOBALS['ru'];

            $this->login = $user['login'];
            $this->password = $user['password'];
            $this->name = $user['name'];
            $this->surname = $user['surname'];
            $this->role = $user['role'];
            $this->message = $translates['hello'] . " " . $translates['client'] . " " . $this->name . " " . $this->surname .  "." . "<br>" . $translates['have access client'];
        }

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Класс клиент</title>
</head>
<body>
    <div>Это класс клиента</div>
</body>
</html>