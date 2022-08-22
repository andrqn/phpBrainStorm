<?php
/*Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.*/

echo "Четные четырехзначные числа в порядке возрастания\n";
for ($i = 1000; $i < 10000; $i++)
{
    $firstNum = ($i - ($i % 1000)) / 1000;
    $secondNum = (($i % 1000) - ($i % 100)) / 100;
    $thirdNum = (($i % 100) - $i % 10) / 10;
    $lastNum = $i % 10;
    if (($i % 2 == 0) && ($firstNum < $secondNum) && ($secondNum < $thirdNum) && ($thirdNum < $lastNum)) {
        echo "$i \n";
    }
}
echo "Четные четырехзначные числа в порядке убывания\n";
for ($i = 10000; $i > 999; $i--)
{
    $firstNum = ($i - ($i % 1000)) / 1000;
    $secondNum = (($i % 1000) - ($i % 100)) / 100;
    $thirdNum = (($i % 100) - $i % 10) / 10;
    $lastNum = $i % 10;
    if (($i % 2 == 0) && ($firstNum > $secondNum) && ($secondNum > $thirdNum) && ($thirdNum > $lastNum)) {
        echo "$i \n";
    }
}