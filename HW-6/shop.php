<?php
    include 'index.php';
    $userCart->add($_POST['product'], $_POST['count']);
    $userCart->addToExemplar($_POST['product'], $_POST['count']);
   
    echo "ЭТО СЕССИЯ" . "--------------------------------" . "<br>";
    echo "<pre>";
        var_export($_SESSION['cart']);
    echo "<pre>";


    echo "ЭТО В ЭКЗЕМПЛЯРЕ" . "--------------------------------"  . "<br>";
    echo "<pre>";
        var_export($userCart);
    echo "<pre>";


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
        <!-- <a href="./list.php" class="btn-standard">Корзина <span> -->
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
                <input name="count" type="text" id="count" required  class="input-quantity" placeholder="Количество"></input>
                <input type="submit" value="Купить" required class="btn-submit btn-buy"></input>
            </div>
        </form>
        <div class="error-box">
            <?php 
                if(!$isValidQuantity && $isSendedForm) {
                    echo $error[2] . "<br>";
                }
                if(!$_POST['product'] && $isSendedForm) {
                    echo $error[1];
                }
            ?>
        </div>
    </section>
</body>
</html>