<?php
/*Найти наибольший общий делитель (НОД) двух натуральных чисел N и M.   */
$numFirst = 10;
$numSecond = 90;

while ($numFirst != $numSecond) {
    if ($numFirst > $numSecond) {
        $numFirst -= $numSecond;
    } else {
        $numSecond -= $numFirst;
    }
}
echo "НОД $numFirst";