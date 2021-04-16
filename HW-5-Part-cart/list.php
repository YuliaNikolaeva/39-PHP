<?php
    session_start();
    include 'index.php';
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
            <?php if(empty($_SESSION['cart']['items'])) : ?>
                <div class="empty-cart">Корзина пуста</div>
            <?php endif; ?>

            <?php if(!empty($_SESSION['cart']['items'])) : ?>
                <div class="cart-total">Всего к оплате: <span class="total"><?php echo $_SESSION['cart']['sum'];?></span> грн</div>
                <ul class="cart-list">
                    <li class="cart-item-head mb-sm">
                        <div class="cart-item-name-head opacity-half item-head">Название</div>
                        <div class="cart-item-cost-head opacity-half item-head">Цена</div>
                        <div class="cart-item-quantity-head opacity-half">Кол-во, шт.</div>
                        <div class="cart-item-total-head opacity-half item-head">Сумма</div>
                    </li>

                    <?php foreach($_SESSION['cart']['items'] as $keyProduct => $product) {?>
                    <li class="cart-item">
                        <div class="cart-item-name"><?php echo $product['name']; ?></div>
                        <div class="cart-item-cost"><?php echo $product['price']; ?> грн</div>

                        <div class="quantity-box">
                            <a href="/changeByStep.php?id=<?php echo $product['id']?>&step=-1" class="step minus">-</a>

                            <div class="cart-item-quantity"><?php echo $product['quantity']; ?></div>

                            <a href="/changeByStep.php?id=<?php echo $product['id']?>&step=1" class="step plus">+</a>
                        </div>

                        <div class="cart-item-total"><?php echo $product['quantity'] * $product['price'] ?> грн</div>
                        <a href="/delete.php?id=<?php echo $product['id']; ?>">Удалить</a>
                    </li>
                    <?php } ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
</body>
</html>