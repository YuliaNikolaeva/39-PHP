<?php
    session_start();
    include 'index.php';
    ($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Покупки</title>
</head>
<body>
        <section class="cart">
        <a href="./add.php" class="btn-standard">Магазин</a>
        <h3 class='lead'>Корзина</h3>
        <div class="cart-box">
            <div class="cart-total">Всего к оплате: <span class="total"><?php echo $_SESSION['cart']['sum'];?></span></div>
            <div class="cart-list-head"></div>
            <ul class="cart-list">
                <li class="cart-item-head mb-sm">
                    <div class="cart-item-name-head opacity-half item-head">Название</div>
                    <div class="cart-item-cost-head opacity-half item-head">Цена, грн</div>
                    <div class="cart-item-quantity-head opacity-half">Кол-во, шт.</div>
                    <div class="cart-item-total-head opacity-half item-head">Сумма</div>
                </li>
                <?php foreach($_SESSION['cart']['items'] as $keyProduct => $product) {?>
                <li class="cart-item">
                    <div class="cart-item-name"><?php echo $product['name']; ?></div>
                    <div class="cart-item-cost"><?php echo $product['price']; ?></div>
                    <div class="cart-item-quantity"><?php echo $product['quantity']; ?></div>
                    <div class="cart-item-total"><?php echo $product['quantity'] * $product['price'] ?></div>
                    <a href="/delete.php?id=<?php echo $product['id']; ?>">Удалить</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </section>
</body>
</html>