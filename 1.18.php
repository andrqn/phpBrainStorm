<?php

/*Два  натуральных  числа  называют  дружественными,  если  каждое  из них равно сумме всех делителей другого.
Найти все пары дружественных чисел, лежащих в диапазоне от N до M.  */

$numStart = 2;
$numStop = 2000;

for ($i = $numStart; $i < $numStop; $i++)
{
    $sum = 0;

    for ($j = 1; $j < $i; $j++)
    {
        if ($i % $j == 0) {
            $sum += $j;
        }
    }

    $numTwo = $sum;
    $sumTwo = 0;

    for ($c = 1; $c < $numTwo; $c++)
    {
        if ($numTwo % $c == 0) {
            $sumTwo += $c;
        }
    }

    if ($i == $sumTwo && $i < $numTwo) {
        echo "$i--$numTwo\n";
    }
}
