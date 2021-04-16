<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework-5, p</title>
    <style>
        * {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        body {
            padding: 20px
        }
    </style>
</head>
<body>

    <?php
        $products = [
            2=>['name'=>'товар 1', 'price'=>100],
            7=>['name'=>'товар 2', 'price'=>200],
            43=>['name'=>'товар 3', 'price'=>300],
            50=>['name'=>'товар 4', 'price'=>400],
        ];


        $cart = [
            'sum'=> 0,
            'items'=> [
                2=> ['id'=> 2,'name'=>'товар 1', 'price'=>100, 'quantity' => 1,],
            ],
            'errors' => [],
        ];


        function outputArray($arr) {
            echo "<pre>";
                var_export($arr);
            echo "<pre>";
        }


        function addProduct($id, $quantity) {
            $product = $GLOBALS['products'][$id];
            if(!isset($product)) {
                return  $_SESSION['cart']['errors']['addProduct'] = 'Ошибка добавления товара в корзину';
            }

            if(isset($_SESSION['cart']['items'][$id])) {
                 $_SESSION['cart']['items'][$id]['quantity'] += $quantity;
                return totalSum();
            }

            if(isset($_SESSION['cart']['items'][$id])) {
                 $_SESSION['cart']['items'][$id]['quantity'] += $quantity;
                return totalSum();
            }


             $_SESSION['cart']['items'][$id] = [
                'id'=> $id,
                'name' => $product['name'],
                'price'=> $product['price'],
                'quantity' => $quantity,
            ];

            return totalSum();
        }


        function deleteProduct($id) {
            if(isset($_SESSION['cart']['items'][$id])) {
                unset($_SESSION['cart']['items'][$id]);
            } else {
                return $_SESSION['cart']['errors']['deleteProduct'] = 'Ошибка удаления товара из корзины';
            }
            return totalSum();
        }


        function changeQuantityProduct($id, $quantity) {
            if(!isset($_SESSION['cart']['items'][$id]) || !is_int($quantity)) {
                return $_SESSION['cart']['errors']['changeQuantityProduct'] = 'Ошибка изменения количества в корзине';
            }

            $_SESSION['cart']['items'][$id]['quantity'] = $quantity;

            return totalSum();
        }


        function changeQuantityByStep($id, $step) {
            if(isset($_SESSION['cart']['items'][$id])) {
                $_SESSION['cart']['items'][$id]['quantity'] += $step;
            }

            if ($_SESSION['cart']['items'][$id]['quantity'] == 0) {
                return deleteProduct($id);
            }

            return totalSum();
        }


        function totalSum() {
            $quantity = 0;
            $sum = 0;
            $haveDiscount = false;

            foreach ($_SESSION['cart']['items'] as $productId => $product) {
                $quantity += $product['quantity'];
                $sumOneItemGood = $product['quantity'] * $product['price'];
                $sum += $sumOneItemGood;
            }

            if ($quantity >= 10 && $sum >= 2000) {
                $sum = $sum * 0.93;
                $haveDiscount = true;
            }

            if ($quantity >= 10 && !$haveDiscount) {
                $sum = $sum * 0.9;
                $haveDiscount = true;
            }

            if ($sum >= 2000 && !$haveDiscount ) {
                $sum = $sum * 0.93;
                $haveDiscount = true;
            }

            if(!is_int($quantity)) {
                return $_SESSION['cart']['errors']['quantityInTotalSum'] = 'Некорректное значение колисества';
            }
            $_SESSION['cart']['sum'] = $sum;
            $haveDiscount = false;

            return $_SESSION['cart'];
        }
    ?>