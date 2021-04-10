<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework-4, p-3</title>
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
    <h1>ДЗ №4, часть 3, Корзина​</h1>

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


        function addProduct($cart, $id, $quantity) {
            $product = $GLOBALS['products'][$id];
            if(!is_array($cart)) {
                return $cart['errors']['$cart'] = 'Ошибка получения массива корзины';
            }
            if(!isset($product) || !is_int($quantity)) {
                return $cart['errors']['addProduct'] = 'Ошибка добавления товара в корзину';
            }

            if(isset($cart['items'][$id])) {
                $cart['items'][$id]['quantity'] += $quantity;
                return totalSum($cart);
            }

            $cart['items'][$id] = [
                'id'=> $id,
                'name' => $product['name'],
                'price'=> $product['price'],
                'quantity' => $quantity,
            ];

            return totalSum($cart);
        }


        function deleteProduct($cart, $id) {
            if(isset($cart['items'][$id])) {
                unset($cart['items'][$id]);
            } else {
                return $cart['errors']['deleteProduct'] = 'Ошибка удаления товара из корзины';
            }
            return totalSum($cart);
        }


        function changeQuantityProduct($cart, $id, $quantity) {
            if(!is_array($cart)) {
                return $cart['errors']['$changeQuantityProduct'] = 'Ошибка получения массива корзины';
            }

            if(!isset($cart['items'][$id]) || !is_int($quantity)) {
                return $cart['errors']['changeQuantityProduct'] = 'Ошибка изменения количества в корзине';
            }

            $cart['items'][$id]['quantity'] = $quantity;

            return totalSum($cart);
        }


        function changeQuantityByStep($cart, $id, $step) {
            if(!is_array($cart) || !isset($cart['items'][$id])) {
                return $cart['errors']['$changeQuantityByStep'] = 'Ошибка получения массива корзины в пошаговом изменении';
            }
            
            if(isset($cart['items'][$id])) {
                $cart['items'][$id]['quantity'] += $step;
            }

            if ($cart['items'][$id]['quantity'] == 0) {
                return deleteProduct($cart, $id);
            }

            return totalSum($cart);
        }


        function totalSum($cart) {
            if(!is_array($cart)) {
                return $cart['errors']['$totalSum'] = 'Ошибка получения массива корзины';
            }
            $quantity = 0;
            $sum = 0;
            $haveDiscount = false;

            foreach ($cart['items'] as $productId => $product) {
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
                return $cart['errors']['quantityInTotalSum'] = 'Некорректное значение колисества';
            }
            $cart['sum'] = $sum;
            $haveDiscount = false;

            return $cart;
        }

        // Вызовы функции для проверки

        $add = addProduct($cart, 7, 1); // дбавление товара
        $add2 = addProduct($add, 43, 1); // дбавление товара
        $del = deleteProduct($add2, 2); // удаление товар с id-2
        $changeStep = changeQuantityByStep($add2, 43, -1); // изменение на одиин шаг количества товара. Будет передаваться 1 или -1
        $change = changeQuantityProduct($add2, 7, 555); //изменено кол-во товара
        outputArray($changeStep); // вывод массива после всех децствий

    ?>
</body>
</html>