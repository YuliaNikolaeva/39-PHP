<?php 

    include_once($_SERVER['DOCUMENT_ROOT'].'/init.php');

    if (($_POST['tokenFormLogin'] != $_SESSION['lasttokenFormLogin']) && isset($_POST['login']) && isset($_POST['pass'])) {
        $newUser;

        foreach($base as $key => $user) {
            if ($user['login'] == $_POST['login'] && $user['password'] == $_POST['pass']) {
                switch($user['role']) {
                    case "admin":
                        $newUser = new Admin($key);
                        break;
                    case "manager":
                        $newUser = new Manager($key);
                        break;
                    case "client":
                       $newUser = new Client($key);
                       op($newUser);
                       break;
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>HW-6, Главная</title>
    <style>
        * {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <section class="login">
        <?php if (isset($user)): ?>
            <!-- <div class="hello">
                <p>Здравствуйте, <?php echo $user['role'] . " " . $user['name'] . " " . $user['surname']?></p>
                <p>Вы можете на сайте изменять, удалять и создавать клиентов</p>
            </div> -->
        <?php else: ?> 
            <h2 class='head'>Страница авторизации</h2>
            <form action="" method='POST' class="form-login">
                <div class="input-box">
                    <input type="hidden" name="tokenFormLogin" value="<?php echo(rand());?>" />
                    <input name="login" type="text" required  class="input-email" placeholder="Login"></input>
                    <input name="pass" type="text" required  class="input-pass" placeholder="Пароль"></input>
                    <input type="submit" value="Войти" required class="btn-submit btn-buy"></input>
                </div>
            </form>
        <?php endif; ?>
        <!-- <?php if (isset($errors)): ?>
            <div class="error">Неверный логин или пароль</div>
        <?php endif; ?> -->
    </section>
    
</body>
</html>