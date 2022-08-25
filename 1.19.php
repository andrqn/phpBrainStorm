<?php
/*Найти наименьшее общее кратное  (НОК)  двух натуральных чисел N и M.  */
$numFirst = 6;
$numSecond = 8;
$numOne=$numFirst;
$numTwo=$numSecond;

while ($numOne != $numTwo) {
    if ($numOne > $numTwo) {
        $numOne -= $numTwo;
    } else {
        $numTwo-= $numOne;
    }
}
$nod=($numFirst*$numSecond)/$numTwo;
echo $nod;