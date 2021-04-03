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
    <h1>ДЗ №4, часть 1, Двумерные массивы, 12</h1>
    <h2>Задачи 12.1 -- 12.8</h2>




    <div>
        <p class="condition"><span class="bold">12.1.</span> 
 Дан двумерный массив.<br>
а) Вывести на экран элемент, расположенный в правом верхнем углу массива.<br>
б) Вывести на экран элемент, расположенный в левом нижнем углу массива.<br>

        </p>
        <p class="solution">Решение:</p>

        <?php

            function createTwoLevelArrayWithNumbers($column, $line, $start, $step) {
                for($i = 0; $i < $column; $i++) {
                    $arr[$i] = [];
                    for($j = 0; $j < $line; $j++) {
                        $arr[$i][$j] = $start;
                        $start = $start + $step;
                    }
                }
                return $arr;
            }

            function outputArray($arr) {
                echo "<pre>";
                    var_export($arr);
                echo "<pre>";
            }


            function getElementOfArray($arr, $column, $line) {
                return $arr[$column][$line];
            }

            $numbersArr = createTwoLevelArrayWithNumbers(3, 5, 1, 1);
            $elemOfArrA = getElementOfArray($numbersArr, 0, count($numbersArr[0])-1);
            $elemOfArrB = getElementOfArray($numbersArr, count($numbersArr)-1, 0);
        ?>
        <p>
            <?php 
                outputArray($elemOfArrA);
                outputArray($elemOfArrB);
            ?>
        </p>
    </div>  



    <div>
        <p class="condition"><span class="bold">12.2.</span> 
 Дан двумерный массив.<br>
а) Вывести на экран элемент, расположенный в правом нижнем углу массива.<br>
б) Вывести на экран элемент, расположенный в левом верхнем углу массива.<br>

        </p>
        <p class="solution">Решение:</p>
        <?php
             $numbersArr = createTwoLevelArrayWithNumbers(3, 5, 1, 1);
             $elemOfArrA = getElementOfArray($numbersArr, count($numbersArr)-1, count($numbersArr[0])-1);
             $elemOfArrB = getElementOfArray($numbersArr, 0, 0);
        ?>

        <p>
            <?php
                outputArray($elemOfArrA);
                outputArray($elemOfArrB);
            ?>
        </p>
    </div> 


    <div>
        <p class="condition"><span class="bold">12.3.</span> 
 Дан двумерный массив.<br>
а) вывода на экран любого элемента второй строки массива;<br>
б) вывода на экран любого элемента массива.<br>

        </p>
        <p class="solution">Решение:</p>
        <?php
            $numbersArr = createTwoLevelArrayWithNumbers(4, 5, 1, 1);
            $idx = rand(0, count($numbersArr[1]) -1);
            $idxColumn = rand(0, count($numbersArr) -1);
            $idxRow = rand(0, $idxColumn);
            $elemOfArrA = getElementOfArray($numbersArr, 2, $idx);
            $elemOfArrB = getElementOfArray($numbersArr, $idxColumn, $idxRow);
        ?>

        <p>
            <?php
                outputArray($elemOfArrA);
                outputArray($elemOfArrB);
            ?>
        </p>
    </div>


    <div>
        <p class="condition"><span class="bold">12.4.</span> 
 Дан двумерный массив.<br>
а) вывода на экран любого элемента третьего столбца массива;<br>
б) вывода на экран любого элемента массива.<br>

        </p>
        <p class="solution">Решение:</p>
        <?php

            $numbersArr = createTwoLevelArrayWithNumbers(4, 5, 1, 1);

            function getAnyElementOfColumnInArray($arr, $column) {
                $lengthArr = count($arr) - 1;
                $newArr = [];
                for ($i = 0; $i <= $lengthArr; $i++ ) {
                    $newArr[] = $arr[$i][$column - 1];
                }

                $ndxNewArr = rand(0, count($newArr) - 1);
                return $newArr[$ndxNewArr];
            }


            $idxColumn = rand(0, count($numbersArr) -1);
            $idxRow = rand(0, $idxColumn);

            $elemOfArrA = getAnyElementOfColumnInArray($numbersArr, 3);
            $elemOfArrB = getElementOfArray($numbersArr, $idxColumn, $idxRow);
        ?>

        <p>
            <?php 
                outputArray($elemOfArrA);
                outputArray($elemOfArrB);
            ?>
        </p>
    </div>



    <div>
        <p class="condition"><span class="bold">12.5.</span> 
 Дан двумерный массив.<br>
а) все элементы пятой строки массива;<br>
б) все элементы s-го столбца массива.<br>

        </p>
        <p class="solution">Решение:</p>

        <?php
            function getAllElementsOfString($arr, $string) {
                return $arr[$string -1];
            }

            function getAllElementsOfColumnInArray($arr, $column) {
                $lengthArr = count($arr) - 1;
                $newArr = [];
                for ($i = 0; $i <= $lengthArr; $i++ ) {
                    $newArr[] = $arr[$i][$column - 1];
                }

                return $newArr;
            }

            $numbersArr = createTwoLevelArrayWithNumbers(6, 5, 1, 1);
            $elem = getAllElementsOfString($numbersArr, 5);

            $s = 2;
            $allElementsInColumn = getAllElementsOfColumnInArray($numbersArr, $s);

        ?>

        <p>
            <?php
                outputArray($elem);
                outputArray($allElementsInColumn);
            ?>
        </p>
    </div>

 

    <div>
        <p class="condition"><span class="bold">12.6.</span> 
 Дан двумерный массив.<br>
а) все элементы второго столбца массива;<br>
б) все элементы m-й строки массива.
<br>

        </p>
        <p class="solution">Решение:</p>
        <?php
            $m = 3;
            $numbersArr = createTwoLevelArrayWithNumbers(6, 5, 1, 1);
            $allElementsInColumn = getAllElementsOfColumnInArray($numbersArr, 2);
            $elem = getAllElementsOfString($numbersArr, $m);
        ?>

        <p>
            <?php
                outputArray($allElementsInColumn);
                outputArray($elem);
            ?>
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

            $numbersArr = createTwoLevelArrayWithNumbers(6, 5, 1, 1);

            function changedOnePositionInArr($arr, $change, $position) {
                $error = null;
                
                $TEXT_ERROR = [
                    "not Arr" => "Передан не массив",
                    "empty array" => "Передан пустой массив",
                    "not arr for position" => "Передан не массив для позиции элемента",
                    "missing item for position" => "Не хватает элемента для определения позиции",
                ];


                if (!is_array($arr)) {
                    $error = $TEXT_ERROR["not Arr"];
                }

                if (count($arr) == 0) {
                    $error = $TEXT_ERROR["empty array"];
                }

                if (!is_array($position)) {
                    $error = $TEXT_ERROR["not arr for position"];
                }

                if (count($position) > 2) {
                    $error = $TEXT_ERROR["missing item for position"];
                }

                if(!is_null($error)) {
                    return $error;
                } else {
                    $arr[$position[0]][$position[1]] = $change;
                    return $arr;
                }
            }

            $idx = rand(0, count($numbersArr[5]) -1);

            $a = 55555;
            $idxColumn = rand(0, count($numbersArr) -1);
            $idxRow = rand(0, $idxColumn);


            $positionA = [5, $idx];
            $positionB = [$idxColumn, $idxRow];

            $arrWithChangeA = changedOnePositionInArr($numbersArr, 1949, $positionA);
            $arrWithChangeB = changedOnePositionInArr($numbersArr, $a, $positionA);

            outputArray($arrWithChangeA);
            outputArray($arrWithChangeB);

        ?>
    </div>



    <div>
        <p class="condition"><span class="bold">12.8.</span> 
Составить программу:<br>
а) заменяющую значение любого элемента второго столбца двумерного массива числом 13;<br>
б) заменяющую значение любого элемента двумерного массива числом b.<br>


        </p>
        <p class="solution">Решение:</p>
        <?php

            $numbersArr = createTwoLevelArrayWithNumbers(6, 5, 1, 1);

            function changedElementInColumnOfArr($arr, $change, $column) {
                $lengthArr = count($arr) - 1;
                $randomIdx = rand(0, count($arr[$column]) - 1);
                for ($i = 0; $i <= $lengthArr; $i++ ) {
                    $arr[$column - 1][$randomIdx] = $change;

                    return $arr;
                }
            }

            $b = 7777777;
            $idxColumn = rand(0, count($numbersArr) -1);
            $idxRow = rand(0, $idxColumn);
            $position = [$idxColumn, $idxRow];

            $arrWithChangedElemA = changedElementInColumnOfArr($numbersArr, 13, 2);
            $arrWithChangedElemB = changedOnePositionInArr($numbersArr, $b, $position);

        ?>
        <p>
            <?php
                outputArray($arrWithChangedElemA);
                outputArray($arrWithChangedElemB); 
            ?>
        </p>
    </div>
</body>
</html>