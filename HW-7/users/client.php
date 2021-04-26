<?php
    include_once '../init.php';

    op($base);
  
    class Client extends User {
            public function __construct($id) {
            $user = $base['id'];
            $this->login = $user['login'];
            $this->password = $user['password'];
            $this->name = $user['name'];
            $this->surname = $user['surname'];
            $this->role = $user['role'];
            $this->errors = null;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Это класс клиента</div>
</body>
</html>