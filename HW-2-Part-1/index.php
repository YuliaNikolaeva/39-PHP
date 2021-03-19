<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework-2, part 1</title>
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
    <h1>ДЗ №2, часть первая<br>Задачи: стр. 48-50, 5.48, 6.88-6.90</h1>
    <div>
        <p class="condition"><span class="bold">5.1.</span> 
         Напечатать ряд чисел 20 в виде: 20 20 20 20 20 20 20 20 20 20</p>
        <p class="solution">Решение:</p>

        <?php
            for ($i = 0; $i < 10; $i++) {
                 echo 20 . " ";
            }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.2.</span> 
        Составить программу вывода любого числа любое заданное число раз в виде аналогичном показанному в предыдущей задаче.
        </p>
        <p class="solution">Решение:</p>

	<?php
        $num = rand(1, 10);

        for ($quantity = 0; $quantity < rand(1, 10); $quantity++) {
            echo $num . " ";
        }
    ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.3.</span> 
        Напечатать "столбиком":<br>
        а) все целые числа от 20 до 35;<br>
        б) квадраты всех целых чисел от 10 до b (значение b вводится с клавиатуры; 
        b 10);<br>
        в) третьи степени всех целых чисел от a до 50 (значение a вводится с клавиатуры; a 50);<br>
        г) все целые числа от a до b (значения a и b вводятся с клавиатуры; b a).<br>
        </p>
        <p class="solution">Решение:</p>

        <table>
            <tr>
                <td>
                    <?php
                        echo "a)" . " <br>" ;
                        for ($num = 20; $num <= 35; $num++) {
                            echo $num . "<br>";
                        }
                    ?>
                </td>
                <td>
                    <?php
                        echo "б)" . " <br>" ;
                        for ($num = 10; $num <= rand(10, 20); $num++) {
                            echo $num . "<br>";
                        }
                    ?>
                </td>
                <td>
                    <?php
                        echo "в)" . " <br>" ;
                        for ($num = rand(0, 50); $num <= 50; $num++) {
                            echo $num . "<br>";
                        }
                    ?>
                </td>
                <td>
                    <?php
                        echo "г)" . " <br>" ;
                        $firstNum = rand(0, 50);
                        $secondNum = rand(0, 50);
                        if ($firstNum > $secondNum) {
                            echo "Операция невозможна: значение старта больше значения финиша";
                        } else {
                            for ($i = $firstNum; $i <= $secondNum; $i++) {
                            echo $i . "<br>";
                            }
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>


    <div>
        <p class="condition"><span class="bold">5.4.</span> 
        Напечатать числа следующим образом:
        </p>
        <p class="solution">Решение:</p>

        <table>
            <tr>
                <td>
                    <?php
                        echo "а)" . " <br>" ; 
                        for ($num = 20; $num <= 25; $num++) {

                            echo $num + 0.4 . "<br>";
                        }
                    ?>
                </td>

                <td>
                    <?php
                        echo "б)" . " <br>" ; 
                        for ($num = 25; $num <= 35; $num++) {
                            echo $num . " " . ($num + 0.5) . " " . ($num - 1 + 0.8) . "<br>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <div>
        <p class="condition"><span class="bold">5.5.</span> 
        Напечатать числа следующим образом:
        </p>
        <p class="solution">Решение:</p>
            <table>
                <tr>
                    <td>
                        <?php
                            echo "а)" . " <br>" ; 
                            for ($num = 21; $num >= 10; $num--) {
                                echo $num . " " . ($num - 2 + 0.2) . "<br>";
                            }
                        ?>
                    </td>

                    <td>
                        <?php
                            echo "б)" . " <br>" ; 
                            for ($num = 45; $num >= 25; $num--) {
                                echo $num . " " . ($num - 1 + 0.5) . " " . ($num - 1 + 0.2) . "<br>";
                            }
                        ?>
                    </td>
                </tr>
            </table>
    </div>


    <div>
        <p class="condition"><span class="bold">5.6.</span> 
        Напечатать числа следующим образом:
        </p>
        <p class="solution">Решение:</p>
        <table>
            <tr>
                <td>
                    <?php
                        echo "а)" . " <br>" ; 
                        for ($num = 21; $num <= 35; $num++) {
                            echo $num . " " . ($num - 1 + 0.4) . "<br>";
                        }
                    ?>
                </td>

                <td>
                    <?php
                        echo "б)" . " <br>" ; 
                        for ($num = 16; $num <= 24; $num++) {
                            echo $num . " " . ($num - 1 + 0.5) . " " . ($num + 0.8) . "<br>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>


    <div>
        <p class="condition"><span class="bold">5.7.</span> 
        Одна штука некоторого товара стоит 20,4 руб. Напечатать таблицу стоимости 2, 3, ..., 20 штук этого товара.
        </p>
        <p class="solution">Решение:</p>
        <table>
            <tr>
                <td>
                    <?php
                        $price = 20.4;
                        for ($num = 1; $num <= 20; $num++) {
                            echo "$num шт.:" . " " . ($num * $price) . " " . "руб."  . "<br>";
                        } 

                    ?>
                </td>
            </tr>
        </table>
    </div>


    <div>
        <p class="condition"><span class="bold">5.8.</span> 
        Напечатать таблицу соответствия между весом в фунтах и весом в килограммах для значений 1, 2, ..., 10 фунтов (1 фунт = 453 г).
        </p>
        <p class="solution">Решение:</p>

        <?php 
            $kilogramsInPound = 0.453;
            for ($pound = 1; $pound <= 10; $pound++) {
                echo "$pound фунт =" . " " . ($pound * $kilogramsInPound) . " " . "кг" . "<br>";
            }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.9.</span> 
        Напечатать таблицу перевода расстояний в дюймах в сантиметры для значений 10, 11, ..., 22 дюйма (1 дюйм = 25,4 мм).
        </p>
        <p class="solution">Решение:</p>

        <?php 
        $inchInCentimeter = 25.4 / 10;
            for ($i = 10; $i <= 22; $i++) {
                echo "$i дюйм =" . " " . ($i * $inchInCentimeter) . " " . "см" . "<br>";
            }
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">5.10.</span> 
        Напечатать таблицу перевода расстояний в дюймах в сантиметры для значений 10, 11, ..., 22 дюйма (1 дюйм = 25,4 мм).
        </p>
        <p class="solution">Решение:</p>

        <?php 
        $hryvniaInDollar  = 27.68;
            for ($i = 1; $i <= 20; $i++) {
                echo "$i грн =" . " " . ($i * $hryvniaInDollar) . " " . "долл." . "<br>";
            }
        ?>
    </div>

    <div>Пункты 5.11 и 5.12 не сделаны по субъективным причинам.</div>

    <div>
        <p class="condition"><span class="bold">5.13.</span> 
        Напечатать таблицу умножения на 7:
        </p>
        <p class="solution">Решение:</p>
        <?php 
            for ($i = 1; $i <= 9; $i++) {
                echo "$i x 7 =" . $i * 7 . "<br>";
            }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.14.</span> 
        Напечатать таблицу умножения на 9:
        </p>
        <p class="solution">Решение:</p>
        <?php 
            for ($i = 1; $i <= 9; $i++) {
                echo "$i x 9 =" . $i * 9 . "<br>";
            }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.15.</span> 
        Напечатать таблицу умножения на число n (значение n вводится с клавиатуры; 1 n 9).
        </p>
        <p class="solution">Решение:</p>
        <?php 
            $num = rand(1, 9);
            for ($i = 1; $i <= 9; $i++) {
                echo "$i x $num =" . $i * $num . "<br>";
            }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.16.</span> 
         Напечатать "столбиком" значения sin 2 , sin 3 , ..., sin 20 .
        </p>
        <p class="solution">Решение:</p>
        <?php 
            for ($i = 1; $i <= 20; $i++) {
                echo "sin $i = " . sin($i) . "<br>";
            }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.17.</span> 
        Рассчитать значения y для значений х, равных 4, 5, ..., 28:
        
        </p>
        <p class="solution">Решение:</p>
        <?php 
            for ($x = 4; $x <= 28; $x++) {
                $t = $x + 2;
                $y = 2 * ($t * $t) + 5.5 * $t - 2 . "<br>";
                echo $y;
            }
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">5.18.</span> 
        Рассчитать значения z для значений a, равных 2, 3, ..., 17:
        
        </p>
        <p class="solution">Решение:</p>
        <?php 
            for ($a = 2; $a <= 17; $a++) {
                $t = 4 * $a;
                $z = 3.5 * ($t * $t) - 7 * $t + 16;
                echo $z . "<br>";
            }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.19.</span> 
         Вывести "столбиком" значения sin 0,1, sin 0,2 , ..., sin1,1.
        </p>
        <p class="solution">Решение:</p>
        <?php 
        for ($i = 0.1; $i <= 1.1; $i = $i + 0.1) {
            echo sin($i) . "<br>";
        }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.20.</span> 
         Вывести "столбиком" значения &#8730;0,1 , &#8730;0, 2 , ..., &#8730;0,9 .
        </p>
        <p class="solution">Решение:</p>
        <?php 
        for ($i = 0.1; $i <= 0.9; $i = $i + 0.9) {
            echo sqrt($i) . "<br>";
        }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.21.</span> 
          Напечатать таблицу стоимости 50, 100, 150, ..., 1000 г сыра (стоимость 1 кг сыра вводится с клавиатуры).

        </p>
        <p class="solution">Решение:</p>
        <?php
            $pricePerKilogram  = rand(100, 400);
            for ($i = 50; $i <= 1000; $i = $i + 50) {
                echo "Стоимость $i грамм сыра по цене $pricePerKilogram составляет: " . ($i * ($pricePerKilogram / 1000)) . "<br>";
            }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.22.</span> 
          Напечатать таблицу стоимости 100, 200, 300, ..., 2000 г конфет (стоимость 1 кг конфет вводится с клавиатуры).

        </p>
        <p class="solution">Решение:</p>
        <?php
            $pricePerKilogram  = rand(100, 400);
            for ($i =  100; $i <= 2000; $i = $i + 100) {
                echo "Стоимость $i грамм конфет по цене $pricePerKilogram составляет: " . ($i * ($pricePerKilogram / 1000)) . "<br>";
            }
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">5.23.</span> 
          Вывести "столбиком" следующие числа: 2,1, 2,2, 2,3, ..., 2,8.
        </p>
        <p class="solution">Решение:</p>
        <?php 
        for ($i = 2.1; $i <= 2.9; $i = $i + 0.1) {
            echo $i . "<br>";
        }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.24.</span> 
          Вывести "столбиком" следующие числа: 3,2, 3,2, 3,3, ..., 3,9.
        </p>
        <p class="solution">Решение:</p>
        <?php 
        for ($i = 3.2; $i <= 4; $i = $i + 0.1) {
            echo $i . "<br>";
        }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.25.</span> 
           Вывести "столбиком" следующие числа: 2,2, 2,4, 2,6, ..., 4,2.
        </p>
        <p class="solution">Решение:</p>
        <?php 
        for ($i = 2.2; $i <= 4.4; $i = $i + 0.2) {
            echo $i . "<br>";
        }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.26.</span> 
           Вывести "столбиком" следующие числа: 4,4, 4,6, 4,8, ..., 6,4
        </p>
        <p class="solution">Решение:</p>
        <?php 
        for ($i = 4.4; $i <= 6.4; $i = $i + 0.2) {
            echo $i . "<br>";
        }
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">5.27.</span> 
        Найти:<br>
        а) сумму всех целых чисел от 100 до 500;<br>
        б) сумму всех целых чисел от a до 500 (значение a вводится с клавиатуры; 
        a &le; 500);<br>
        в) сумму всех целых чисел от –10 до b (значение b вводится с клавиатуры; 
        b &ge; –10);<br>
        г)  сумму всех целых чисел от a до b (значения a и b вводятся с клавиатуры; 
b &ge; a).<br>

        </p>
        <p class="solution">Решение:</p>
        <?php 
            for ($i = 100; $i <= 500; $i++) {
                $sum = $sum + $i;
            }
            echo "a) $sum ". "<br>";
        ?>

        <?php 
            $a =  rand(1, 5);
            $sum = 0;

            for ($i = $a; $i <= 5; $i++) {
                $sum = $sum + $i;
            }
            echo "б) $sum ". "<br>";
        ?>

        <?php 
            $b =  rand(-10, 10);
            $sum = 0;

            for ($i = -10; $i <= $b; $i++) {
                $sum = $sum + $i;
            }
            echo "в) $sum ". "<br>";
        ?>

        <?php 
            $a =  rand(0, 10);
            $b =  rand(0, 10);
            $sum = 0;

            if ($a > $b) {
                echo "г) Операция невозможна: значение старта больше значения финиша";
            } else {
                for ($i = $a; $i <= $b; $i++) {
                    $sum = $sum + $i;
                }
                echo "г) $sum ". "<br>";
            }
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">5.28.</span>
        Найти: <br> 
        а) произведение всех целых чисел от 8 до 15;<br>
        б) произведение всех целых чисел от a до 20 (значение a вводится с клавиатуры; 1 a 20);<br>
        в) произведение всех целых чисел от 1 до b (значение b вводится с клавиатуры; 1 b 20);<br>
        г) произведение всех целых чисел от a до b (значения a и b вводятся 
        с клавиатуры; b a).<br>

        </p>
        <p class="solution">Решение:</p>

        <?php 
            $sum = 8;
            for ($i = $sum + 1; $i <= 15; $i++) {
                $sum = $sum * $i;
            }
            echo "а) $sum " . "<br>";
        ?>

        <?php 
            $a =  rand(1, 20);
            $sum =  $a;

            for ($i = $sum + 1; $i <= 20; $i++) {
                $sum = $sum * $i;
               
            }
            echo "б) $sum ". "<br>";
        ?>

         <?php 
            $b =  rand(1, 20);
            $sum = 1;

            for ($i = 1; $i <= $b; $i++) {
                $sum = $sum * $i;
               
            }
            echo "в) $sum ". "<br>";
        ?>

        <?php 
            $a =  rand(1, 20);
            $b =  rand(1, 20);
            $sum = $a;

            if ($a > $b) {
                echo "г) Операция невозможна: значение старта больше значения финиша";
            } else {
                for ($i = $sum + 1; $i <= $b; $i++) {
                    $sum = $sum * $i;
                }
                echo "г) $sum ". "<br>";
            }
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">5.29.</span>
         Найти: <br>
        а) среднее арифметическое всех целых чисел от 1 до 1000;<br>
        б) среднее арифметическое всех целых чисел от 100 до b (значение b вводится 
с клавиатуры; b 100);<br>
        в) среднее арифметическое всех целых чисел от a до 200 (значения a и b вводятся с клавиатуры; a 200);<br>
        г) среднее арифметическое всех целых чисел от a до b (значения a и b вводятся с клавиатуры; b a).<br>
        </p>
        <p class="solution">Решение:</p>
        <?php 
            $sum = 0;
            for ($i = 1; $i <= 1000; $i++) {
                $sum = $sum + $i;
            }
            echo "а)" . " " . ($sum / 1000) . "<br>";
        ?>

        <?php
            $b = rand(1, 100);
            $sum = 0;
            for ($i = 0; $i <= $b; $i++) {
                $sum = $sum + $i;
            }
            
            echo "б)" . " " . ($sum / ($b + 1)) . "<br>";
        ?>

        <?php
            $a = rand(0, 20);
            $b = 200;
            $sum = 0;

            for ($i = $a; $i <= $b; $i++) {
                $sum = $sum + $i;
            }
            $sum = $a === 0 ? ($sum / ($b + 1)) : ($sum / $b);
            
            echo "в)" . " " . $sum . "<br>";
        ?>

        <?php
            $a = rand(0, 20);
            $b = rand(0, 20);
            $sum = 0;

            while($a >= $b) {
                $a = rand(0, 20);
                $b = rand(0, 20);
            }

            for ($i = $a; $i <= $b; $i++) {
                $sum = $sum + $i;
            }

            $sum = $a === 0 ? ($sum / ($b + 1)) : ($sum / $b);
            
            echo "г)" . " " . $sum . "<br>";
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">5.30.</span> 
        Найти: <br>
        а) сумму кубов всех целых чисел от 20 до 40;<br>
        б) сумму квадратов всех целых чисел от a до 50 (значение a вводится 
        с клавиатуры; 0 a 50);<br>
        в) сумму квадратов всех целых чисел от 1 до n (значение n вводится 
        с клавиатуры; 1 n 100);<br>
        г) сумму квадратов всех целых чисел от a до b (значения a и b вводятся с клавиатуры; b a).<br>

        </p>
        <p class="solution">Решение:</p>

        <?php
            $sum = 0;
            for ($i = 1; $i <= 3; $i++) {
                $sum = $sum + $i ** 3;
            }
            echo "а)" . " " . $sum . "<br>"; 
        ?>

        <?php
            $a = rand(0, 50);
            $sum = 0;

            while ($a === 50) {
                $a = rand(0, 50);
            }
            for ($i = $a; $i <= 50; $i++) {
                $sum = $sum + $i ** 2;
            }
            echo "б)" . " " . $sum . "<br>"; 
        ?>

        <?php
            $n = rand(0, 100);
            $sum = 0;

            while ($a === 100) {
                $a = rand(0, 100);
            }

            for ($i = 1; $i <= $n; $i++) {
                $sum = $sum + $i ** 2;
            }
            echo "в)" . " " . $sum . "<br>"; 
        ?>

        <?php
            $a = rand(0, 10);
            $b = rand(11, 20);
            $sum = 0;
            for ($i = $a; $i <= $b; $i++) {
                $sum = $sum + $i ** 2;
            }
            echo "г)" . " " . $sum . "<br>"; 
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">5.48.</span> 
        Даны числа a<sub>1</sub>, a<sub>2</sub>, ... a<sub>10</sub> . Определить сумму их квадратов.
        </p>
        <p class="solution">Решение:</p>

        <?php
            $sum = 0;
            for ($i = 1; $i <= 10; $i++) {
                $sum = $sum + $i * $i;
            }
            echo $sum . "<br>"; 
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">6.88.</span> 
         Имеется фрагмент программы в виде оператора цикла с параметром, обеспечивающий вывод на экран "столбиком" всех целых чисел от 10 до 30. Оформить этот фрагмент в виде:<br>
        а) оператора цикла с предусловием;<br>
        б) оператора цикла с постусловием.<br>
        </p>
        <p class="solution">Решение:</p>

        <table>
            <tr>
                <td>
                    <?php
                        echo "а)" . " <br>" ;
                        $num = 10;
                        while($num <= 30) {
                            echo $num . "<br>";
                            $num++;
                        }
                    ?>
                </td>
                <td>
                    <?php
                        $num = 10;
                        echo "б)" . " <br>" ;
                        do {
                            echo $num . "<br>";
                            $num++;
                        } while ($num <= 30);
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <div>
        <p class="condition"><span class="bold">6.89.</span> 
        Имеется фрагмент программы в виде оператора цикла с параметром, обеспечивающий вывод на экран "столбиком" всех целых чисел от 100 до 80. Оформить этот фрагмент в виде:<br>
        а) оператора цикла с предусловием;<br>
        б) оператора цикла с постусловием.<br>

        </p>
        <p class="solution">Решение:</p>

        <table>
            <tr>
                <td>
                    <?php
                        echo "а)" . " <br>" ;
                        $num = 100;
                        while($num >= 80) {
                            echo $num . "<br>";
                            $num--;
                        }
                    ?>
                </td>
                <td>
                    <?php
                        $num = 100;
                        echo "б)" . " <br>" ;
                        do {
                            echo $num . "<br>";
                            $num--;
                        } while ($num >= 80);
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <div>
        <p class="condition"><span class="bold">6.90.</span> 
         Имеется фрагмент программы в виде оператора цикла с параметром, обеспечивающий вывод на экран "столбиком" квадратного корня из всех целых чисел от a до b (a > b).<br>
        Оформить этот фрагмент в виде:<br>
        а) оператора цикла с предусловием;<br>
        б) оператора цикла с постусловием.<br>
        </p>
    <p class="solution">Решение:</p>
        <table>
            <tr>
                <td>
                    <?php
                        echo "а)" . " <br>" ;
                        $a = rand(1, 10);
                        $b = rand(11, 20);
                        while($a <= $b) {
                            echo sqrt($a) . "<br>";
                            $a++;
                        }
                    ?>
                </td>
                <td>
                    <?php
                        $a = rand(1, 10);
                        $b = rand(11, 20);
                        echo "б)" . " <br>" ;
                        do {
                            echo $a . "<br>";
                            $a++;
                        } while ($a <= $b);
                    ?>
                </td>
            </tr>
        </table>
    </div>


</body>
</html>