<?php
/*Выяснить, есть ли в записи натурального числа N две одинаковые цифры.*/

$number = 123456;
$count = 0;

while ($number != 0)
{
    $lastNum = $number % 10;
    $number = intdiv($number, 10);
    $prevNum = $number % 10;
    if ($lastNum == $prevNum) {
        $count++;
    }
}
if ($count > 0) {
    echo "Есть одинаковые числа";
} else {
    echo "Нет повторяющихся чисел";
}

