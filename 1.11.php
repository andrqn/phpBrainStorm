<?php
/*Напечатать   те   элементы   последовательности   натуральных   чисел n0 ,n1,...,nm ,
которые делятся на сумму своих цифр.*/

$num = 200;
$sumNum = 0;

for ($i = 1; $i < $num; $i++) {

    $d = $i;

    while ($d != 0) {
        $sumNum += $d % 10;
        $d = intdiv($d, 10);
    }

    if ($i % $sumNum == 0) {
        echo "$i\n";
    }
    
    $sumNum = 0;


}