<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework-4, p-4</title>
    <style>
        * {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        body {
            padding: 20px
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
    <h1>ДЗ №4, часть 4, Рекурсия</h1>
    <div>
        <p class="condition"><span class="bold">10.41.</span> 
         Написать рекурсивную функцию для вычисления факториала натурального числа n.
        </p>
        <p class="solution">Решение:</p>
        <?php
            function findFacrorialNum($num) {
                if ($num == 1) {
                    return 1;
                } else {
                    return $num * findFacrorialNum($num - 1);
                }
            }
        ?>
        <p><?php echo findFacrorialNum(4);?></p>
    </div> 

    <div>
        <p class="condition"><span class="bold">10.42.</span> 
         В некоторых языках программирования (например, в Паскале) не предусмотрена операция возведения в степень. Написать рекурсивную функцию для расчета степени n вещественного числа a (n — натуральное число).

        </p>
        <p class="solution">Решение:</p>
        <?php

        function exponentiation($num, $extent) {
            if($extent <= 0) {
                return 1;
            } else {
                return exponentiation($num, $extent - 1) * $num;
            }
        }
        ?>
        <p><?php echo exponentiation(4, 4);?></p>
    </div>


    <div>
        <p class="condition"><span class="bold">10.45.</span> 
 Даны первый член и разность арифметической прогрессии. Написать рекурсивную функцию для нахождения:<br>
а) n-го члена прогрессии;<br>
б) суммы n первых членов прогрессии.<br>


        </p>
        <p class="solution">Решение:</p>
        <?php
            function progressionA($start, $step, $n) {
                if($n <= 1) {
                    return 1;
                } else {
                    return progressionA($start, $step, $n-1) + ($step);
                }
                
            }
        ?>
        <p>А) <?php echo progressionA(1, 3, 4); ?></p>
        <p>Б) Пункт Б не знаю как решить</p>
    </div>



</body>
</html>