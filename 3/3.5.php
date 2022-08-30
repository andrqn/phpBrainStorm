<?php
/*В массиве А(N,М) найти сумму элементов тех столбцов, все элементы которых кратны заданному числу р .  */

$array = [
    [4, 2, 1, 4],
    [8, 3, 2, 6, 6],
    [2, 1, 1, 4, 9, 10]
];
$p = 2;
for ($i = 0; $i < count($array[0]); $i++)
{
    $sum = 0;
    $count = 0;
    for ($j = 0; $j < count($array); $j++)
    {
        if ($array[$j][$i] % $p == 0) {
            $count++;
        }
    }
    if ($count == count($array)) {
        for ($k = 0; $k < count($array); $k++) {
            $sum += $array[$k][$i];
        }
        echo "Столбец -> $i\n Сумма -> $sum\n";
    }
}

