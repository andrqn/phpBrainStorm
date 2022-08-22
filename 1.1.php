<?php
/*Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N.*/

$num = 1255;
$firstNum = ($num - ($num % 1000)) / 1000;
$secondNum = (($num % 1000) - ($num % 100)) / 100;
$thirdNum = (($num % 100) - $num % 10) / 10;
$lastNum = $num % 10;
$countNum = 0;

if ($firstNum < 5) {
    $countNum++;
}
if ($secondNum < 5) {
    $countNum++;
}
if ($thirdNum < 5) {
    $countNum++;
}
if ($lastNum < 5) {
    $countNum++;
}

echo "Чисел меньше 5 : $countNum";

?>
