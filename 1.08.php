<?php
/*Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр.*/
for ($i = 1000; $i < 10000; $i++)
{
    $firstNum = ($i - ($i % 1000)) / 1000;
    $secondNum = (($i % 1000) - ($i % 100)) / 100;
    $thirdNum = (($i % 100) - $i % 10) / 10;
    $lastNum = $i % 10;
    if ((($firstNum !=$secondNum)&&($firstNum != $thirdNum)&&($firstNum!=$lastNum)&&($secondNum!=$lastNum)&&
        ($secondNum!=$thirdNum)&&($thirdNum!=$lastNum)))
    {
        echo "$i \n";
    }
}