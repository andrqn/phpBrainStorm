<?php

/*Элементы  столбцов  целочисленного  массива  А(N, М),
не  содержащих положительных элементов, заменить суммой их цифр . */
$array = [
    [-32, -4, 5],
    [-41, 5, 6, 7],
    [-18, 2, 1]
];
$flag = true;
for ($i = 0; $i < count($array); $i++)
{


    for ($j = 0; $j < count($array[$i]); $j++)
    {
        if ($array[$j][$i] > 0) {
            $flag = false;
            break;
        }
        if ($flag) {
            for ($k = 0; $k < count($array); $k++)
            {
                $num = $array[$k][$i];
                $sum = 0;
                while ($num != 0) {
                    $lastNum = $num % 10;
                    $sum += $lastNum;
                    $num = intdiv($num, 10);
                }
                $array[$k][$i] = $sum;
            }
        }
    }
}
print_r($array);