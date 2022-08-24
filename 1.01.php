<?php
/*Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N.*/

$num = 12333;
$countNum = 0;
while ($num != 0) {
    $lastNum = $num % 10;
    if ($lastNum < 5) {
        $countNum++;
    }
    $num = intdiv($num, 10);
}
echo "Чисел меньше 5 : $countNum";
