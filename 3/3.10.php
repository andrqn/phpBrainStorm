<?php
/*В каждой строке массива А(N,М) найти и удалить максимальные  элементы.  */

$array = [
    [-32, -4, 5],
    [-41, 5, 6, 7],
    [-18, 2, 4, 5]
];
for ($i = 0; $i < count($array); $i++)
{

    $arraySecond = array();

    for ($j = 0; $j < count($array[$i]); $j++)
    {
        $max = 0;
        if ($array[$i][$j] > $max) {
            $max = $array[$i][$j];
        }
        for ($k = 0; $k < count($array[$i]) - 1; $k++) {
            if ($array[$i][$k] != $max) {
                $arraySecond[$k] = $array[$i][$k];
            }
        }
    }
    $array[$i] = $arraySecond;
}
print_r($array);