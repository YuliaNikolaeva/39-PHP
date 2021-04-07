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
        $cart = [
            'sum'=> 0, // Здесь было 700. Поменяла на 0

            'items'=> [
                [
                    'id'=>34,
                    'quantity'=>2,
                    'price'=>200
                ],
                [   'id'=>2,
                    'quantity'=>5,
                    'price'=>100
                ]
            ]
        ];


        function outputArray($arr) {
            echo "<pre>";
                var_export($arr);
            echo "<pre>";
        }

        //  Принимает массив корзины и массив новый товар

        function addGoodToShoppingBasket($arr, $newGood){
            array_push($arr["items"], $newGood);
            return totalSum($arr);
        }


        //  Принимает массив корзины и id товара для удаления

        function deleteGoodFromShoppingBasket($arr, $GoodId) {
            foreach ($arr['items'] as $keyGoods => $goods) {
                $GoodIdInShoppingBasket = $arr['items'][$keyGoods]['id'];

                if ($GoodIdInShoppingBasket == $GoodId) {
                    unset($arr['items'][$keyGoods]);
                }
            }
            return totalSum($arr);
        }


        // Принимает массив корзины, id товара для изменений, количество
        // Количество можт быть 1 или -1. Подразумевается, что добавить или удалить товар юзер может кнопками плюс и минус рядом с количеством

        function changeQuantityOfGoodItem($arr, $GoodId, $quantity) {
            foreach ($arr['items'] as $keyGoods => $goods) {
                $GoodIdInShoppingBasket = $arr['items'][$keyGoods]['id'];
                $quantityOfItemInShoppingBasket = $arr['items'][$keyGoods]['quantity'];

                if ($GoodIdInShoppingBasket == $GoodId) {
                    $arr['items'][$keyGoods]['quantity'] += $quantity;
                }
            }
            return totalSum($arr);
        }


        // Принимает массив корзины,
        // Скидка расчитывается так:
        // Если товаров больше, от 10 шт, то скидка 10%.
        // Если общая стоимость товаров от 2000, то скидка 7%.
        // Если общая стоимость товаров от 2000 и их количество от 10, то скидка 7%

        function totalSum($arr) {
            $totalQuantityOfGoods = 0;
            $totalSumOfGoods = 0;
            $haveDiscount = false;

            foreach ($arr['items'] as $keyGoods => $goods) {
                $totalQuantityOfGoods += $goods['quantity'];
                $totalSumForOneItemGood = $goods['quantity'] * $goods['price'];
                $totalSumOfGoods += $totalSumForOneItemGood;
            }

            if ($totalQuantityOfGoods >= 10 && $totalSumOfGoods >= 2000) {
                $totalSumOfGoods = $totalSumOfGoods * 0.93;
                $haveDiscount = true;
            }

            if ($totalQuantityOfGoods >= 10 && !$haveDiscount) {
                $totalSumOfGoods = $totalSumOfGoods * 0.9;
                $haveDiscount = true;
            }

            if ($totalSumOfGoods >= 2000 && !$haveDiscount ) {
                $totalSumOfGoods = $totalSumOfGoods * 0.93;
                $haveDiscount = true;
            }

            $arr['sum'] = $totalSumOfGoods;
            $haveDiscount = false;

            return $arr;
        }


        // Товары и вызовы функции для проверки

        $newItem = ['id'=>10,'quantity'=>1,'price'=>500]; // товар с небольшими количесвом и ценой
        $newItem2 = ['id'=>15,'quantity'=>10,'price'=> 10]; // товар  с большим количеством
        $newItem3 = ['id'=>20,'quantity'=>1,'price'=>2000]; // товар с большой ценой
        $newItem4 = ['id'=>25,'quantity'=>10,'price'=>2000]; // товар с большими кол-вом и ценой


        $addGood = addGoodToShoppingBasket($cart, $newItem4); // Добавлен новый товар
        $changeQuantity1 = changeQuantityOfGoodItem($addGood, 2, 1); // увеличено кол-во товара на 1 для товара с id-2
        $deleteGood = deleteGoodFromShoppingBasket($changeQuantity1, 2); // удален товар с id-2
        outputArray($deleteGood); // Вывод корзины
    ?>
</body>
</html>