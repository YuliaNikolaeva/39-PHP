<?php

    class User {
        public $login;
        public $password;
        public $name;
        public $surname;
        public $role;
        public $message;
        public $errors;

        public function getMessage() {
            return $this->message;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Класс Юзер</title>
</head>
<body>
    Страница класса юзера
</body>
</html>