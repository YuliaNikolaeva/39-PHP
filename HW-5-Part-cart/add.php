<?php
    session_start();
    include 'index.php';

    if(isset($_SESSION['cart'])) {
        $_SESSION['cart'] = ['sum' => 0, 'items' =>[], 'errors' => []];
    }

    addProduct($_SESSION['cart'], $_POST['product'], $_POST['count']);
    outputArray($_SESSION['cart']);

    outputArray(addProduct($_SESSION['cart'], $_POST['product'], $_POST['count']));

    
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
        <h2 class='head'>Страница выбора товара</h2>
        <form action="" method='POST' class="form-product">
            <select name="product" class="select-product">
                <option value="0">Выберите товар</option>
                    <?php
                        foreach($GLOBALS['products'] as $keypPoduct => $product) {?>
                            <option name="name" value=<?php echo $keypPoduct; ?>><?php echo $product['name']; ?></option>
                    <?php } ?>
            </select>
            <div class="input-box">
                <label for="count" class="label"></label>
                <input name="count" type="text" id="count" class="input-quantity" placeholder="Количество"></input>
                <input type="submit" value="Купить" class="btn-submit btn-buy"></input>
            </div>
        </form>
    </section>

    <!-- <section class="cart">
        <h3 class='lead'>Корзина</h3>
        <div class="cart-box">
            <div class="cart-total">Всего к оплате: <span class="total">22</span></div>
            <div class="cart-list-head"></div>
            <ul class="cart-list">
                <li class="cart-item-head mb-sm">
                    <div class="cart-item-name-head opacity-half">Название</div>
                    <div class="cart-item-cost-head opacity-half">Цена, грн</div>
                    <div class="cart-item-quantity-head opacity-half">Кол-во, шт.</div>
                    <div class="cart-item-total-head opacity-half">400, грн</div>
                </li>
                <li class="cart-item">
                    <div class="cart-item-name">Товар 1</div>
                    <div class="cart-item-cost">200</div>
                    <div class="cart-item-quantity">2</div>
                    <div class="cart-item-total">400</div>
                </li>
                <li class="cart-item">
                    <div class="cart-item-name">Товар 1</div>
                    <div class="cart-item-cost">200</div>
                    <div class="cart-item-quantity">2</div>
                    <div class="cart-item-total">400</div>
                </li>
            </ul>
        </div>

    </section> -->
</body>
</html>