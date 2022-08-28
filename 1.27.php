<?php

/*Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой простых делителей .  */
$numStart = 1;
$numStop = 24;
$max = 0;
$sum = 0;
for ($i = $numStart; $i < $numStop; $i++)
{
    $num = $i;
    $stepCheck = 2;
    while ($num > 1) {
        if ($num % $stepCheck == 0) {
            if ($stepCheck != $i) {
                $sum += $stepCheck;
            }
            $num /= $stepCheck;
        } elseif ($stepCheck == 2) {
            $stepCheck++;
        } else {
            $stepCheck += 2;
        }
    }

    if ($sum >= $max) {
        $max = $sum;
        $numMax = $i;
    }
    $sum = 0;
}
echo "Число -> $i с суммой простых делителей $max";