<?php
    include_once 'init.php';
    $userCart->sum();
    $count = $userCart->getCount();

     $isValidQuantity = !preg_match('[\D]', $_POST['count']) && $_POST['count'] != 0;

    if (($_POST['tokenForm'] != $_SESSION['lastTokenForm']) && $isValidQuantity && isset($_POST['product']) && isset($_POST['count'])) {
        $_SESSION['lastTokenForm'] = $_POST['tokenForm'];
         $userCart->add($_POST['product'], $_POST['count']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>HW-6, Магазин</title>
    <style>
        * {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <section class="shop">
        <a href="./list.php" class="btn-standard">Корзина <span>
            <?php echo $count; ?>
        </span></a>
        <h2 class='head'>Страница выбора товара</h2>
        <form action="" method='POST' class="form-product">
        <input type="hidden" name="tokenForm" value="<?php echo(rand());?>" />
            <select name="product" class="select-product" required>
                <option value="0" selected disabled>Выберите товар</option>
                    <?php
                        foreach($GLOBALS['products'] as $keypPoduct => $product) {?>
                            <option name="name" value=<?php echo $keypPoduct; ?>><?php echo $product['name']; ?></option>
                    <?php } ?>
            </select>
            <div class="input-box">
                <input name="count" type="text" id="count" required  class="input-quantity" placeholder="Количество"></input>
                <input type="submit" value="Купить" required class="btn-submit btn-buy"></input>
            </div>
        </form>
        <div class="error-box">
            <?php 
                if(!$isValidQuantity) {
                    echo $error[2] . "<br>";
                }
                if(!$_POST['product']) {
                    echo $error[1];
                }
            ?>
        </div>
    </section>
</body>
</html>