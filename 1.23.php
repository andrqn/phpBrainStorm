<?php

/*Дано  целое  число  N.  Преобразовать  число  так, чтобы его цифры
следовали в порядке возрастания.  */


$num = 1322;
$lastNum = $num % 10;
$num = intdiv($num, 10);
$numTwo = 0;

while ($num != 0) {
    if ($num % 10 > $lastNum % 10) {
        $lastNum = ($lastNum * 10) + $num % 10;
    } else {
        while (($num % 10 < $lastNum % 10) && ($lastNum >= 0)) {
            $numTwo = ($numTwo * 10) + $lastNum % 10;
            $lastNum = intdiv($lastNum, 10);
        }

        $lastNum = ($lastNum * 10) + ($num % 10);

        while ($numTwo != 0) {
            $lastNum = ($lastNum * 10) + ($numTwo % 10);
            $numTwo = intdiv($numTwo, 10);
        }
    }

    $num = intdiv($num, 10);
}

echo $lastNum;