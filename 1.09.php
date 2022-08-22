<?php

/*Дано  натуральное  число  N.  Определить,  является  ли  оно  автоморфным. Автоморфное число  равно последним
разрядам квадрата этого числа. Например,  5 и 25,  6 и 36,  25 и 625.*/

$number = 9376;
$squareNumber = $number * $number;
$countNumber = 0;
$checkNum = $number;

while ($checkNum != 0)
{
    $checkNum = intdiv($checkNum, 10);
    $countNumber++;
}

$num = $squareNumber % (10 ** $countNumber);

if ($number == $num) {
    echo "Является";
} else {
    echo 'Не является';
}
