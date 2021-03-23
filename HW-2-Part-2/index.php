<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework-2, part 2</title>
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

    </style>
</head>
<body>
    <h1>ДЗ №2, часть вторая<br>Задачи: 6.98 - 6.100, 8.1-8.8, 4.65</h1>

    <div>
        <p class="condition"><span class="bold">6.98.</span> 
         Гражданин 1 марта открыл счет в банке, вложив 1000 руб. Через каждый месяц размер вклада увеличивается на 2% от имеющейся суммы. Определить:<br>
        а) за какой месяц величина ежемесячного увеличения вклада превысит 
        30 руб.;<br>
        б) через сколько месяцев размер вклада превысит 1200 руб.<br>

        </p>
        <p class="solution">Решение:</p>

        <?php
            $billInBank = 1000;
            $rateInMonth = $billInBank * 0.02;
            $totalBillInMonth = $billInBank + $rateInMonth;
            $month = 3;
            $mess = null;


            while ($rateInMonth < 30) {
                $month += 1;
                $billInBank = $billInBank + $rateInMonth;
                $totalBillInMonth = $billInBank + $rateInMonth;
                $rateInMonth = $billInBank * 0.02;
                $mess = "a) через $month месяца" . "<br>";
            }

            echo $mess;
        ?>

        <?php
            $billInBank = 1000;
            $rateInMonth = $billInBank * 0.02;
            $totalBillInMonth = $billInBank + $rateInMonth;
            $month = 3;
            $mess = null;


            while ($totalBillInMonth < 1200) {
                $month += 1;
                $billInBank = $billInBank + $rateInMonth;
                $totalBillInMonth = $billInBank + $rateInMonth;
                $rateInMonth = $billInBank * 0.02;
                $mess = "б) через $month месяцев";
            }

            echo $mess;
        ?>
    </div>


        <p class="condition"><span class="bold">6.99.</span> 
        Начав тренировки, лыжник в первый день пробежал 10 км. Каждый следующий день он увеличивал пробег на 10% от пробега предыдущего дня. Определить:<br>
        а) в какой день он пробежит больше 20 км;<br>
        б) в какой день суммарный пробег за все дни превысит 100 км
        </p>
        <p class="solution">Решение:</p>

        <?php
            $distancePerDay = 10;
            $day = 1;
            $mess = null;

            while ($distancePerDay <= 20) {
                $day += 1;
                $increaseInDistancePerDay = $distancePerDay * 0.1;
                $distancePerDay = $distancePerDay + $distancePerDay * 0.1;
                 $mess = "а) в $day день" . "<br>";
            }

            echo $mess;
        ?>

        <?php
            $distancePerDay = 10;
            $distanceAllDays = $distancePerDay;
            $day = 1;
            $mess = null;

            while ($distanceAllDays <= 100) {
                $day += 1;
                $increaseInDistancePerDay = $distancePerDay * 0.1;
                $distancePerDay = $distancePerDay + $distancePerDay * 0.1;
                $distanceAllDays = $distanceAllDays + $distancePerDay;
                $mess = "а) в $day день";
            }

            echo $mess;
        ?>
    </div> 



    <div>
        <p class="condition"><span class="bold">6.100.</span> 
        В некотором году (назовем его условно первым) на участке в 100 гектаров средня урожайность ячменя составила 20 центнеров с гектара. После этого каждый год площадь участка увеличивалась на 5%, а средняя урожайность на 2%. Определить:<br>
    а) в каком году урожайность превысит 22 центнера с гектара;<br>
    б) в каком году площадь участка станет больше 120 гектаров;<br>
    в) в каком году общий урожай, собранный за все время, начиная с первого года, превысит 800 центнеров.<br>
        </p>
        <p class="solution">Решение:</p>

        <?php 
            $year = 1; 
            $area = 100;
            $yieldOfCentnersPerHectare = 20;
            $mess = null;

            while ($yieldOfCentnersPerHectare <= 22) {
                $year += 1;
                $yieldOfCentnersPerHectare = $yieldOfCentnersPerHectare + ($yieldOfCentnersPerHectare * 0.02);

                $mess = "а) $year " . "<br>";
            }

            echo $mess;
        ?>

        <?php 
            $year = 1;
            $area = 100;
            $yieldOfCentnersPerHectare = 20;
            $mess = null;

            while ($area <= 120) {
                $year += 1;
                $area = $area + ($area * 0.05);

                $mess = "б) $year " . "<br>";
            }

            echo $mess;
        ?>

        <?php 
            $year = 1;
            $area = 100;
            $yieldOfCentnersPerHectare = 20;
            $yieldAllYears - null;
            $mess = null;

            while ($yieldAllYears <= 100) {
                $year += 1;
                $yieldOfCentnersPerHectare = $yieldOfCentnersPerHectare + ($yieldOfCentnersPerHectare * 0.02);
                $yieldAllYears = $yieldOfCentnersPerHectare + $yieldOfCentnersPerHectare;

                $mess = "в) $year " . "<br>";
            }

            echo $mess;
        ?>
    </div>

    <div>
        <p class="condition"><span class="bold">8.1.</span> 
            Напечатать числа в виде следующей таблицы:
        </p>
        <p class="solution">Решение:</p>

        <table class="large-tab">
            <tr>
                <td>а)<br>
                    <?php
                        for ($i = 1; $i < 5; $i++) {
                            for ($j = 1; $j <= 6; $j++) {
                                echo 5 . " ";
                            }
                            echo "<br>";
                        }
                    ?>
                </td>

                <td>б)<br>
                    <?php
                        for ($i = 1; $i <= 4; $i++) {
                            for ($j = 1; $j <= 10; $j++) {
                                echo $j . " ";
                            }
                            echo "<br>";
                        }
                    ?>
                </td>

                <td>в)<br>
                    <?php
                        for ($i = 41; $i <= 80; $i = $i + 10) {
                            for ($j = $i; $j < ($i + 10); $j++) {
                                echo $j . " ";
                            }
                            echo "<br>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <div>
        <p class="condition"><span class="bold">8.2.</span> 
            Напечатать числа в виде следующей таблицы:
        </p>
        <p class="solution">Решение:</p>

        <table >
            <tr>
                <td>а)<br>
                    <?php
                        for ($i = 1; $i <= 5; $i++) {
                            for ($j = 1; $j <= $i; $j++) {
                                echo 5 . " ";
                            }
                            echo "<br>";
                        }
                    ?>
                </td>

                <td>б)<br>
                    <?php
                        for ($i = 5; $i >= 1; $i--) {
                            for ($j = 1; $j <= $i; $j++) {
                                echo 1 . " ";
                            }
                            echo "<br>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <div>
        <p class="condition"><span class="bold">8.3.</span> 
            Напечатать числа в виде следующей таблицы:
        </p>
        <p class="solution">Решение:</p>

        <table>
            <tr>
                <td>а)<br>
                    <?php
                        for ($i = 1; $i <= 5; $i++) {
                            for ($j = 1; $j <= $i; $j++) {
                                echo $i . " ";
                            }
                            echo "<br>";
                        }
                    ?>
                </td>

                <td>б)<br>
                    <?php
                        $num = 4;
                        for ($i = 5; $i <= 9; $i++) {
                            for ($j = $num; $j >= 1; $j--) {
                                echo $i . " ";
                            }

                            $num--;
                            echo "<br>";
                        }

                    ?>
                </td>
            </tr>
            <tr>
                <td>в)<br>
                    <?php
                    $num = 10;
                        for ($i = 1; $i <= 5; $i++) {
                            for ($j = 1; $j <= $i; $j++) {
                                echo $num . " ";
                            }
                            echo "<br>";
                            $num = $num + 10;
                        }
                    ?>
                </td>

                <td>г)<br>
                    <?php
                        $num = 5;
                        for ($i = 5; $i <= 25; $i = $i + 5) {
                            for ($j = 1; $j <= $num; $j++) {
                                echo $i . " ";
                            }

                            $num--;
                            echo "<br>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <div>
        <p class="condition"><span class="bold">8.4.</span> 
            Напечатать числа в виде следующей таблицы:
        </p>
        <p class="solution">Решение:</p>

        <table>
            <tr>
                <td>а)<br>
                    <?php
                        for ($i = 0; $i <= 4; $i++) {
                            for ($j = $i; $j >= 0; $j--) {
                                echo  $j . " ";
                            }
                            echo "<br>";
                        }
                    ?>
                </td>

                <td>б)<br>
                    <?php
                        for ($i = 6; $i >= 2; $i--) {
                            for ($j = $i; $j >= 2; $j--) {
                                echo $j . " ";
                            }
                            echo "<br>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>в)<br>
                    <?php
                        for ($i = 30; $i >= 26; $i--) {
                            for ($j = $i; $j <= 30; $j++) {
                                echo $j . " ";
                            }
                            echo "<br>";
                        }
                        
                    ?>
                </td>
                <td>г)<br>
                    <?php
                        $num = 24;
                        for ($i = 20; $i >= 16; $i--) {
                            for ($j = $i; $j <= $num; $j++) {
                                echo $j . " ";
                            }
                            echo "<br>";
                           $num = $num - 2;
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <div>
        <p class="condition"><span class="bold">8.5.</span> 
         Напечатать полную таблицу сложения в виде:
        </p>
        <p class="solution">Решение:</p>
            <?php
                echo "<table class='xxl-tab'>";
                for ($i = 1; $i <= 9; $i++ ) {
                    echo "<tr class='xxl-col'>";
                        echo "<td>";
                            for ($j = 1; $j <= 9; $j++) {
                                echo  "$i + $j = " . ($i + $j) . "<br>";
                            }
                        echo "</td>";
                    echo "</tr>";
                }
                echo "</table>"; 
            ?>
    </div>

    <div>
        <p class="condition"><span class="bold">8.6.</span> 
         Напечатать полную таблицу сложения в виде:
        </p>
        <p class="solution">Решение:</p>
            <?php
                echo "<table class='xxl-tab'>";
                for ($i = 1; $i <= 9; $i++ ) {
                    echo "<tr class='xxl-col'>";
                        echo "<td>";
                            for ($j = 1; $j <= 9; $j++) {
                                echo  "$j + $i = " . ($j + $i) . "<br>";
                            }
                        echo "</td>";
                    echo "</tr>";
                }
                echo "</table>"; 
            ?>
    </div>

    <div>
        <p class="condition"><span class="bold">8.8.</span> 
         Напечатать полную таблицу сложения в виде:
        </p>
        <p class="solution">Решение:</p>
            <?php
                echo "<table class='xxl-tab'>";
                for ($i = 1; $i <= 9; $i++ ) {
                    echo "<tr class='xxl-col'>";
                        echo "<td>";
                            for ($j = 1; $j <= 9; $j++) {
                                echo  "$i x $j = " . ($i * $j) . "<br>";
                            }
                        echo "</td>";
                    echo "</tr>";
                }
                echo "</table>"; 
            ?>
    </div>

    <div>
        <p class="condition"><span class="bold">8.7.</span> 
         Напечатать полную таблицу сложения в виде:
        </p>
        <p class="solution">Решение:</p>
            <?php
                echo "<table class='xxl-tab'>";
                for ($i = 1; $i <= 9; $i++ ) {
                    echo "<tr class='xxl-col'>";
                        echo "<td>";
                            for ($j = 1; $j <= 9; $j++) {
                                echo  "$j x $i = " . ($j * $i) . "<br>";
                            }
                        echo "</td>";
                    echo "</tr>";
                }
                echo "</table>"; 
            ?>
    </div>

    <div>
        <p class="condition"><span class="bold">4.65.</span> 
        Год является високосным, если его номер кратен 4, однако из кратных 100 
        високосными являются лишь кратные 400, например, 1700, 1800 и 1900 — невисокосные года, 2000 — високосный. Дано натуральное число n. Определить, является ли високосным год с таким номером.
        </p>
        <p class="solution">Решение:</p>
        <?php 
            $year = 2021;
            $mess = null;

            if ($year % 4 == 0 ) {
                if ($year % 100 != 0) {
                    $mess = "высокосный";
                } else {
                    $mess = "Не высокосный";
                }
            } $mess = "Не высокосный";

            echo $mess;
        ?>
    </div>


</body>
</html>