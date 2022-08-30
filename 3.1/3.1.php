<?php

/*В  массиве  А(N,N)  найти  суммы  элементов,  расположенных  на  главной диагонали, ниже диагонали и выше диагонали.*/
$a = array(1, 2, 3);
$b = array(3, 4, 5);
$c = array(2, 4, 8);
$arr = array($a, $b, $c);
$sumFirst = 0;
$sumSecond = 0;
$sumThird = 0;

for ($i = 0; $i < count($arr[0]); $i++)
{
    for ($j = 0; $j < count($arr[0]); $j++)
    {
        if ($i == $j) {
            $sumFirst += $arr[$i][$j];
        }
        if ($i > $j) {
            $sumSecond += $arr[$i][$j];
        }
        if ($i < $j) {
            $sumThird += $arr[$i][$j];
        }
    }
}
echo "Сумма главной диагонали -> $sumFirst \n";
echo "Сумма ниже главной диагонали -> $sumSecond\n";
echo "Сумма выше главной диагонали -> $sumThird\n";
