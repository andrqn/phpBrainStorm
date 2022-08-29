<?php
/*В  массиве  А(N,М)  найти  номер  строки,
среднее  арифметическое  положительных элементов которой является наименьшим.  */

$array = [
    [1, 2, 3, 4, -2, 10],
    [2, 8, 6, 5, 3, -4],
    [3, 4, -8, -2,]
];
$sum = 0;
$sumTemp = 0;
$index = 0;

for ($i = 0; $i < count($array); $i++)
{
    $sum = 0;
    $count = 0;
    $midSum = 0;
    for ($j = 0; $j < count($array[$i]); $j++)
    {
        if ($array[$i][$j] > 0) {
            $sum += $array[$i][$j];
            $count++;
        }
    }
    $midSum = $sum / $count;
    if ($i == 0) {
        $sumTemp = $midSum;
        $index = $i;
    } elseif ($sumTemp > $midSum) {
        $sumTemp = $midSum;
        $index = $i;
    }
}
echo "Номер строки -> $index .\nМинимальная сумма положительных элементов -> $sumTemp .";