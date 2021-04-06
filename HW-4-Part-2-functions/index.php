<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework-4, p-1</title>
    <style>
        * {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        body {
            padding: 20px;
        }
        h1 {
            padding-bottom: 50px;
        }
        h2 {
            padding-bottom: 20px;
        }
        table {
            width: 300px;
        }
        td {
            width: 30%;
            vertical-align: baseline;
        }
        div {
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px dotted #575555;
        }
        .bold {
            font-weight: 700;
        }
        .condition {
            margin-bottom: 15px;
        }
        .solution {
            margin-bottom: 5px;
            font-weight: 700;
        }

    </style>
</head>
<body>
    <h1>ДЗ №4, часть 2, Функции</h1>
    <h2>Задачи 10.3.-10.5</h2>

    <div>
    <p class="condition"><span class="bold">10.3.</span> 
    Определить значение z = max(a, 2b) * max(2a - b, b), где max (x, y) — максимальное из чисел х, у. Задачу решить двумя способами:<br>
    1) не используя функцию max;<br>
    2) определив и использовав функцию max.<br>

    </p>
    <p class="solution">Решение:</p>
    <?php 

        function findMax($a, $b) {
            $max = $a > $b ? $a : $b;

            return $max;
        }

        function findValueVariantA($a, $b) {
            $x = $a > (2 * $b) ? $a : (2 * $b);
            $y = (2 * $a) - $b > $b ? (2 * $a) - $b : $b;
            $z = $x * $y;

            return $z;
        }

        function findValueVariantB($a, $b) {
            $x = findMax($a, (2 * $b));
            $y = findMax(((2 * $a) - $b), $b);
            $z = $x * $y;

            return $z;
        }

        $findValueZVariantA = findValueVariantA(2, 3);
        $findValueZVariantB = findValueVariantB(2, 3);

    ?>

    <p><?php echo $findValueZVariantA; ?></p>
    <p><?php echo $findValueZVariantB; ?></p>
</div>

    <div>
        <p class="condition"><span class="bold">10.4.</span> 
Определить значение z = min(a, 3b) * min (2a - b, 2b), где min , x y — минимальное из чисел х, у. Задачу решить двумя способами: <br>
1) не используя функцию min;<br>
2) определив и использовав функцию min.<br>

        </p>
        <p class="solution">Решение:</p>
        <?php
            function findMin($a, $b) {
                $min = $a > $b ? $b : $a;
                return $min;
            }

            function findValVariantA($a, $b) {
                $x = $a > (3 * $b) ? (3 * $b) : $a;
                $y = (2 * $a) - $b > $b ? $b : (2 * $a) - $b;
                $z = $x * $y;

                return $z;
            }

            function findValVariantB($a, $b) {
                $x = findMin($a, (3 * $b));
                $y = findMin(((2 * $a) - $b), $b);
                $z = $x * $y;

                return $z;
            }

            $findValZVariantA = findValVariantA(4, 3);
            $findValZVariantB = findValVariantB(4, 3);
        ?>

        <p><?php echo $findValZVariantA; ?></p>
        <p><?php echo $findValZVariantB; ?></p>
    </div>


    <div>
        <p class="condition"><span class="bold">10.5.</span> 
 Определить значение z = x + y
 Значения x и y вводятся с клавиатуры. Задачу решить двумя способами:<br>
1) не используя функцию sign;<br>
2) определив и использовав функцию sign.<br> 
        </p>
        <p class="solution">Решение:</p>
        <?php
            function findZVariantA($x, $y) {
                if($x < 0) {
                    $x = -1;
                }

                if($x == 0) {
                    $x = 0;
                }

                if($x > 0) {
                    $x = 1;
                }

                if($y < 0) {
                    $y = -1;
                }

                if($y == 0) {
                    $y = 0;
                }

                if($y > 0) {
                    $y = 1;
                }

                $z = $x + $y;

                return $z;
            }

            function sign ($num) {
                if($num < 0) {
                    $num = -1;
                }

                if($num == 0) {
                    $num = 0;
                }

                if($num > 0) {
                    $num = 1;
                }

                return $num;
            }

            function findZVariantB($x, $y) {
                $x = sign($x);
                $y = sign($y);
                $z = $x + $y;

                return $z;
            }

            $findZinA = findZVariantA(5, 5);
            $findZinB = findZVariantB(-5, -5);
        ?>

        <p><?php echo $findZinA; ?></p>
        <p><?php echo $findZinB; ?></p>
    </div>
</body>
</html>