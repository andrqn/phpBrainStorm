<?php
/*Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7*/
for ($i = 1000; $i < 10000; $i++)
{
    $firstNum = ($i - ($i % 1000)) / 1000;
    $secondNum = (($i % 1000) - ($i % 100)) / 100;
    $thirdNum = (($i % 100) - $i % 10) / 10;
    $lastNum = $i % 10;
    if ((($firstNum == 0) || ($firstNum == 2) || ($firstNum == 3) || ($firstNum == 7))&&
        (($secondNum == 0) || ($secondNum == 2) || ($secondNum == 3) || ($secondNum == 7))&&
        (($thirdNum == 0) || ($thirdNum == 2) || ($thirdNum == 3) || ($thirdNum == 7))&&
        (($lastNum == 0) || ($lastNum == 2) || ($lastNum == 3) || ($lastNum == 7)))
    {
        echo "$i \n";
    }
}