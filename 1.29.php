<?php

/*Для  каждого  числа  заданной  последовательности  натуральных   чисел   n0 ,n1,...,nm установить,
можно  ли  вычеркнуть  в  нем  некоторые  цифры, чтобы сумма оставшихся равнялась заданному числу к. */
$numStart = 1;
$numStop = 255;
$k = 5;
for ($i = $numStart; $i < $numStop; $i++)
{
    $numFirst = $i;
    $sum = 0;
    while ($numFirst != 0) {
        $lastNumber = $numFirst % 10;
        $numFirst = intdiv($numFirst, 10);
        $sum += $lastNumber;
    }

    $numSecond = $i;
    while ($numSecond != 0) {
        $lastNumberTwo = $numSecond % 10;
        $numSecond = intdiv($numSecond, 10);
        if (($sum - $lastNumberTwo) == $k && $lastNumberTwo != 0) {
            echo "Из числа $i можно вычеркнуть цифру $lastNumberTwo\n";
        }
    }
}
