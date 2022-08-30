<?php

/*В массиве А(N,М) найти максимальный и минимальный элементы  среди  всех  элементов  тех  строк,
которые  упорядочены  по  возрастанию  или по убыванию.*/


$array = [
    [7, 6, 5, 3, 2, 1],
    [4, 3, 2, 6],
    [8, 7, 6, 4, 1],
    [1, 4, 5]

];
for ($i = 0; $i < count($array); $i++)
{
    $countOne = 0;
    $countTwo = 0;
    $min = $array[$i][0];
    $max = $array[$i][0];
    for ($j = 0; $j < count($array[$i]) - 1; $j++)
    {
        if ($array[$i][$j] < $array[$i][$j + 1]) {
            $countOne++;
        }
        if (($array[$i][$j] > $array[$i][$j + 1])) {
            $countTwo++;
        }
    }
    if ($countOne == count($array[$i]) - 1 || $countTwo == count($array[$i]) - 1) {
        for ($k = 0; $k < count($array[$i]); $k++)
        {
            if ($array[$i][$k] > $max) {
                $max = $array[$i][$k];
            }
            if ($array[$i][$k] < $min) {
                $min = $array[$i][$k];
            }
        }
        echo "В строке $i минимальное число - $min , максимальное число - $max \n";
    }
}
