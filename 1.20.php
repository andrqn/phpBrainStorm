<?php

/*Найти целое число в диапазоне от N до M с наибольшей суммой  делителей.  */
$numStart = 6;
$numStop = 32;
$sumMax = 0;
for ($i = $numStart; $i <$numStop; $i++) {
    $sum = 0;
    for ($j = 1; $j < $i; $j++) {
        if ($i % $j == 0) {
            $sum += $j;
        }
    }
    if ($sum > $sumMax) {
        $sumMax = $sum;
        $maxNum = $i;
    }
}
echo "$maxNum \n";