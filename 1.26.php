<?php

/*Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой делителей.  */
$numStart = 1;
$numStop = 24;
$max = 0;
$sum = 0;
for ($i = $numStart; $i < $numStop; $i++)
{
    $num = $i;
    for ($j = 1; $j < $num; $j++)
    {
        if ($i % $j == 0) {
            $sum += $j;          
        }
    }
    if ($sum >= $max) {
        $max = $sum;
    }
    $sum = 0;
}
echo $max;
