<?php

/*В  каждой  строке  массива  А(N, М)  поменять  местами  максимальный и минимальный элементы .  */
$array = [
    [1, 2, 11, 4],
    [1, 2, 3, 5],
    [3, 2, 1, 6],
    [8, 10, 3, 2]
];

$indexMaxOne = 0;
$indexMaxTwo = 0;
$indexMinOne = 0;
$indexMinTwo = 0;
for ($i = 0; $i < count($array); $i++)
{
    $min = $array[$i][0];
    $max = $array[$i][0];

    for ($j = 0; $j < count($array[$i]); $j++)
    {
        if ($array[$i][$j] >= $max) {
            $max = $array[$i][$j];
            $indexMaxOne = $i;
            $indexMaxTwo = $j;
        }
        if ($array[$i][$j] <= $min) {
            $min = $array[$i][$j];
            $indexMinOne = $i;
            $indexMinTwo = $j;
        }
    }
    $temp = $array[$indexMaxOne][$indexMaxTwo];
    $array[$indexMaxOne][$indexMaxTwo] = $array[$indexMinOne][$indexMinTwo];
    $array[$indexMinOne][$indexMinTwo] = $temp;
}
print_r($array);
