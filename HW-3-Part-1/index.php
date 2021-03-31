<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework-3, p-1</title>
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
        .large-tab {
            width: 800px;
        }
        /* .table {
            width: 300px;
            color: black;
            display: flex;
            
        } */
        .xxl-tab {
            width: 500px;
        }

        .xxl-col {
            display: inline-block;
            margin-right: 70px;
            margin-bottom: 30px;
        }
        .small-tr {
            display: inline;
            border: 1px solid #040404;
            padding: 4px 10px;
        }
        .small-td {
            width: 100%;
        }
        .similar {
            color: rgb(105, 105, 105);
            font-size: 14px;
            margin-bottom: 15px;
            font-style: italic;
        }
        .one-line-tab {
            width: 100%;
        }

        .bm-top {
            margin-top: 30px;
        }

        .mm-top {
            margin-top: 15px;
        }

    </style>
</head>
<body>
    <h1>ДЗ №3, часть 1</h1>
    <div>
        <p class="condition"><span class="bold">11.1.</span> 
         Заполнить массив из восьми элементов следующими значениями: первый элемент массива равен 37, второй — 0, третий — 50, четвертый — 46, пятый — 34, шестой — 46, седьмой — 0, восьмой —13.
        </p>
        <p class="solution">Решение:</p>

        <?php 
            $arr = array(37, 0, 50, 46, 34, 46, 0, 13);
            echo "<pre>";
                var_dump($arr);
            echo "<pre>";
        ?>
    </div> 

    <div>
        <p class="condition"><span class="bold">11.2.</span> 
          Заполнить массив из десяти элементов значениями, вводимыми с клавиатуры в ходе выполнения программы.
        </p>
        <p class="solution">Решение:</p>

        <?php 
            $num = 5;
            $arr = array();
            for ($i = 0; $i <= 10; $i++) {
                array_push($arr, $num);
            }

            echo "<pre>";
                var_dump($arr);
            echo "<pre>";
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.3.</span> 
           Заполнить массив из пятнадцати элементов случайным образом:<br>
            а) вещественными значениями, лежащими в диапазоне от 0 до 1; <br>
            <p class="similar">Остальные задания в этой задаче однотипные, поэтому не множила фактически дубляжи</p>
        </p>
        <p class="solution">Решение:</p>

        <?php 
            $arr = array();
            for ($i = 0; $i <= 15; $i++) {
                $num = rand(22, 23);
                array_push($arr, $num);
            }

            echo "<pre>";
                var_dump($arr);
            echo "<pre>";
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.4.</span> 
            Массив предназначен для хранения значений ростов двенадцати человек. 
        С помощью датчика случайных чисел заполнить массив целыми значениями, лежащими в диапазоне от 163 до 190 включительно.

        </p>
        <p class="solution">Решение:</p>

        <?php 
            $arr = array();
            for ($i = 0; $i <= 12; $i++) {
                $num = rand(163, 190);
                array_push($arr, $num);
            }

            echo "<pre>";
                var_dump($arr);
            echo "<pre>";
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.5.</span> 
            Массив предназначен для хранения значений весов двадцати человек. С помощью датчика случайных чисел заполнить массив целыми значениями, лежащими в диапазоне от 50 до 100 включительно.

        </p>
        <p class="solution">Решение:</p>

        <?php 
            $arr = array();
            for ($i = 0; $i <= 20; $i++) {
                $num = rand(50, 100);
                array_push($arr, $num);
            }

            echo "<pre>";
                var_dump($arr);
            echo "<pre>";
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.6.</span> 
            Заполнить массив из двенадцати элементов так, как показано на рис. 11.1.
        </p>
        <p class="solution">Решение:</p>

        <?php 
            $arr = array();
            for ($i = 1; $i <= 12; $i++) {
                array_push($arr, $i);
            }
            print_r($arr);
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.7.</span> 
            Заполнить массив из двадцати элементов так, как представлено на рис. 11.2.
        </p>
        <p class="solution">Решение:</p>

        <?php 
            $arr = array();
            for ($i = 20; $i >= 1; $i--) {
                array_push($arr, $i);
            }
            print_r($arr);
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.8.</span> 
             Заполнить массив из восьми элементов таким образом, чтобы значения элементов при просмотре массива слева направо образовывали:<br>
            а) убывающую последовательность;<br>
            б) возрастающую последовательность.<br>
            Варианты, представленные в задачах 11.6 и 11.7, не использовать.
        </p>
        <p class="solution">Решение:</p>

        <?php 
        echo "а) ";

            $arr = array();
            $i = 0;

            do {
                array_push($arr, 20 - $i);
                $i++;
            } while ($i < 8);

            echo "<pre>";
                var_export($arr);
            echo "<pre>";
        ?>

        <?php 
            echo "б) ";

            $arr = array();
            $i = 0;

            do {
                array_push($arr, 20 + $i);
                $i++;
            } while ($i < 8);

            echo "<pre>";
                var_export($arr);
            echo "<pre>";
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.10.</span> 
        Дано натуральное число n (n <= 999999). Заполнить массив его цифрами, расположенными в обратном порядке (первый элемент равен последней цифре, второй — предпоследней и т. д.). 
        </p>
        <p class="solution">Решение:</p>
        <?php 
            $num = 99;
            $idx = 0;
            $arr = [];

            while($num >= 0) {
                $arr[$idx] = $num;
                $idx++;
                $num--;
            }

            print_r($arr);
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.11.</span> 
        Используя датчик случайных чисел, заполнить массив из двадцати элементов неповторяющимися числами.
        </p>
        <p class="solution">Решение:</p>
        <?php

        $i = 0;
        $num = rand(0,5);
        $arr = array($num);

        while ($i <= 5) {
            $newNum = rand(0, 5);
            $hasDuble = false;

            for ($j = 0; $j < $i; $j++ ) {
                if ($arr[$j] == $newNum) {
                    $hasDuble = true;
                    break;
                }
            }

        if (!$hasDuble) {
                $arr[$i] = $newNum;
                $i++;
            }
        }

        print_r($arr);
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.12.</span> 
        Заполнить массив:<br>
        а) двадцатью первыми натуральными числами, делящимися нацело на 13 
        или на 17 и находящимися в интервале, левая граница которого равна 300;<br>
        б) тридцатью первыми простыми числами (простым называется натуральное число, большее 1, не имеющее других делителей, кроме единицы и самого себя).<br>

        </p>
        <p class="solution">Решение:</p>
        <?php 
            $arr = array();
            $i = 0;
            $min = 300;

            echo "a) ";
            while ($i < 20) {
                if (($min % 13 == 0) || ($min % 17==0)) {
                    $arr[$i] = $min;
                    $i++;
                }
                $min++;
            }

            print_r($arr);
            echo "<br>" . "<br>";
        ?> 

    </div>

    <div>
        <p class="condition"><span class="bold">11.13.</span> 
        Составить программу вывода на экран любого элемента массива по его индексу. 
        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            $num = rand(0, (count($arr)-1));
            print_r($arr[$num]);
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.13.</span> 
        Вывести элементы массива на экран в обратном порядке. 
        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            $length = (count($arr) -1);
            for ($i = 0; $i <= (count($arr)-1); $i++) {
                $arr[$i] = $length;
                $length--;
            }
            print_r($arr);
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.36.</span> 
        ан массив. Напечатать:<br>
        а) все неотрицательные элементы;<br>
        б) все элементы, не превышающие число 100.<br>

        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [0, 1, -2, 3, -4, 5, 600, 7, 800, 9, 100];
            $arrNew = [];
            
            for ($i = 0; $i <= (count($arr)-1); $i++) {
                if ($arr[$i] < 0) {
                    $arrNew[] = $arr[$i];

                }
            }
            echo "a) ";
                print_r($arrNew);
            echo "<br>";
        ?>

        <?php
            $arr = [0, 1, -2, 3, -4, 5, 600, 7, 800, 9, 100];
            $arrNew = [];
            
            for ($i = 0; $i <= (count($arr)-1); $i++) {
                if ($arr[$i] <= 100) {
                    $arrNew[] = $arr[$i];
                }
            }
            echo "б) ";
            print_r($arrNew);
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.37.</span> 
        11.37. Дан массив целых чисел. Напечатать:<br>
        а) все четные элементы;<br>
        б) все элементы, оканчивающиеся нулем.<br>
        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [6, 1, -2, 3, -4, 50, 601, 7, 800, 9, 103, 400];
            $arrNew = []; 

            for ($i = 0; $i <= (count($arr)-1); $i++) {
                if($arr[$i] % 2 == 0) {
                    $arrNew[] = $arr[$i];
                }
            }

            echo "a) ";
            print_r($arrNew);
            echo "<br>";
        ?>

        <?php
            $arr = [6, 1, -2, 3, -4, 50, 601, 7, 800, 9, 103, 400];
            $arrNew = []; 

            for ($i = 0; $i <= (count($arr)-1); $i++) {
                if($arr[$i] % 10 == 0) {
                    $arrNew[] = $arr[$i];
                }
            }

            echo "б) ";
            print_r($arrNew);
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.38.</span> 
        Дан массив натуральных чисел. Напечатать:<br>
        а) все элементы массива, являющиеся двузначными числами;<br>
        б) все элементы массива, являющиеся трехзначными числами.<br>
        </p>
        <p class="solution">Решение:</p>
        <?php 
            $arr = [6, 1, -2, 3, -4, 50, 601, 7, 800, 9, 103, 400, -12, 14, - 65];
            $arrNew = []; 

            for ($i = 0; $i <= (count($arr)-1); $i++) {
                if ($arr[$i] > 0) {
                    if (($arr[$i] > 9) && ($arr[$i] < 100)) {
                    $arrNew[] = $arr[$i];
                    }
                }

                if ($arr[$i] < 0) {
                    if (($arr[$i] < -9) && ($arr[$i] > -100)) {
                    $arrNew[] = $arr[$i];
                    }
                }
            }

            echo "a) ";
            print_r($arrNew);
            echo "<br>";
        ?>

         <?php 
            $arr = [6, 1, -2, 3, -4, 50, 601, 7, -800, 9, 103, 400, -12, 14, - 65];
            $arrNew = []; 

            for ($i = 0; $i <= (count($arr)-1); $i++) {
                if ($arr[$i] > 0) {
                    if (($arr[$i] > 99) && ($arr[$i] < 1000)) {
                    $arrNew[] = $arr[$i];
                    }
                }

                if ($arr[$i] < 0) {
                    if (($arr[$i] < -99) && ($arr[$i] > -1000)) {
                    $arrNew[] = $arr[$i];
                    }
                }
            }
            echo "б) ";
            print_r($arrNew);
        ?>       
    </div>

    <div>
        <p class="condition"><span class="bold">11.39.</span> 
         Дан массив. Напечатать:<br>
        а) второй, четвертый и т. д. элементы;<br>
        б) третий, шестой и т. д. элементы<br>
        </p>
        <p class="solution">Решение:</p>
        <?php 
            $arr = [6, 1, -2, 3, -4, 50, 601, 7, -800, 9, 103, 400, -12, 14, - 65];
            $arrNew = []; 

            for ($i = 1; $i <= (count($arr)-1); $i=$i + 2) {
                $arrNew[] = $arr[$i];
            }

            echo "a) ";
            print_r($arrNew);
            echo "<br>";
        ?>

        <?php 
            $arr = [6, 1, -2, 3, -4, 50, 601, 7, -800, 9, 103, 400, -12, 14, - 65];
            $arrNew = []; 

            for ($i = 5; $i <= (count($arr)-1); $i=$i + 6) {
                $arrNew[] = $arr[$i];
            }

            echo "б) ";
            print_r($arrNew);
            echo "<br>";
        ?>
    </div>


     <div>
        <p class="condition"><span class="bold">11.40.</span> 
        Дан массив. Вывести на экран сначала его неотрицательные элементы, затем отрицательные 
        </p>
        <p class="solution">Решение:</p>
        <?php 
            $arr = [6, 1, -2, 3, -4, 50, 601, 7, -800, 9, 103, 400, -12, 14, - 65];
            $positive = [];
            $negative = [];
            $arrNew = []; 


            for ($i = 0; $i <= (count($arr)-1); $i++) {
                if($arr[$i] >= 0 ) {
                    $positive[] = $arr[$i];
                }
                if($arr[$i] <= 0 ) {
                    $negative[] = $arr[$i];
                }
            }
            for ($j = 0; $j <= (count($positive)-1); $j++) {
                $arrNew[] = $positive[$j];
            }

            for ($k = 0; $k <= (count($negative)-1); $k++) {
                $arrNew[] = $negative[$k];
            }

            print_r($arrNew);
        ?>
    </div>

      <div>
        <p class="condition"><span class="bold">11.41.</span> 
        Дан массив целых чисел. Вывести на экран сначала его четные элементы, затем нечетные.

        </p>
        <p class="solution">Решение:</p>
        <?php 
            $arr = [6, 1, -2, 3, -4, 50, 601, 7, -800, 9, 103, 400, -12, 14, - 65];
            $even = []; //четные
            $odd = [];
            $arrNew = []; 

            for ($i = 0; $i <= (count($arr)-1); $i++) {
                if($arr[$i] % 2 == 0 ) {
                    $even[] = $arr[$i];
                } else {
                    $odd[] = $arr[$i];
                }
            }
            for ($j = 0; $j <= (count($even)-1); $j++) {
                $arrNew[] = $even[$j];
            }

            for ($k = 0; $k <= (count($odd)-1); $k++) {
                $arrNew[] = $odd[$k];
            }

            print_r($arrNew);
        ?>
    </div>
    
     <div>
        <p class="condition"><span class="bold">11.42.</span> 
Дан массив целых чисел. Найти номера элементов, оканчивающихся цифрой 0 (известно, что такие элементы в массиве есть).

        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [6, 1, -2, 3, -4, 50, 601, 7, -800, 9, 103, 400, -12, 14, - 65];
            $arrNew = [];

            for ($i = 0; $i <= (count($arr)-1); $i++) {
                if ($arr[$i] % 10 === 0) {
                    $arrNew[] = $arr[$i];
                }
            }
            print_r($arrNew);
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">11.43.</span> 
        В массиве хранится информация о количестве осадков, выпавших за каждый день января. Определить, в какие числа месяца осадков не было.
        </p>
        <p class="solution">Решение:</p>
        <?php 
            $arr = [true, true, false, false, true, false, true, false, true, true, true, false, false, false, false, true, true, false, false, true, false, true, false, true, true, true, false, false, false, false, true];

            $dates = [];

            for ($i = 0; $i <= (count($arr)-1); $i++) {
                if ($arr[$i]) {
                    $dates[] = $i + 1;
                }
            }
            print_r($dates);
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">11.44.</span> 
         массиве хранится информация о количестве побед, одержанных 20 футбольными командами. Определить номера команд, имеющих меньше трех побед
        </p>
        <p class="solution">Решение:</p>
        <?php
         $arr = [
             "team-1" => [1, 1, 1],
             "team-2" => [1, 1, 1, 1, 1, 1, 1],
             "team-3" => [1],
             "team-4" => [],
             "team-5" => [1, 1, 1, 1, 1],
             "team-6" => [],
             "team-7" => [1],
             "team-8" => [1, 1, 1, 1, 1],
             "team-9" => [1, 1],
             "team-10" => [1, 1],
             "team-11" => [1],
             "team-12" => [1, 1],
             "team-13" => [1, 11, 1, 1],
             "team-14" => [1, 11, 1, 11, 1, 1],
             "team-15" => [1, 1, 1, 1],
             "team-16" => [1, 1, 1],
             "team-17" => [1, 1, 1, 1, 1],
             "team-18" => [1],
             "team-19" => [],
             "team-10" => [1, 1, 1, 1, 1],
         ];

         $arrMew = [];

         foreach($arr as $team => $vin) {
             if(count($vin) < 3) {
                 $arrMew[] = $team;
             }
         }

        echo "<pre>";
            var_export($arrMew);
        echo "<pre>";
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">11.87.</span> 
        Рост 22 учеников класса представлен в виде массива. Рост мальчиков условно задан отрицательными числами. Определить средний рост мальчиков и средний рост девочек.
 
        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [160, -172, 173, -165, 160, 170, -150, 160]; 
            $girls = [];
            $boys = [];
            $averageHeightOfGirls = 0;
            $averageHeightOfBoys = 0;

            foreach($arr as $growth) {
                $growth < 0 ? $boys[] = $growth : $girls[] = $growth;
            }

            foreach($girls as $growth) {
                $averageHeightOfGirls = $averageHeightOfGirls + $growth;
           }

            foreach($boys as $growth) {
                $averageHeightOfBoys = $averageHeightOfBoys + $growth;
            }

            $averageHeightOfGirls = round($averageHeightOfGirls / count($girls));
            $averageHeightOfBoys = round($averageHeightOfBoys / count($boys));
        ?>
        <p>
            <?php 
                echo "Средний рост девочек: $averageHeightOfGirls. Средний рост мальчиков:  $averageHeightOfBoys"
            ?>
        </p>
    </div>


    <div>
        <p class="condition"><span class="bold">11.88.</span> 
        звестны стоимости нескольких марок легковых автомобилей и мотоциклов. Верно ли, что средняя стоимость автомобилей превышает среднюю стоимость мотоциклов более чем в 3 раза? Стоимость одного автомобиля превышает $5000, что больше стоимости любой марки мотоцикла. 
        </p>
        <p class="solution">Решение:</p>
        <?php 
            $carsCost = [5000, 7500, 8000];
            $motorcyclesCost = [850, 2500, 1000];
            $averageCostCars = 0;
            $averageCostMotorcycles = 0;

            foreach($carsCost as $cost) {
                $averageCostCars = $averageCostCars + $cost;
            }

            foreach($motorcyclesCost as $cost) {
                $averageCostMotorcycles = $averageCostMotorcycles + $cost;
            }

            $averageCostCars = round($averageCostCars / count($carsCost));
            $averageCostMotorcycles = round($averageCostMotorcycles / count($motorcyclesCost));

            $result = round($averageCostCars / $averageCostMotorcycles) > 3
            ? "Средняя стоимость машин бльше средней стоимости мотоциклов"
            : "Средняя стоимость мотоциклов бльше средней стоимости машин";
        ?>

        <p><?php echo $result ?></p>
    </div>


    <div>
        <p class="condition"><span class="bold">11.89.</span> 
         Известен рост каждого ученика класса. Рост мальчиков условно задан отрицательными числами. Верно ли, что средний рост мальчиков превышает средний рост девочек более чем на 10 см?. 
        </p>
        <p class="solution">Решение:</p>
        <?php 
            $arr = [160, -172, 173, -165, 160, 170, -150, 160]; 
            $girls = [];
            $boys = [];
            $averageHeightOfGirls = 0;
            $averageHeightOfBoys = 0;

            foreach($arr as $growth) {
                $growth < 0 ? $boys[] = $growth : $girls[] = $growth;
            }

            foreach($girls as $growth) {
                $averageHeightOfGirls = $averageHeightOfGirls + $growth;
           }

            foreach($boys as $growth) {
                $averageHeightOfBoys = $averageHeightOfBoys + $growth;
            }

            $averageHeightOfGirls = round($averageHeightOfGirls / count($girls));
            echo $averageHeightOfBoys = abs(round($averageHeightOfBoys / count($boys)));
            
            $result = round($averageHeightOfBoys - $averageHeightOfGirls) > 0
            ? "Средний рост мальчиков превышает средний рост девочек"
            : "Средний рост девочек превышает средний рост мальчиков";
        ?>
        <p><?php echo $result?></p>
    </div>


    <div>
        <p class="condition"><span class="bold">11.95.</span> 
         В массиве записаны оценки по информатике 22 учеников класса. Определить количество учеников, оценка которых меньше средней оценки по классу, и вывести номера элементов массива, соответствующих таким ученикам.
        </p>
        <p class="solution">Решение:</p>
        <?php
            $grade = [2, 4, 4, 5, 3, 3, 2, 2, 1, 4, 4, 5, 5, 5, 5, 2, 4, 4, 5, 3, 3, 2];
            $averageGrade = 0;
            $gradeBelowAverage = [];

            for ($i = 0; $i <= (count($grade)-1); $i++) {
                $averageGrade = $averageGrade + $grade[$i];
            }

            $averageGrade = round($averageGrade / count($grade));

            foreach ($grade as $key => $val) {
                if ($val < $averageGrade) {
                    $gradeBelowAverage[] = $key;
                }
            }

            $countOfStudentsWithGradesBelowAverage = count($gradeBelowAverage);

            echo "<pre>";
                var_export($gradeBelowAverage);
            echo "<pre>";            

        ?>
        <p>
            <?php 
                echo "Количество учеников с оценкой ниже средней: $countOfStudentsWithGradesBelowAverage"; 
            ?>
        </p>
    </div>


    <div>
        <p class="condition"><span class="bold">11.180.</span> 
         Известно, что в массиве имеются элементы, равные 5. Определить:<br>
а) номер первого из них;<br>
б) номер последнего из них.<br>
В обеих задачах условный оператор не использовать
        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [2, 34, 5, 65, 1, 5, 4, 3];
            $i=0;
            $num = null;

            while($arr[$i] != 5) {
                $i++;
                $num = $i;
            }
        ?>

        <?php
            $arr = [2, 34, 5, 65, 1, 5, 4, 3];
            $i= count($arr) - 1; // индексы
            $number = null;

            while($arr[$i] != 5) {
                $i--;
                $number = $i;
            }

        ?>
        <p>
            а) <?php echo $num ?> <br>
            б) <?php echo $number ?>
        </p>
    </div>


    <div>
        <p class="condition">
Задачи с 11.181 по 11.183 похожи по подходу с 11.180, поэтому пропущены.
        </p>
    </div>

    <div>
        <p class="condition"><span class="bold">11.214.</span> 
         Фирме принадлежат два магазина. Известна стоимость товаров, проданных 
в каждом магазине за каждый день в июле и августе, которая хранится 
в двух массивах. Получить общую стоимость проданных фирмой товаров за 
два месяца.
        </p>
        <p class="solution">Решение:</p>
        <?php
            $stores = [
                $firstStore = [
                    "july" => [
                        "day-1" => [
                            "product-1" => 4,
                            "product-2" => 100,
                            "product-3" => 20
                        ],

                        "day-2" => [
                            "product-1" => 30,
                            "product-2" => 11,
                            "product-3" => 15
                        ],                    
                        "day-3" => [
                            "product-1" => 140,
                            "product-2" => 10,
                            "product-3" => 80
                        ],
                    ],
                    "august" => [
                        "day-1" => [
                            "product-1" => 30,
                            "product-2" => 40,
                            "product-3" => 50
                        ],

                        "day-2" => [
                            "product-1" => 160,
                            "product-2" => 130,
                            "product-3" => 20
                        ],                    
                        "day-3" => [
                            "product-1" => 19,
                            "product-2" => 55,
                            "product-3" => 190
                        ],
                    ],
                ],
                 $secondStore = [
                    "july" => [
                        "day-1" => [
                            "product-1" => 4,
                            "product-2" => 100,
                            "product-3" => 20
                        ],

                        "day-2" => [
                            "product-1" => 30,
                            "product-2" => 11,
                            "product-3" => 15
                        ],                    
                        "day-3" => [
                            "product-1" => 140,
                            "product-2" => 10,
                            "product-3" => 80
                        ],
                    ],
                    "august" => [
                        "day-1" => [
                            "product-1" => 30,
                            "product-2" => 40,
                            "product-3" => 50
                        ],

                        "day-2" => [
                            "product-1" => 160,
                            "product-2" => 130,
                            "product-3" => 20
                        ],                    
                        "day-3" => [
                            "product-1" => 19,
                            "product-2" => 55,
                            "product-3" => 190
                        ],
                    ],
                ],               
            ];

            $i = 0;
            $salesInAllStores = 0;
            
            foreach($stores as $store) {
                foreach($store as $month) {
                    foreach($month as $day) {
                        foreach($day as $product => $price) {
                            $salesInAllStores = $salesInAllStores + $price;

                        }
                    }
                }
            }
        ?>
        <p>Общая стоимость проданых товаров: <?php echo $salesInAllStores?> руб.</p>
    </div>

     <div>
        <p class="condition"> 
        Задача 2.215 пропущена, т.к. идентична по решению на 11.214.
        </p>
    </div>


    <div>
        <p class="condition"><span class="bold">11.216.</span> 
         области 20 районов. Площади, засеянные пшеницей (в гектарах), и урожай, собранный в каждом районе (в центнерах), хранятся в двух массивах. 
Определить среднюю урожайность пшеницы по каждому району и по области в целом.<br>
Задачу решить двумя способами:<br>
1) без использования дополнительного (третьего) массива;<br>
2) с использованием дополнительного массива.<br>
        </p>
        <p class="solution">Решение:</p>


        <?php

            $area = [5, 10, 15, 20, 25, 30];
            $harvest = [100, 260, 540, 420, 540, 690];

            // Вариант 1
            $harvestPerHectareInRegionVariant1 = 0;
            $averageYieldInDistrictVariant1 = 0;

            for ($k = 0; $k <= (count($area)-1); $k++) {
                 $harvestPerHectareInRegionVariant1 = [
                     $k => $harvest[$k] / $area[$k],
                 ];

                 $averageYieldInDistrictVariant1 = $averageYieldInDistrictVariant1 + $harvestPerHectareInRegionVariant1[$k];
            }

            $averageYieldInDistrictVariant1 = $averageYieldInDistrictVariant1 / count($area);


            // Вариант 2
            $harvestPerHectareInRegion  = [];
            $averageYieldInDistrict = 0; 

            for ($i = 0; $i <= (count($area)-1); $i++) {
                 $harvestPerHectareInRegion[] = $harvest[$i] / $area[$i];
            }

            for ($j = 0; $j <= (count($harvestPerHectareInRegion)-1); $j++) {
                 $averageYieldInDistrict = $averageYieldInDistrict + $harvestPerHectareInRegion[$j];
            };

            $averageYieldInDistrict = $averageYieldInDistrict / count($harvestPerHectareInRegion);
        ?>


        <p>Средляя урожайность пшеницы по районам:<br>
            <?php 
                foreach ($harvestPerHectareInRegion as $key => $value) {?>
                Район <?php echo $key + 1; ?> :
                <b><?php echo  $value; ?> ц / га</b>
                <br>
            <?php } ?>
        </p> <br>
        <p>Средляя урожайность пшеницы по области: <b><?php echo $averageYieldInDistrict; ?> га</b></p>
    </div>


     <div>
        <p class="condition"> 
        Задачи 11.217, 11.221 пропущены, т.к. идентичны по решению на 11.216.
        </p>
    </div>

    <div>
        <p class="condition"><span class="bold">11.222.</span> 
 В одном массиве записано количество мячей, забитых футбольной командой в каждой из 20-ти игр, в другом — количество пропущенных мячей в этой же игре. Для каждой игры определить словесный результат игры (выигрыш, проигрыш или ничья).<br>
Задачу решить двумя способами:<br>
1) без использования дополнительного (третьего) массива;<br>
2) с использованием дополнительного массива.
        </p>
        <p class="solution">Решение:</p>
        
        <?php 
            define("WIN", 1);
            define("MIDDLE", 0);
            define("LOSE", 2);
            $scoredGoals = [2, 4, 1];
            $missedGoals = [3, 2, 1];
            $RESULTS_TEXT = [MIDDLE=> 'ничья', WIN=> 'выигрыш', LOSE=> 'проигрыш'];

            $wins = [];

            foreach ($scoredGoals as $idx => $value) {
                $wins[$idx] = $scoredGoals[$idx] - $missedGoals[$idx];
                if ($wins[$idx] >0 ){
                $wins[$idx] = WIN;
                }
                if ($wins[$idx] === 0 ){
                $wins[$idx] = MIDDLE;
                }
                if ($wins[$idx] < 0 ){
                $wins[$idx] = LOSE;
                }
            }
        ?>

        <p class='bm-top'>
            <?php 
                foreach ($wins as $key => $value) {?>
                Игра <?php echo $key?> :

                <b> 
                    <?php echo  $RESULTS_TEXT[$value]; ?> 
                </b>

                <br>
            <?php } ?>
        </p>
    </div>

    <div>
        <p class="condition"><span class="bold">11.223.</span> 
Даны два массива из 20 однозначных чисел. В первом из них записано количество мячей, забитых футбольной командой в игре, во втором — количество пропущенных мячей в этой же игре.<br><br>
а) Для каждой проведенной игры напечатать словесный результат: "выигрыш", "ничья" или "проигрыш".<br>
б) Определить количество выигрышей данной команды.<br>
в) Определить количество выигрышей и количество проигрышей данной команды.<br>
г) Определить количество выигрышей, количество ничьих и количество проигрышей данной команды.<br>
д) Определить, в скольких играх разность забитых и пропущенных мячей была большей или равной трем.<br>
е) Общее число очков, набранных командой (за выигрыш дается 3 очка, за 
ничью — 1, за проигрыш — 0).<br>
        </p>
        <p class="solution">Решение:</p>

        <?php
            define("WIN", 1);
            define("MIDDLE", 0);
            define("LOSE", 2);

            $scoredGoals = [2, 4, 1, 5, 3, 2, 6, 0, 6, 2];
            $missedGoals = [3, 2, 1, 2, 3, 2, 3, 3, 9, 4];
            $RESULTS_TEXT = [MIDDLE=> 'ничья', WIN=> 'выигрыш', LOSE=> 'проигрыш'];

            $gamesResults = [];
            $GamesScoresDifference = [];
            $pointsForAllGames = [];
            $totalWins = 0;
            $totalLosing = 0;
            $totalMiddle = 0;
            $totalDifference = 0;
            $totalPointsForAllGames = 0;


            foreach ($scoredGoals as $idx => $value) {
                $gamesResults[$idx] = $scoredGoals[$idx] - $missedGoals[$idx];
                $GamesScoresDifference[] = $scoredGoals[$idx] - $missedGoals[$idx];

                if ($gamesResults[$idx] > 0 ){
                $gamesResults[$idx] = WIN;
                $totalWins = $totalWins + 1;
                $pointsForAllGames[] = 3;
                }
                if ($gamesResults[$idx] === 0 ){
                $gamesResults[$idx] = MIDDLE;
                $totalMiddle = $totalMiddle + 1;
                $pointsForAllGames[] = 1;
                }
                if ($gamesResults[$idx] < 0 ){
                $gamesResults[$idx] = LOSE;
                $totalLosing = $totalLosing + 1;
                $pointsForAllGames[] = 0;
                }
            }

            foreach ($GamesScoresDifference as $key => $value) {
                if ($value == 3 || $value == -3) {
                    $totalDifference = $totalDifference + 1;
                }
            }

            foreach ($pointsForAllGames as $key => $value) {
                $totalPointsForAllGames = $totalPointsForAllGames + $value;
            }
        ?>

        <p class='bm-top'>
            <p>a)</p>
            <?php 
                foreach ($gamesResults as $key => $value) {?>
                Игра <?php echo $key + 1?> :

                <b> 
                    <?php echo  $RESULTS_TEXT[$value]; ?> 
                </b>

                <br>
            <?php } ?>

            <p class='mm-top'>б) Количество выигрышей: <b><?php echo $totalWins; ?></b></p>
            <p class='mm-top'>
                в) Количество выигрышей: <b><?php echo $totalWins; ?></b>,
                проигрышей: <b><?php echo $totalLosing; ?></b>
            </p>
            <p class='mm-top'>
                г) Количество выигрышей: <b><?php echo $totalWins; ?></b>,
                проигрышей: <b><?php echo $totalLosing; ?></b>,
                ничьих: <b><?php echo $totalMiddle; ?></b>,
            </p>
            <p class='mm-top'>
                д) Количество игр с разницей в три гола: <b><?php echo $totalDifference; ?></b>,
            </p>
            <p class='mm-top'>
                е) Общее количество очков за игру: <b><?php echo $totalPointsForAllGames; ?></b>,
            </p>
        </p>
    </div>

    <div>
        <p class="condition"><span class="bold">11.224.</span> 
 Решить задачу 11.223 для случая, когда вместо двух массивов однозначных 
чисел задан один массив однозначных или двузначных чисел, запись которых образована цифрами, означающими количество забитых и пропущенных мячей в одной игре.<br>
Например, 32 — 3 забитых, 2 пропущенных; 22 —
2 забитых, 2 пропущенных; 0 — 0 забитых, 0 пропущенных.
        </p>
        <p class="solution">Решение:</p>

        <?php
            define("WIN", 1);
            define("MIDDLE", 0);
            define("LOSE", 2);

            $resultInOneArr = [23, 42, 11, 52, 55, 22, 63, 03, 69, 0];

            $scoredGoals = [];
            $missedGoals = [];
            $RESULTS_TEXT = [MIDDLE=> 'ничья', WIN=> 'выигрыш', LOSE=> 'проигрыш'];

            $gamesResults = [];
            $GamesScoresDifference = [];
            $pointsForAllGames = [];
            $totalWins = 0;
            $totalLosing = 0;
            $totalMiddle = 0;
            $totalDifference = 0;
            $totalPointsForAllGames = 0;

            foreach ($resultInOneArr as $key => $value) {
                $numToString = strval($value);

                if (strlen($numToString) == 1 ) {
                    if ($value > 0) {
                        $scoredGoals[] = 0;
                        $missedGoals[] = $numToString[0];
                    } else {
                        $scoredGoals[] = $numToString[0];
                        $missedGoals[] = $numToString[0];
                    }
                } else {
                    $scoredGoals[] = $numToString[0];
                    $missedGoals[] = $numToString[1];
                }
            }


            foreach ($scoredGoals as $idx => $value) {
                $gamesResults[$idx] = $scoredGoals[$idx] - $missedGoals[$idx];
                $GamesScoresDifference[] = $scoredGoals[$idx] - $missedGoals[$idx];

                if ($gamesResults[$idx] > 0 ){
                $gamesResults[$idx] = WIN;
                $totalWins = $totalWins + 1;
                $pointsForAllGames[] = 3;
                }
                if ($gamesResults[$idx] === 0 ){
                $gamesResults[$idx] = MIDDLE;
                $totalMiddle = $totalMiddle + 1;
                $pointsForAllGames[] = 1;
                }
                if ($gamesResults[$idx] < 0 ){
                $gamesResults[$idx] = LOSE;
                $totalLosing = $totalLosing + 1;
                $pointsForAllGames[] = 0;
                }
            }

            foreach ($GamesScoresDifference as $key => $value) {
                if ($value == 3 || $value == -3) {
                    $totalDifference = $totalDifference + 1;
                }
            }

            foreach ($pointsForAllGames as $key => $value) {
                $totalPointsForAllGames = $totalPointsForAllGames + $value;
            }
        ?>

        <p class='bm-top'>
            <p>a)</p>
            <?php 
                foreach ($gamesResults as $key => $value) {?>
                Игра <?php echo $key + 1?> :

                <b> 
                    <?php echo  $RESULTS_TEXT[$value]; ?> 
                </b>

                <br>
            <?php } ?>

            <p class='mm-top'>б) Количество выигрышей: <b><?php echo $totalWins; ?></b></p>
            <p class='mm-top'>
                в) Количество выигрышей: <b><?php echo $totalWins; ?></b>,
                проигрышей: <b><?php echo $totalLosing; ?></b>
            </p>
            <p class='mm-top'>
                г) Количество выигрышей: <b><?php echo $totalWins; ?></b>,
                проигрышей: <b><?php echo $totalLosing; ?></b>,
                ничьих: <b><?php echo $totalMiddle; ?></b>,
            </p>
            <p class='mm-top'>
                д) Количество игр с разницей в три гола: <b><?php echo $totalDifference; ?></b>,
            </p>
            <p class='mm-top'>
                е) Общее количество очков за игру: <b><?php echo $totalPointsForAllGames; ?></b>,
            </p>
        </p>
    </div>


    <div>
        <p class="condition"><span class="bold">11.225.</span> 
Известны данные о численности населения (в миллионах жителей) и площади (в миллионах квадратных километров) 28 государств. Определить общую численность государств, чья площадь превышает 5 млн кв. км.
        </p>
        <p class="solution">Решение:</p>
        <?php
            $sizesAndPopulationOfStates = [
                "China" => [
                    'sizes' => 9.5,
                    'population' => 1339,
                ],
                "Indonesia" => [
                    'sizes' => 1.9,
                    'population' => 237,
                ],
                "Brazil" => [
                    'sizes' => 8.5,
                    'population' => 193,
                ],
                "Egypt " => [
                    'sizes' => 1,
                    'population' => 79,
                ],
            ];

            $totalPopulation = 0;

            foreach ($sizesAndPopulationOfStates as $country => $statistics) {
                if ($statistics['sizes'] >= 5) {
                    $totalPopulation = $totalPopulation + $statistics['population'];
                }

            }
        ?>

        <p>Общая численность государств, чья площадь превышает 5 млн кв. км: <b><?php echo $totalPopulation ?></b> млн человек.
        </p>

    </div>

    <div>
        <p class="condition"><span class="bold">11.226.</span> 
Известны данные о мощности двигателя (в л. с.) и стоимости 30 легковых 
автомобилей. Определить общую стоимость автомобилей, у которых мощность двигателя превышает 100 л. с.
        </p>
        <p class="solution">Решение:</p>
        <?php
            $cars = [
                "car-1" => [
                    'power' => 50,
                    'price' => 50000,
                ],
                "car-2" => [
                    'power' => 70,
                    'price' => 70000,
                ],
                "car-3" => [
                    'power' => 100,
                    'price' => 100000,
                ],
                "car-4 " => [
                    'power' => 120,
                    'price' => 120000,
                ],
            ];

            $totalCosts = 0;

            foreach ($cars as $car => $value) {
                if ($value['power'] >= 100) {
                    $totalCosts = $totalCosts + $value['price'];
                }
            }
        ?>

        <p>Общая стоимость автомобилей, у которых мощность двигателя превышает 100 л. с : <b><?php echo $totalCosts ?></b> грн.
        </p>

    </div>

    <div>
        <p class="condition"><span class="bold">11.227.</span> 
Имеется информация о количестве осадков, выпавших за каждый день месяца, и о температуре воздуха в эти дни. Определить, какое количество осадков выпало в виде снега и какое — в виде дождя. (Считать, что идет 
дождь, если температура воздуха выше 0 С.)

        </p>
        <p class="solution">Решение:</p>
        <?php

            $month = [
                1 => [
                    'temperature' => 10,
                    'hasPrecipitation' => true,
                ],
                2 => [
                    'temperature' => 6,
                    'hasPrecipitation' => false,
                ],
                3 => [
                    'temperature' => -8,
                    'hasPrecipitation' => true,
                ],
                4 => [
                    'temperature' => 9,
                    'hasPrecipitation' => true,
                ],
                5 => [
                    'temperature' => -4,
                    'hasPrecipitation' => false,
                ],
                6 => [
                    'temperature' => 5,
                    'hasPrecipitation' => false,
                ],
                7 => [
                    'temperature' => 3,
                    'hasPrecipitation' => true,
                ],
                8 => [
                    'temperature' => 0,
                    'hasPrecipitation' => true,
                ],
            ]; 

            $totalSnowDays = 0;
            $totalRainDays = 0;

            foreach ($month as $day => $value) {

                if($value['hasPrecipitation']) {
                    if($value['temperature'] > 0) {
                         $totalRainDays = $totalRainDays + 1;
                    } else {
                        $totalSnowDays = $totalSnowDays + 1;
                    }
                }
            }
        ?>
        <p>
         В этом месяце снег шел <?php echo $totalSnowDays; ?> раза, а дождь -- <?php echo $totalRainDays; ?>
        </p>
    </div>

    <div>
        <p class="condition">
            Задачиа  11.228 похожа по подходу с 11.225, поэтому пропущена. <br>
            Задачиа  11.229 похожа по подходу с 11.230, поэтому пропущена.
        </p>
    </div>


    <div>
        <p class="condition"><span class="bold">11.230.</span> 
 Фирма имеет два магазина. Известен доход каждого магазина за каждый день 
февраля. Определить, в каком из магазинов общий доход за месяц меньше.
        </p>
        <p class="solution">Решение:</p>
        <?php 
            $shop1 = [ 10, 20, 5, 10,];
            $shop2 = [50, 60, 70, 10,];
            $totalShop1 = 0;
            $totalShop2 = 0;
            $res = '';

            foreach ($shop1 as $key => $value) {
                $totalShop1 = $totalShop1 + $value;
            }

            foreach ($shop2 as $key => $value) {
                $totalShop2 = $totalShop2 + $value;
            }

            $res = $totalShop1 - $totalShop2 > 0 ? 1 : 2;
        ?>
        <p>Больше в магазине <?php echo $res; ?></p>
    </div>


    <div>
        <p class="condition"><span class="bold">11.231.</span> 
 Известны данные о массе (в кг) и объеме (в см3) 20-ти предметов, изготовленных из различных материалов. Определить максимальную плотность материала.<br><br>
Задачу решить двумя способами:<br>
1) без использования дополнительного (третьего) массива;<br>
2) с использованием дополнительного массива.<br>
        </p>
        <p class="solution">Решение:</p>
        <?php
            $mass = [55, 100, 500, 200, 250];
            $capacity = [5, 25, 20, 2, 50]; 
            $density = []; // Для варианта 2
            $maxVariant1 = 0; // Для варианта 1
            $max = $density[0]; // Для варианта 2

            // Вариант 1
            for ($k = 0; $k <= count($mass) - 1; $k++) {
                $densityVariant1 = [
                    $k => $mass[$k] / $capacity[$k],
                ];

                if ($maxVariant1 < $densityVariant1[$k]) {
                    $maxVariant1 = $densityVariant1[$k];
                }
            }

            // Вариант 2
            for ($i = 0; $i <= count($mass) - 1; $i++) {
                $density[] = $mass[$i] / $capacity[$i];
            }

            for ($j = 0; $j <= count($density) - 1; $j++) {
                if ($max < $density[$j]) {
                    $max = $density[$j];
            }
        }
       
        ?>
        <p>Максимальная плотность: <?php echo $max; ?></p>
    </div> 

    <div>
        <p class="condition"><span class="bold">11.235.</span> 
Дан массив. Скопировать все его элементы в другой массив такого же размера:<br>
а) в том же порядке расположения элементов;<br>
б) в обратном порядке расположения элементов<br>
        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [2, 34, 5, 65, 1, 5, 4, 3, 10];
            $newArr = [];
            $i = 0;
            
            for($i = 0; $i <= (count($arr) - 1); $i++) {
                $newArr[] = $arr[$i];
            }

            echo "<pre>";
                var_export($newArr);
            echo "<pre>";
        
        ?>
    </div> 

    <div>
        <p class="condition"><span class="bold">11.236.</span> 
Из элементов массива a сформировать массив b того же размера по правилу: если номер i элемента массива a четный, то элемент равен a в квадрате. Если не четный, то умножить на два.
        </p>
        <p class="solution">Решение:</p>
        <?php
             $a = [1, 2, 3, 4];
             $b = [];
             $i = 0;

             for ($i = 0; $i < count($a); $i++) {
                $b[] = $i % 2 == 0 ? ($a[$i] * $a[$i]) : (2 * $a[$i]);
            }

            echo "<pre>";
                var_export($b);
            echo "<pre>";
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">11.237.</span> 
Из элементов массива m сформировать массив n того же размера по правилу: если номер i элемента массива m нечетный, то элемен равен элементу, умноженный на итератор. В противном 
 элемент разделить на итератор
        </p>
        <p class="solution">Решение:</p>
        <?php
             $m = [2, 4, 10, 15];
             $n = [];
             $i = 0;

             for ($i = 0; $i < count($a); $i++) {
                $n[] = $i % 2 == 0 ? ($m[$i] * $i) : ($m[$i] / $i);
            }

            echo "<pre>";
                var_export($n);
            echo "<pre>";
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">11.238.</span> 
 Из элементов массива p сформировать массив q того же размера по правилу: элементы с номером i от 3-го по 10-й находятся по формуле: элемент отридцательный, в противном случае элемент умножить на итератор
        </p>
        <p class="solution">Решение:</p>
        <?php
             $p = [2, 4, 10, 15, 11, 5, 23, 44, 98, 67];
             $q = [];
             $i = 0;

             for ($i = 0; $i < count($p); $i++) {
                 $res = null;

                 if ($i >= 3 && $i <= 10) {
                    echo $p[$i] = (0 - $p[$i]);
                 } else {
                     $p[$i] * $i;
                 }

                $q[] = $p[$i];
            }
            echo "<pre>";
                var_export($q);
            echo "<pre>";
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.239.</span> 
Из элементов массива a, заполненного целыми числами, сформировать массив b того же размера по правилу: четные элементы массива a удвоить, нечетные оставить без изменения.
        </p>
        <p class="solution">Решение:</p>
        <?php
             $a = [2, 4, 10, 15];
             $b = [];
             $i = 0;

             for ($i = 0; $i < count($a); $i++) {
                $b[] = $i % 2 == 0 ? ($a[$i] * 2) : $a[$i];
            }

            echo "<pre>";
                var_export($b);
            echo "<pre>";
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">11.240.</span> 
Из элементов массива m сформировать массив n того же размера по правилу: неотрицательные элементы массива m уменьшить в три раза, остальные — возвести в квадрат
        </p>
        <p class="solution">Решение:</p>
        <?php
             $m = [12, -4, 24, 15, -7, 21];
             $n = [];
             $i = 0;

             for ($i = 0; $i < count($m); $i++) {

                $n[] = ($m[$i] >= 0) ? ($m[$i] / 3) : $m[$i]** 2;
            }

            echo "<pre>";
                var_export($n);
            echo "<pre>";
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">11.241.</span> 
 Дан массив. Переписать его второй, четвертый и т. д. элементы в другой 
массив такого же размера:<br>
а) расположив элементы на тех же местах, что и в исходном массиве;<br>
б) расположив элементы подряд с начала массива<br>
        </p>
        <p class="solution">Решение:</p>
        <?php
             $arr = [12, 4, 24, 15, 7, 21, 33, 43, 56, 88];
             $newArrA = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
             $newArrB = [2, 2, 2, 2, 2, 2, 2, 2, 2, 2];

             $i = 0;
             $k = 0;

             while ($i < count($arr) - 1) {
                $newArrA[$i] = $arr[$i];
                $newArrB[$k++] = $arr[$i];

                 $i = $i + 2;
             }



            echo "<pre>";
                var_export($newArrA);
            echo "<pre>";

            echo "<pre>";
                var_export($newArrB);
            echo "<pre>";
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">11.242.</span> 
Дан массив целых чисел. Переписать его нечетные элементы в другой массив такого же размера:<br>
а) расположив элементы на тех же местах, что и в исходном массиве;<br>
б) расположив элементы подряд с начала массива<br>
        </p>
        <p class="solution">Решение:</p>
        <?php
             $arr = [12, 4, 24, 15, 7, 21, 33, 43, 56, 88, 22, 6, 34, 25, 17, 31, 43, 53, 76, 98];
             $newArrA = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
             $newArrB = [2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2];


             foreach ($arr as $key => $value) {
                 $newArrA[$key] = $value % 2 != 0 ? $value : $newArrA[$key];
             }

            $i = 0;
            foreach ($arr as $key => $value) {
                if ( $value % 2 != 0) {
                     $newArrB[$i] = $value;
                     $i++;
                }
            }


echo "a)";
            echo "<pre>";
                var_export($newArrA);
            echo "<pre>";

echo "b)";
            echo "<pre>";
                var_export($newArrB);
            echo "<pre>";
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">11.243.</span> 
Дан массив из 20 элементов. Сформировать два массива размером 10, 
включив в первый из них элементы заданного массива с четными индексами, а во второй — с нечетными
        </p>
        <p class="solution">Решение:</p>
        <?php
            
            $arr = [2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1];
            $even = [];
            $odd = [];

            foreach ($arr as $key => $value) {
                if ($key % 2 == 0) {
                    $even[] = $value;
                } else {
                    $odd[] = $value;
                }
            }

            echo "<pre>";
                var_export($even);
            echo "<pre>";

            echo "<pre>";
                var_export($odd);
            echo "<pre>";
        ?>
    </div>

     <div>
        <p class="condition"><span class="bold">11.244.</span> 
        Дан массив. Переписать его положительные элементы во второй массив, 
        а остальные — в третий. Во втором и третьем массивах значения элементов 
        первого массива должны быть записаны:<br>
        а) на тех же местах, что и в исходном массиве;<br>
        б) подряд с начала массива<br>
        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [12, -4, 24, 15, -7, 21, -33, 43, -56, 88];


            // A)
            $positiveA = [];
            $negativeA = [];

            foreach ($arr as $key => $value) {
                if ($value > 0) {
                    $positiveA[$key] = $value;
                } else {
                    $negativeA[$key] = $value;
                }
            }

            echo "a)" . "<pre>";
                var_export($positiveA);
            echo "<pre>";

            echo "<pre>";
                var_export($negativeA);
            echo "<pre>";


            // Б)
            $positiveB = [];
            $negativeB = [];

            foreach ($arr as $key => $value) {
                if ($value > 0) {
                    $positiveB[] = $value;
                } else {
                    $negativeB[] = $value;
                }
            }

            echo "b)" . "<pre>";
                var_export($positiveB);
            echo "<pre>";

            echo "<pre>";
                var_export($negativeB);
            echo "<pre>";
        
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">11.246.</span> 
Даны два массива одного размера. Получить третий массив, каждый элемент которого равен:<br>
а) сумме элементов с тем же номером в заданных массивах;<br>
б) произведению элементов с тем же номером в заданных массивах;<br>
в) максимальному из элементов с тем же номером в заданных массивах
        </p>
        <p class="solution">Решение:</p>
        <?php
        $a = [1, 2, 30, 4, 50, 12, 7, 9];
        $b = [6, 7, 8, 9, 10, 4, 75, 8];

        $summ = [];
        $prodOfNum  = [];
        $bigestNum = [];



        for ($i = 0; $i <= count($a) - 1; $i++) {
            $summ[] = $a[$i] + $b[$i];
            $prodOfNum[] = $a[$i] * $b[$i];
            $bigestNum[] = $a[$i] > $b[$i] ? $a[$i] : $b[$i];
        }


            echo "а)" . "<pre>";
                var_export($summ);
            echo "<pre>";

            echo "б)" . "<pre>";
                var_export($prodOfNum);
            echo "<pre>";

            echo "в)" . "<pre>";
                var_export($bigestNum);
            echo "<pre>";

        ?>
    </div> 

    <div>
        <p class="condition"><span class="bold">11.247.</span> 
Даны два массива одного размера, в которых нет нулевых элементов. Получить третий массив, каждый элемент которого равен 1, если элементы заданных массивов с тем же номером имеют одинаковый знак, и равен нулю в противном случае.

        </p>
        <p class="solution">Решение:</p>
        <?php 
            $a = [1, 2, 3, 4, 5, 5, 7, 9];
            $b = [6, 7, 3, 9, 10, 5, 75, 8];
            $newArr = [];

        for ($i = 0; $i <= count($a) - 1; $i++) {
            $newArr[] = $a[$i] == $b[$i] ? 1 : 0;
       }

            echo "<pre>";
                var_export($newArr);
            echo "<pre>";
        ?>
    </div>


    <div>
        <p class="condition"><span class="bold">11.248.</span> 
Регистрация направления ветра на горном плато проводится один раз в день 
по очереди двумя исследователями. Каждый из них ведет отдельную таблицу. В конце месяца все результаты сводятся в одну таблицу. Составить 
программу, выполняющую эту операцию для июня. Направление ветра кодируется следующим образом: 1 — северный, 2 — южный, 3 — восточный, 
4 — западный, 5 — северо-западный, 6 — северо-восточный, 7 — югозападный, 8 — юго-восточный.
        </p>
        <p class="solution">Решение:</p>
        <?php

            $arr1 = [1, 2, 4, 7];
            $arr2 = [5, 6, 2, 8];
            $newArr = [];

            $k = 0;
            $r = 1;

            for ($i = 0; $i <= count($arr1) - 1; $i++) {

                 $newArr[$k] = $arr1[$i];
                 $newArr[$r] = $arr2[$i];

                $k = $k + 2;
                $r = $r + 2;
            }


            echo "<pre>";
                var_export($newArr);
            echo "<pre>";
        
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">12.1.</span> 
 Дан двумерный массив.<br>
а) Вывести на экран элемент, расположенный в правом верхнем углу массива.<br>
б) Вывести на экран элемент, расположенный в левом нижнем углу массива.<br>

        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [
                0 => [1, 2, 3, 4, 5],
                1 => [6, 7, 8, 9, 10],
                2 => [11, 12, 13, 14, 15],
            ];

            echo "<pre>";
                 var_export($arr[0][count($arr[0]) -1]);
            echo "<pre>";

            echo "<pre>";
                 var_export($arr[count($arr) -1][0]);
            echo "<pre>";
        
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">12.2.</span> 
 Дан двумерный массив.<br>
а) Вывести на экран элемент, расположенный в правом нижнем углу массива.<br>
б) Вывести на экран элемент, расположенный в левом верхнем углу массива.<br>

        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [
                0 => [1, 2, 3, 4, 5],
                1 => [6, 7, 8, 9, 10],
                2 => [11, 12, 13, 14, 15],
            ];

            echo "<pre>";
                 var_export($arr[count($arr) -1][count($arr[0]) -1]);
            echo "<pre>";

            echo "<pre>";
                 var_export($arr[0][0]);
            echo "<pre>";
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">12.3.</span> 
 Дан двумерный массив.<br>
а) вывода на экран любого элемента второй строки массива;<br>
б) вывода на экран любого элемента массива.<br>

        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [
                0 => [1, 2, 3, 4, 5],
                1 => [6, 7, 8, 9, 10],
                2 => [11, 12, 13, 14, 15],
            ];

            $idx = rand(0, count($arr[1]) -1);

            $idxColumn = rand(0, count($arr) -1);
            $idxRow = rand(0, $idxColumn);

            echo "<pre>";
                 var_export($arr[1][$idx]);
            echo "<pre>";

            echo "<pre>";
                 var_export($arr[$idxColumn][$idxRow]);
            echo "<pre>";
        ?>
    </div>

    <div>
        <p class="condition">
            Задачи с 12.4 по 12.6 похожи по подходу с 12.3, поэтому пропущены.
        </p>
    </div>

    <div>
        <p class="condition"><span class="bold">12.7.</span> 
Составить программу:<br>
а) заменяющую значение любого элемента пятой строки двумерного массива 
числом 1949;<br>
б) заменяющую значение любого элемента двумерного массива числом a.<br>


        </p>
        <p class="solution">Решение:</p>
        <?php
            $arr = [
                0 => [1, 2, 3, 4, 5],
                1 => [6, 7, 8, 9, 10],
                2 => [11, 12, 13, 14, 15],
                3 => [16, 17, 18, 19, 20],
                4 => [21, 22, 23, 24, 25],
                5 => [26, 27, 28, 29, 30],
                6 => [31, 32, 33, 34, 35],
            ];

            $a = 55555;

            $idx = rand(0, count($arr[5]) -1);

            $idxColumn = rand(0, count($arr) -1);
            $idxRow = rand(0, $idxColumn);

            $arr[5][$idx] = 1949;

            $arr[$idxColumn][$idxRow] = $a;

            echo "<pre>";
                 var_export($arr);
            echo "<pre>";
        ?>
    </div>

    <div>
        <p class="condition">
            Задача 12.8 похожа по подходу с 12.7, поэтому пропущена.
        </p>
    </div>

    <div>
        <p class="condition"><span class="bold">12.22.</span> 
  Заполнить двумерный массив результатами таблицы умножения (в первой строке должны быть записаны произведения каждого из чисел от 1 до 9 на 1, во второй — на 2, ..., в последней — на 9).
        </p>
        <p class="solution">Решение:</p>
        <?php 

        $arr = [];

        for ($column = 1; $column <= 9; $column++) {
            $arr[$column] = [];
            for ($line = 1; $line <= 9; $line++) {
                $arr[$column][$line] = $line * $column;
           }
        }

            echo "<pre>";
                 var_export($arr);
            echo "<pre>";
        
        ?>
    </div>


</body>
</html>