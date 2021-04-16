<?php
    session_start();
    include 'index.php';

    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = ['sum' => 0, 'items' =>[], 'errors' => []];
    }

    $isValidQuantity = !preg_match('[\D]', $_POST['count']) && $_POST['count'] != 0;
    
    $error = [
        1 => "Выберите товар",
        2 => "Укажите корректное количество",
    ];


    if (($_POST['tokenForm'] != $_SESSION['lastTokenForm']) && $isValidQuantity) {
        $_SESSION['lastTokenForm'] = $_POST['tokenForm'];
         addProduct($_POST['product'], $_POST['count']);
    }

    $countProducts = 0;

    if(count($_SESSION['cart']['items']) > 0) {
        foreach($_SESSION['cart']['items'] as $keypPoduct => $product) {
          $countProducts += $product['quantity'];
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
    <title>HW-5, cart</title>
</head>
<body>
    <section class="shop">
        <a href="./list.php" class="btn-standard">Корзина <span>
            <?php echo $countProducts; ?>
        </span></a>
        <h2 class='head'>Страница выбора товара</h2>
        <form action="" method='POST' class="form-product">
        <input type="hidden" name="tokenForm" value="<?php echo(rand());?>" />
            <select name="product" class="select-product">
                <option value="0">Выберите товар</option>
                    <?php
                        foreach($GLOBALS['products'] as $keypPoduct => $product) {?>
                            <option name="name" value=<?php echo $keypPoduct; ?>><?php echo $product['name']; ?></option>
                    <?php } ?>
            </select>
            <div class="input-box">
                <input name="count" type="text" id="count" class="input-quantity" placeholder="Количество"></input>
                <input type="submit" value="Купить" class="btn-submit btn-buy"></input>
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