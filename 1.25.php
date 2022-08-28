<?php
/*Среди      заданной      последовательности      натуральных      чисел    n0 ,n1,...,nm
найти  сумму  и  количество  тех  чисел,  которые  равны  сумме  факториалов своих цифр.   */

$numStart = 2;
$numStop = 1255;
$count = 0;
$sumNumber = 0;

for ($i = $numStart; $i < $numStop; $i++)
{
    $num = $i;
    $sum = 0;

    while ($num != 0) {
        $lastNum = $num % 10;
        $num = intdiv($num, 10);
        $factorial = 1;
        for ($j = 2; $j < $lastNum; $j++)
        {
            $factorial *= $j;
        }
        $sum += $factorial;
    }
    if ($sum == $i) {
        $sumNumber += $sum;
        $count++;
    }
}
echo "Количество цифр : $count, их сумма $sumNumber";

