<?php
/*Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.*/

$num = 5;
for ($i = 1000; $i < 10000; $i++)
{
    $firstNum = ($i - ($i % 1000)) / 1000;
    $secondNum = (($i % 1000) - ($i % 100)) / 100;
    $thirdNum = (($i % 100) - $i % 10) / 10;
    $lastNum = $i % 10;
    $sumNum = $firstNum + $secondNum + $thirdNum + $lastNum;
    if ($num == $sumNum) {
        echo "$i\n";
    }
}
