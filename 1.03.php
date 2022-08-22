<?php
/*Выяснить, образуют ли цифры данного натурального числа N возрастающую последовательность.*/

$num = 5;
$res = 0 ;
for ($i = 1000; $i < 10000; $i++)
{
    $firstNum = ($i - ($i % 1000)) / 1000;
    $secondNum = (($i % 1000) - ($i % 100)) / 100;
    $thirdNum = (($i % 100) - $i % 10) / 10;
    $lastNum = $i % 10;
    $sumNum = $firstNum + $secondNum + $thirdNum + $lastNum;
    if ($num == $sumNum)
    {
        if (($firstNum < $secondNum) && ($secondNum < $thirdNum) && ($thirdNum < $lastNum))
        {
            $res+=1;
        }

    }

}
if ($res > 0)
{
    echo "Цифры данного натурального числа $num образуют возрастающую последовательность.";
}
else
{
    echo "Цифры данного натурального числа $num не образуют возрастающую последовательность.";
}