<?php

/*В  массиве  А(N, N)  поменять  местами  максимальные  элементы  нижнего и верхнего треугольников
относительно главной диагонали .  */

$array = [
    [1, 2, 11, 4],
    [1, 2, 3, 5],
    [3, 2, 1, 6],
    [8, 10, 3, 2]
];
$max = 0;
$indexMaxOne = 0;
$indexMaxTwo = 0;
$maxTwo = 0;
$indexMaxFirst = 0;
$indexMaxSecond = 0;
for ($i = 0; $i < count($array[0]); $i++)
{
    for ($j = 0; $j < count($array[0]); $j++)
    {
        if ($i > $j) {
            if ($array[$i][$j] > $max) {
                $max = $array[$i][$j];
                $indexMaxOne = $i;
                $indexMaxTwo = $j;
            }
        }

        if ($i < $j) {
            if ($array[$i][$j] > $maxTwo) {
                $maxTwo = $array[$i][$j];
                $indexMaxFirst = $i;
                $indexMaxSecond = $j;
            }
        }
    }
}
$temp = $array[$indexMaxFirst][$indexMaxSecond];
$array[$indexMaxFirst][$indexMaxSecond] = $array[$indexMaxOne][$indexMaxTwo];
$array[$indexMaxOne][$indexMaxTwo] = $temp;

print_r($array);