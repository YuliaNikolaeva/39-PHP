<?php
    include_once 'init.php';
    $items = $userCart->getItems();
    $userCart->sum();
    $sum = $userCart->getSum();
    $count = $userCart->getCount();
    $userCart->discount();
    $discount = ($userCart->getDiscount()) * 100;

    $tableHead = [
        "Название",
        "Цена",
        "Количество",
        "Всего",
    ];
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>HW-6, Корзина</title>
    <style>
        * {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <section class="cart">
        <a href="./add.php" class="btn-standard">Магазин</a>
        <h3 class='lead'>Корзина</h3>
        <?php if(empty($items)) {?>
            <div class="empty-cart">Корзина пуста</div>
        <?php } ?>
        <?php if(!empty($items)) {?></php>
            <div class="sum">Общая стоимость: <?php echo $sum; ?> грн</div>
            <?php if($discount > 0) { ?>
                <div class="discount-info">Общая стоимость указана с учетом скидки</div>
                <div class="count">Скидка: <?php echo $discount; ?>%</div>
                <?php } ?>
            <div class="quantity">Общее количество: <?php echo $count; ?> шт</div>
            <div class="cart-box">
            <ul class="product-list">
                <li class="product-item">
                    <?php 
                        foreach($tableHead as $key => $value) {?>
                            <div class="product-cell head"><?php echo $value; ?></div>
                    <?php } ?>
                </li>
                <?php
                    foreach($items as $keyProduct => $product) {?>
                    <li class="product-item">
                        <div class="product-cell"><?php echo $product['name']; ?></div>
                        <div class="product-cell"><?php echo $product['price']; ?> грн</div>
                        <div class="quantity-box">
                            <a href="/changeByStep.php?id=<?php echo $product['id']?>&step=-1" class="step minus">-</a>

                            <div class="cart-item-quantity"><?php echo $product['quantity']; ?></div>

                            <a href="/changeByStep.php?id=<?php echo $product['id']?>&step=1" class="step plus">+</a>
                        </div>
                        <div class="product-cell total-quantity"><?php echo $product['quantity'] * $product['price']; ?></div>
                        <a href="/delete.php?id=<?php echo $product['id']; ?>">Удалить</a>
                    </li>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>
    </section>
</body>
</html>