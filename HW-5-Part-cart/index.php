<?php
    session_start();

    // require_once "add.php";
    // require_once "delete.php";
    // require_once "list.php";


    function outputArray($arr) {
        echo "<pre>";
            var_export($arr);
        echo "<pre>";
    }

    $products = [
        2=>['name'=>'товар 1', 'price'=>233],
        7=>['name'=>'товар 2', 'price'=>333],
        43=>['name'=>'товар 3', 'price'=>332],
        50=>['name'=>'товар 4', 'price'=>444],
    ];


    if(isset($_SESSION['cart'])) {
        $_SESSION['cart'] = ['sum' => 0, 'items' =>[]];
    }

     $cart = $_SESSION['cart'];
     $errors = [];

    if (!empty($_POST)) {
        if (isset($_POST['product']) && $_POST['product'] != 0) {
        $product = $_POST['product'];
        } else {
            $errors['product'] = "Выберите товар";
        }
    }

    if (!empty($_POST)) {
        if (isset($_POST['count']) && $_POST['count'] != 0) {
        $count = $_POST['count'];
        } else {
            $errors['count'] = "Укажите количество товара";
        }
    }

    if (empty($errors)) {
        $product = $products[$product]; // продукт из каталога
        $cart['sum'] += $product['price'] * $count;
        $newProduct = [
            'name' => $product['name'],
            'price' => $product['price'],
            'count' => $count, 
        ];

        // array_push($cart['items'], $newProduct);
        $cart['items'][] = $newProduct;

    }

    // print_r($product['count']);
    // outputArray($cart);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="styles-basket.css" rel="stylesheet">
    <title>Shop, p-2</title>
</head>
<body>
    
    <div class="container shop-box">
        <p class="lead">К оплате <?php echo $cart['sum'];?></p>
        <ul class="buy-list">
            <?php if (!empty($cart['items'])) {
                foreach ($cart['items'] as $keyItemInCart => $itemInCart) {?>
                <li class="buy-item">
                    <p class="buy-name"><?php echo $cart['items'][$keyItemInCart]['name']; ?></p>
                    <p class="buy-quantity"><?php echo $cart['items'][$keyItemInCart]['count']; ?> шт.</p>
                    <p class="buy-sign"> x </p>
                    <p class="buy-price"><?php echo $cart['items'][$keyItemInCart]['price']; ?> грн</p>
                </li>
            <?php } 
             } ?>
        </ul>

        <form action="" method='POST'>
            <select select name="product" class="form-select product-select" aria-label="Default select example">
                <option value="0" selected>Выберите товар</option>
                    <?php
                        foreach($products as $keypPoduct => $product) {?>
                            <option name="name" value=<?php echo $keypPoduct; ?>><?php echo $product['name']; ?></option>
                    <?php } ?>
            </select>

            <div class="row g-3 align-items-center box-quantity">
                <div class="col-auto">
                    <label for="count" class="col-form-label">Количество</label>
                </div>
                <div class="col-auto">
                    <input name="count" type="text" id="count" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <p class="text-danger">
                <?php
                    if (isset($errors['product'])) echo $errors['product'] . "<br>";
                    if (isset($errors['count'])) echo $errors['count'];
                ?>
            </p>

            <button type="submit" class="btn btn-outline-info btn-buy">Купить</button>
        </form>
    </div>
</body>
</html>