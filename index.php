<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework-1</title>
    <style>
        table {
            width: 300px;
        }
        td {
            width: 30%;
        }
        div {
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px dotted #575555;
        }
    </style>
</head>
<body>
    <div>
        1.5 Вывести на одной строке числа 1, 13 и 49 с одним пробелом между ними. <br>
        <?php echo 1 . " " . 13 . " " . 49 ?>
    </div>


    <div>
        1.6 Вывести на одной строке числа 7, 15 и 100 с двумя пробелами между ними.
        <br>
        <?php echo 7 . "&nbsp&nbsp" . "15" . "&nbsp&nbsp" . 100; ?>
    </div>


    <div>
        1.7 Составить программу вывода на экран в одну строку трех любых чисел с двумя пробелами между ними.
        <br>
        <?php echo rand(0, 10) . "&nbsp&nbsp" . rand(0, 10) . "&nbsp&nbsp" . rand(0, 10); ?>
    </div>


    <div>
        1.8 Составить программу вывода на экран в одну строку четырех любых чисел с одним пробелом между ними.
        <br>
        <?php echo rand(0, 10) . " " . rand(0, 10) . " " . rand(0, 10) . " " . rand(0, 10); ?>
    </div>


    <div>
        1.9 Вывести на экран числа 50 и 10 одно под другим.
        <br>
        <?php echo 5 . "<br>" . 10; ?>
    </div>


    <div>
        1.10 Вывести на экран числа 5, 10 и 21 одно под другим.
        <br>
        <?php echo 5 . "<br>" . 10 . "<br>" . 21; ?>
    </div>


    <div>
        1.11 Составить программу вывода на экран "столбиком" четырех любых чисел.
        <br>
        <?php 
            $numOne = rand(0, 10);
            $numTwo = rand(11, 20);
            $numThree = rand(21, 30);
            $numFour = rand(31, 40);

            echo $numOne . "<br>" . $numTwo . "<br>" . $numThree . "<br>" . $numFour;
        ?>
    </div>


    <div>
        1.12 Составить программу вывода на экран следующей информации:
        <br>
        <?php 
            $t = rand(0, 10);
            $v = rand(0, 10);
            $x = rand(0, 10);
            $y = rand(0, 10);
        ?>
        <table>
            <tr>
                <td><?php echo 5 . " " . 10 . "<br>" . 7 . " " . "см"; ?></td>
                <td><?php echo 100 . " " . $t . "<br>" . 1949 . " " . $v; ?></td>
                <td><?php echo $x . " " . 25 . "<br>" . $x . " " . $y?></td>
            </tr>
        </table>
    </div>


    <div>
        1.13 Составить программу вывода на экран следующей информации:
        <br>
        <?php 
            $a = rand(1, 10);
            $b = rand(1, 10);
            $x = rand(1, 10);
            $y = rand(1, 10);
        ?>
        <table>
            <tr>
                <td><?php echo 5 . " " . 10 . "<br>" . 7 . " " . "см"; ?></td>
                <td><?php echo $x . " " . 25 . "<br>" . $x . " " . $y?></td>
                <td><?php echo $x . " " . $y . "<br>" . 5 . " " . $y?></td>
            </tr>
        </table>
    </div>


    <div>
    1.15 Получить линейную запись следующих выражений:
    <br>
    <?php
    // заданы статические значения переменных, чтобы не выбивало ошибку
        $x = 5; 
        $b = 10;
        $c = 15;
        $m = 2;
        $n = 3;

        echo "а)" . " " . -1 / ($x * $x) . "<br>";
        echo "б)" . " " . ($a + $b) / 2 . "<br>";
        echo "в)" . " " . ($a / $b) * $c . "<br>";
        echo "г)" . " " . ($a + $b) / 2 . "<br>";
        echo "д)" . " " . 5.45 * (($a + 2 * $b) / (2 - $a)) . "<br>";
        echo "е)" . " " . ((-$b + sqrt(($b * $b) - 4 * ($a - $c))) / 2 * $a) . "<br>";
        echo "ж)" . " " . (-$b + (1 / $a)) / (2 / $c) . "<br>";
        echo "з)" . " " . (1 / 1 + (($a + $b) / 2)) . "<br>";
        echo "и)" . " " . (1 / (1 + (1 / (2 + (1 / 2 + (5 / 3)))))) . "<br>";
        echo "к)" . " " . 2 ** ($m ** $n). "<br>";
    ?>
    </div>


    <div>
    1.16 Перевести из линейной записи в обычную следующие выражения:
    <br>
    <?php
    // заданы статические значения переменных, чтобы не выбивало ошибку
        $x = 5; 
        $b = 10;
        $c = 15;
        $d = 20;
        $s = 22;
        $x = 2;
        define("R", 12);

        echo "а)" . " " . $a / $b / $c . "<br>";
        echo "б)" . " " . $a * $b / $c . "<br>";
        echo "в)" . " " . $a / $b * $c . "<br>";
        echo "г)" . " " . ($a + $b / $c) ."<br>";
        echo "e)" . " " . ($a + $b) / ($b + $c) . "<br>";
        echo "з)" . " " . $a / sin($b) . "<br>";
        echo "и)" . " " . 1 / 2 * $a * $b * sin($x) . "<br>";
        echo "к)" . " " . (2 * $b * $c * cos($a / 2)) / ($b + $c) . "<br>";
        echo "л)" . " " . 4 * R * sin( $a / 2) * sin( $b / 2) * sin( $c / 2). "<br>";
        echo "м)" . " " . ($a * $x + $b) / ($c * $x + $d). "<br>";
        echo "н)" . " " . (2 * sin($a + $b) / 2 * (cos($a -$b)) / 2) . "<br>";
        echo "о)" . " " . $a * $b * $c * 2 * sin(-3 * $a *$b *$s) * $x / 2 . "<br>";
    ?>
    </div>


            1.19 Указать значение величины x после выполнения следующих операторов присваивания:.
        <br>
        <?php 
            $k = 10; // Указана статическая переменная, чтобы не выбивала ошибку

            echo "a) 10" . "<br>" . "б) -32" . "<br>" . "в) 0" . "<br>" . "г) 8";
        ?>
    </div>


    <div>
        1.22 Составить программу:
        <br>
        <?php 
        // Указаны статические переменные, чтобы не выбивала ошибку
        $x = 5;
        $a = 10;

        echo "а)" . " " . $y = (7 * ($x * $x)) - 3 * $x + 6 . "<br>" . "б)" . " " . $x = (12* ($a * $a) + 7 * $a - 16);
        ?>
    </div>


    <div>
        1.60 Составить программу обмена значениями трех переменных величин а, b, c по следующей схеме: <br> 
        а) b присвоить значение c, а присвоить значение b, с присвоить значение а;<br>
        б) b присвоить значение а, с присвоить значение b, а присвоить значение с.
        <br>
        <?php 
        // а)
        $b = $c;
        $a = $b;
        $c = $a;

        // б)
        $b = $c;
        $c = $b;
        $a = $c;
        ?>
    </div>


    <div>
        1.61 Дано вещественное число а. Пользуясь только операцией умножения, получить:.
        <br>
        <?php 
            $a = 2; // выведено для наглядности степени

            $aSquare  = $a * $a;
            $result = ($aSquare * $aSquare);

            echo "а) a4 за две операции." . " " . "Ответ:" . " " . $result . "<br>";
        ?>


        <?php
            $a = 2; // выведено для наглядности степени

            $stepA  = $a * $a; //2
            $stepB  = $stepA * $stepA; //4
            $result = $stepA * $stepB; // 6

            echo "б) a6 за 3 операции." . " " . "Ответ:" . " " . $result . "<br>"; 
        ?>


        <?php
            $a = 2; // выведено для наглядности степени

            $stepA  = $a * $a; //2
            $stepB  = $stepA * $stepA; // 4
            $stepC = $stepA * $stepB; // 6
            $result = $stepC * $a; // 7

            echo "в) a7 за 4 операции." . " " . "Ответ:" . " " . $result . "<br>"; 
        ?>


        <?php
            $a = 2; // выведено для наглядности степени

            $stepA  = $a * $a; //2
            $stepB  = $stepA * $stepA; // 4
            $result = $stepB * $stepB; // 8

            echo "г) a8 за 3 операции." . " " . "Ответ:" . " " . $result . "<br>"; 
        ?>


        <?php
            $a = 2; // выведено для наглядности степени

            $stepA  = $a * $a; //2
            $stepB  = $stepA * $stepA; // 4
            $stepC = $stepB * $stepB; // 8
            $result = $stepC * $a; // 9

            echo "д) a9 за 4 операции." . " " . "Ответ:" . " " . $result . "<br>"; 
        ?>


        <?php
            $a = 2; // выведено для наглядности степени

            $stepA  = $a * $a; // 2
            $stepB  = $stepA * $stepA; // 4
            $stepC = $stepB * $stepB; // 8
            $result = $stepC * $stepA; // 10

            echo "е) a10 за 4 операции." . " " . "Ответ:" . " " . $result . "<br>"; 
        ?>


        <?php
            $a = 2; // выведено для наглядности степени

            $stepA  = $a * $a; // 2
            $stepB  = $stepA * $stepA; // 4
            $stepC = $stepB * $stepB; // 8
            $stepD = $stepC * $stepB; // 12
            $result = $stepD * $a; // 13

            echo "ж) a13 за 5 операции." . " " . "Ответ:" . " " . $result . "<br>"; 
        ?>


        <?php
            $a = 2; // выведено для наглядности степени

            $stepA  = $a * $a; // 2
            $stepB  = $stepA * $a; // 3
            $stepC = $stepB * $stepB; // 6
            $stepD = $stepC * $stepC; //  12
            $result = $stepD * $stepB; // 15

            echo "з) a15 за 5 операции." . " " . "Ответ:" . " " . $result . "<br>"; 
        ?>


        <?php
            $a = 2; // выведено для наглядности степени

            $stepA  = $a * $a; // 2
            $stepB  = $stepA * $a; // 3
            $stepC = $stepB * $stepB; // 6
            $stepD = $stepC * $stepC; //  12
            $stepE = $stepD * $stepB; // 15
            $result = $stepE * $stepC; // 21

            echo "и) a21 за 6 операции." . " " . "Ответ:" . " " . $result . "<br>"; 
        ?>


        
        <?php
            $a = 2; // выведено для наглядности степени

            $stepA  = $a * $a; // 2
            $stepB  = $stepA * $stepA; // 4
            $stepC = $stepB * $stepB; // 8
            $stepD = $stepC * $stepB; //  12
            $stepE = $stepD * $stepD; // 24
            $result = $stepE * $stepB; // 28

            echo "к) a28 за 6 операции." . " " . "Ответ:" . " " . $result . "<br>"; 
        ?>


        <?php
            $a = 2; // выведено для наглядности степени

            $stepA  = $a * $a; // 2
            $stepB  = $stepA * $stepA; // 4
            $stepC = $stepB * $stepB; // 8
            $stepD = $stepC * $stepC; //  16
            $stepE = $stepD * $stepD; // 32
            $result = $stepE * $stepE; // 28

            echo "л) a64 за 6 операции." . " " . "Ответ:" . " " . $result . "<br>"; 
        ?>
    </div>


    <div>
        2.1 Дано расстояние в сантиметрах. Найти число полных метров в нем.
        <br>
        <?php 
            $distanceInCentimeters = rand(0, 1000);
            $result = intval($distanceInCentimeters / 100);
            echo $result . " " . "метров";
        ?>
    </div>


    <div>
        2.2 Дана масса в килограммах. Найти число полных центнеров в ней.
        <br>
        <?php 
            $massInKilograms = rand(0, 1000);
            $result = $massInKilograms / 100;
            echo $result . " " . "центнеров";
        ?>
    </div>


    <div>
        2.3 Дана масса в килограммах. Найти число полных тонн в ней.
        <br>
        <?php 
            $massInKilograms = rand(0, 10000);
            $result = $massInKilograms / 1000;
            echo $result . " " . "тонн";
        ?>
    </div>


    <div>
        2.4 Дано расстояние в метрах. Найти число полных километров в нем.
        <br>
        <?php 
            $distanceInMeters = rand(0, 10000);
            $result = $distanceInMeters / 1000;
            echo $result . " " . "километров";
        ?>
    </div>


    <div>
        2.5 С некоторого момента прошло 234 дня. Сколько полных недель прошло за этот период?
        <br>
        <?php 
            $periodInDays = 237;
            $result = intval($periodInDays / 7);
            echo $result . " " . "недель";
        ?>
    </div>


    <div>
        2.6 С начала суток прошло n секунд. Определить:<br>
        а) сколько полных часов прошло с начала суток;<br> 
        б) сколько полных минут прошло с начала очередного часа;<br>
        в) сколько полных секунд прошло с начала очередной минуты.<br>
        <br>
        <?php 
            $numberOfSeconds = rand(4000, 10000);

            $hours = intval($numberOfSeconds / 3600);
            $numberOfMinutes   = intval($numberOfSeconds / 60);
            $restOfSeconds = ($numberOfSeconds / 60 - $numberOfMinutes) * 60;

            echo 
            "а)" . " " . $hours . "<br>" . 
            "б)" . " " . $numberOfMinutes . "<br>" .
            "в)" . " " . $restOfSeconds . "<br>";

        ?>
    </div>


    <div>
        4.1 Рассчитать значение у при заданном значении х:
        <br>
        <?php 
            $x = rand(-10, 10);

            if ($x > 0) {
                echo "x > 0, результат:" . " " . sin(deg2rad($x)) ** 2;
            } else {
                echo "x < 0, результат:" . " " .  (1 - 2 * sin(deg2rad($x * $x)));
            }
        ?>
    </div>


    <div>
        4.2 Рассчитать значение у при заданном значении х:
        <br>
        <?php 
            $x = rand(-10, 10);

            if ($x > 0) {
                echo "x > 0, результат:" . " " . sin(deg2rad($x * $x));
            } else {
                echo "x < 0, результат:" . " " .  (1 + 2 * sin(deg2rad($x * $x) ** 3));
            }
        ?>
    </div>


    <div>
        4.3 Определить, в какую из областей — I или II (рис. 4.1) — попадает точка с заданными координатами. Для простоты принять, что точка не попадает на границу областей.:
        <br>
        <?php 
            $x = rand(-10 , 10);

            if ($x > 4) {
                echo "x = $x, Область 2";
            } else {
                echo "x = $x, Область 1" ;
            }
        ?>
    </div>


    <div>
        4.4 Определить, в какую из областей — I или II (рис. 4.2) — попадает точка с заданными координатами. Для простоты принять, что точка не попадает на границу областей.
        <br>
        <?php 
            $y = rand(-10 , 10);

            if ($y > 3) {
                echo "y = $y, Область 1";
            } else {
                echo "y = $y, Область 2" ;
            }
        ?>
    </div>


    <div>
        4.5 Для функций, заданных графически (рис. 4.3), определить значение у при заданном значении х.
        <br>
        <?php 
            $x = rand(-10, 10);

            if ($x <= 2) {
                $y = $x;
                echo "a) x = $x, y = $y" . "<br>";
            } else {
                $y = 2;
                echo "a) x = $x, y = $y" . "<br>";
            }
        ?>

        <?php 
            $x = rand(-10, 10);

            if ($x <= 3 && $x >= 0) {
                $y = $x;
                echo "б) x = $x, y = $y ";
            } elseif($x > 3) {
                $y = 3;
                echo "б) x = $x, y = $y";
            } else {
                $y = -$x;
                echo "б) x = $x, y = $y";
            }
        ?>
    </div>


    <div>
        4.6 Даны два различных вещественных числа. Определить:<br>
        а) какое из них больше;<br>
        б) какое из них меньше.<br>
        <br>
        <?php 
            $a = rand(0, 10);
            $b = rand(0, 10);

            echo "a)" . " " . max($a, $b) . "<br>";
            echo "б)" . " " . min($a, $b);
        ?>
    </div>


    <div>
        4.7 Определить максимальное и минимальное значения из двух различных вещественных чисел.
        <br>
        <?php 
            $a = rand(0, 10);
            $b = rand(0, 10);

            echo "Максимальное:" . " " . max($a, $b) . "<br>";
            echo "Минимальное:" . " " . min($a, $b);
        ?>
    </div>


    <div>
        4.8 Известны два расстояния: одно в километрах, другое — в футах 1 фут 0,305 м. Какое из расстояний меньше?
        <br>
        <?php 
        $distanceInKilometers = rand(0, 10000);
        $distanceInFeet  = rand(0, 10000);
        $distanceFromKilometersToFeet = $distanceInFeet / 3280.84;

            echo min($distanceInKilometers, $distanceFromKilometersToFeet);
        ?>
    </div>


    <div>
        4.20 Если целое число m делится нацело на целое число n, то вывести на экран частное от деления, в противном случае вывести сообщение "m на n нацело не делится"..
        <br>
        <?php 
            $m = rand(0, 50);
            $n = rand(0, 50);

            if ($m % $n === 0) {
                echo $m / $n;
            } else {
                echo "$m на $n не делится";
            }
        ?>
    </div>


    <div>
        4.21 Определить, является ли число a делителем числа b?
        <br>
        <?php 
            $a = rand(0, 50);
            $b= rand(0, 50);

            if ($b % $a === 0) {
                echo "Число $a является делителем числа $b";
            } else {
                echo "Число $a не является делителем числа $b";
            }
        ?>
    </div>


    <div>
        4.22 Дано натуральное число. Определить: <br>
        а) является ли оно четным; <br>
        б) оканчивается ли оно цифрой 7. <br>
        <br>
        <?php 
            $num = rand(0, 100);

            if ($num % 2 === 0) {
                echo "Число $num четное" . "<br>";
            } elseif (strval(substr($num, -1)) === "7") {
                echo "Число $num оканчивается на 7";
            } else {
                echo "Число $num нечетное, не оканчивается на 7";
            }
        ?>
    </div>


    <div>
        4.23 Дано двузначное число. Определить: <br>
        а) какая из его цифр больше: первая или вторая; <br>
        б) одинаковы ли его цифры. <br>
        <br>
        <?php 
            $num = rand(10, 99);
            $firstNum = intval($num[0]);
            $secondNum = intval($num[1]);

            if ($firstNum > $secondNum) {
                echo "Первая цифра больше";
            } elseif ($firstNum < $secondNum) {
                echo "Вторая цифра больше";
            } else {
                echo "Обе цифры равны";
            }
        ?>
    </div>


    <div>
        4.24 Дано двузначное число. Определить, равен ли квадрат этого числа учетверенной сумме кубов его цифр. Например, для числа 48 ответ положительный, для числа 52 — отрицательный.
        <br>
        <?php 
            $num = "48";
            $squareFirstNum = intval($num[0]) ** 3;
            $squareSecondNum = intval($num[1]) ** 3;
            $squareOfNum =  intval($num) * intval($num);
            $result = 4 * ($squareFirstNum + $squareSecondNum);

            if($result === $squareOfNum) {
                echo "Квадрат числа $squareOfNum равен учетверенной сумме кубов его цифр $result";
            } else {
                echo "Квадрат числа $squareOfNum НЕ равен учетверенной сумме кубов его цифр $result";
            }
        ?>
    </div>


    <div>
        4.25 СДано двузначное число. Определить: <br>
            а) является ли сумма его цифр двузначным числом;<br>
            б) больше ли числа а сумма его цифр.<br>
        <br>
        <?php
            $a = rand(0, 500);
            $num = rand(0, 500);

            $isTwoDigitNumber = strlen(intval($num)) === 2;
            $firstNumStr = strval($num)[0];
            $secondNumStr = strval($num)[1];
            $sumOfNumbers = intval($firstNumStr) + intval($secondNumStr);

            if ($isTwoDigitNumber) {
                echo "Число $num является двухзначным числом" . "<br>";
                if ($sumOfNumbers > $a) {
                    echo "Сумма цифр $sumOfNumbers больше числа а $a" . "<br>";
                } else {
                    echo "Сумма цифр $sumOfNumbers меньше числа а $a" . "<br>";
                }
            } else {
                echo "Число $num НЕ является двухзначным числом";
            }
        ?>
    </div>
 

    <div>
        4.26 Дано двузначное число. Определить: <br>
        а) кратна ли трем сумма его цифр; <br>
        б) кратна ли сумма его цифр числу а. <br>
        <br>
        <?php 
            $a = rand(0, 100);
            $num = rand(0, 100);

            $isTwoDigitNumber = strlen(intval($num)) === 2;
            $firstNumStr = strval($num)[0];
            $secondNumStr = strval($num)[1];
            $sumOfNumbers = intval($firstNumStr) + intval($secondNumStr);

            if ($isTwoDigitNumber) {
                if ($sumOfNumbers % 3 === 0) {
                    echo "Сумма цифр $num кратна трем";
                } elseif ($sumOfNumbers % $a === 0) {
                    echo "Сумма цифр $num кратна $a";
                } else {
                    echo "Сумма цифр $num НЕ кратна $a и НЕ кратна трем";
                }

            } else {
                echo "Число $num НЕ является двухзначным числом";
            }
        ?>
    </div>


    <div>
        4.37 Проверить, принадлежит ли число, введенное с клавиатуры интервалу (–5, 3).
        <br>
        <?php 
            $num = -12;
             if ($num >= -5 && $num <= 3) {
                 echo "Число $num находится в диапазоне от –5 до 3";
             } else {
                  echo "Число $num находится вне диапазона от –5 до 3";
             }
        ?>
    </div>


    <div>
        4.38 Определить, попадает ли точка с заданными координатами в область I (рис. 4.4). Для простоты принять, что точка не попадает на границу этой области.
        <br>
        <?php 
            $x = rand(-10, 10);
            $y = rand(-10, 10);

            if ($x >= 3 && $y >= 2) {
                echo "a) x = $x, y = $y. Точка в пределах области I" . "<br>";
            } else {
                echo "a) x = $x, y = $y. Точка вне области I" . "<br>";
            }
        ?>

        <?php 
            $x = rand(-10, 10);
            $y = rand(-10, 10);

            if ($x <= -2 && $y <= -4) {
                echo "б) x = $x, y = $y. Точка в пределах области I";
            } else {
                echo "б) x = $x, y = $y. Точка вне области I";
            }
        ?>
    </div>
 

    <div>
        4.39 Определить, попадает ли точка с заданными координатами в одну из областей I или III (рис. 4.5). Для простоты принять, что точка не попадает на границу этих областей.
        <br>
        <?php 
            $x = rand(-10, 10);
            $y = rand(-10, 10);

            if (($x <= -1 && $y === 0) || ($x > 5 && $y === 0)) {
                echo "Точка с заданными координатами попадает в одну из областей I или III";
            } else {
                echo "Точка с заданными координатами НЕ попадает ни в одну из областей I или III";
            }
        ?>
    </div>


    <div>
        4.40 Дано вещественное число x. Вычислить f x( )
        <br>
        <?php 
            $x = rand(-10, 10);
            if (($x >= -2.4) || ($x <= 5.7)) {
                $f = $x ** 2;
            } else {
                $f = 4;
            }
            echo $f;
        ?>
    </div>


    <div>
        4.41 Дано вещественное число x. Вычислить f x( )
        <br>
        <?php 
            $x = rand(-10, 10);
            if (($x >= -0.2) || ($x <= 0.9)) {
                $f = sin($x);
            } else {
                $f = 1;
            }
            echo $f;
        ?>
    </div>


    <div>
        4.42 Даны три вещественных числа a, b, c. Проверить: <br>
        а) выполняется ли неравенство a < b < c; <br>
        б) выполняется ли неравенство b > a > c. <br>
        <br>
        <?php 
            $a = 1;
            $b = 2;
            $c = 3;

            if (($b > $a) && ($b < $c)) {
                echo "а) a = $a, b = $b, c = $c. Равенство выполнено" . "<br>";
            } else {
                echo "а) a = $a, b = $b, c = $c. Равенство не выполнено" . "<br>";
            }

            if (($b > $a) && ($a > $c)) {
                echo "б) a = $a, b = $b, c = $c. Равенство выполнено" . "<br>";
            } else {
                echo "б) a = $a, b = $b, c = $c. Равенство не выполнено" . "<br>";
            }

        ?>
    </div>


    <div>
        4.43 Определить, является ли число а делителем числа b или, наоборот, число b делителем числа а. Ответом должны служить сообщения "Да, одно из чисел является делителем другого" или "Нет, ни одно из чисел не является делителем другого".
        <br>
        <?php 
            $a = rand(0, 50);
            $b= rand(0, 50);
           
            if ((is_int($b / $a)) || is_int($a / $b)) {
                echo "a = $a, b = $b. Да, одно из чисел является делителем другого";
            } else {
                 echo "a = $a, b = $b. Нет, ни одно из чисел не является делителем другого";
            }
        ?>
    </div>


    <div>
        4.44 Определить, верно ли, что при делении неотрицательного целого числа a на положительное число b получается остаток, равный одному из двух заданных чисел c или d.
        <br>
        <?php
            $a = rand(0, 20);
            $b = rand(0, 20);
            $c = rand(0, 20);
            $d = rand(0, 20);

            if ($a % $b === $c || $a % $b === $d) {
                echo "a = $a, b = $b, c = $c, d = $d. Остаток от деления равен одному из чисел";
            }else {
                echo "a = $a, b = $b, c = $c, d = $d. Остаток от деления НЕ равен ни одному из чисел";
            }
        ?>
    </div>


        <div>
        4.45 Даны три вещественных числа a, b, c. Определить, имеется ли среди них хотя бы одна пара равных между собой чисел.
        <br>
            <?php
                $a = rand(0, 10);
                $b = rand(0, 10);
                $c = rand(0, 10);

                $numArr = array($a, $b, $c);
                $result = array_unique($numArr);


                if (count($numArr) > count($result)) {
                    echo "Были совпадения чисел";
                } else {
                    echo "Нет совпадений";
                }
            ?>
    </div>


    <div>
        4.46 Определить, является ли треугольник со сторонами a, b, c равносторонним.
        <br>
        <?php 
            $a = rand(1, 3);
            $b = rand(1, 3);
            $c = rand(1, 3);

            if (($a === $b && $c) && ($b === $c)) {
                echo "Треугольник равносторонний";
            } else {
                 echo "Треугольник не равносторонний";
            }
        ?>
    </div>


    <div>
        4.47 Определить, является ли треугольник со сторонами a, b, c равнобедренным.
        <br>
        <?php 
            $a = rand(1, 3);
            $b = rand(1, 3);
            $c = rand(1, 3);

            $numArr = array($a, $b, $c);
            $uniqueNum = array_unique($numArr);

            if (count($uniqueNum) === 2) {
                echo "Треугольник является равнобедренным";
            } else {
                echo "Треугольник НЕ является равнобедренным";
            }

        ?>
    </div>


    <div>
        4.48 Известен рост трех человек. Определить, одинаков ли их рост.
        <br>
            <?php
                $a = rand(170, 173);
                $b = rand(170, 173);
                $c = rand(170, 173);
                $d = rand(170, 173);

                $numArr = array($a, $b, $c, $d);
                $uniqueHeight = array_unique($numArr);
                $result = count($numArr) - count($uniqueHeight);


                if ($result > 0) {
                    $result = $result + 1;
                    echo "a = $a, b = $b, c = $c, d = $d. В группе $result людей с одинаковым ростом";
                } else {
                    echo "a = $a, b = $b, c = $c, d = $d. В группе нет людей с одинаковым ростом";
                }
            ?>
    </div>
</body>
</html>