<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class User {

            public $items;

            public function __construct() {
                $this->items = [];
            }

            public function add($name, $age) {
                $this->items[$name] = ['name' =>$name, 'age' =>$age];
            }
        }

        $newUser = new User();
        $newUser->add($_POST['name'], $_POST['age']); 

        echo "<pre>";
            var_export($newUser);
        echo "<pre>";
    ?>

    <div>
        <form action="" method="POST">
        <p>Ваше имя: <input type="text" name="name" /></p>
        <p>Ваш возраст: <input type="text" name="age" /></p>
        <p><input type="submit" /></p>
        </form>
    </div>
</body>
</html>