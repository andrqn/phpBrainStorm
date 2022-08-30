<?php
/*
В  массиве  А(N, М)  поменять  местами  столбцы,  содержащие  максимальный и минимальный элементы .  */

$array = [
    [4, 2, 1, 4],
    [8, 3, 2, 6, 6],
    [2, 3, 1, 4, 9, 10]
];

$max = 0;
for ($i = 0; $i < count($array); $i++)
{
    $min = $array[$i][0];
    for ($j = 0; $j < count($array); $j++)
    {
        if ($array[$j][$i] < $min) {
            $min = $array[$j][$i];
            $indexMin = $i;
        } elseif ($array[$j][$i] > $max) {
            $max = $array[$j][$i];
            $indexMax = $i;
        }
    }
    for ($c = 0; $c < count($array); $c++)
    {
        $temp = $array[$c][$indexMax];
        $array[$c][$indexMax] = $array[$c][$indexMin];
        $array[$c][$indexMin] = $temp;
    }
}


print_r($array);