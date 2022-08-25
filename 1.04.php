<?php
/*Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.*/

for ($i = 1000; $i < 9999; $i += 2) {
    $num = $i;
    $flag = true;
    while ($num != 0) {
        $lastNum = $num % 10;
        $num = intdiv($num, 10);

        $numCheck = $num;
        while ($numCheck != 0) {
            $lastNumTwo = $numCheck % 10;
            if ($lastNum <= $lastNumTwo) {
                $flag = false;
            }
            $numCheck = intdiv($numCheck, 10);
        }
    }
    $d = $i;
    $numTwo = $i;
    $flagTwo = true;
    while ($numTwo != 0) {
        $lastNum = $numTwo % 10;
        $numTwo = intdiv($numTwo, 10);

        $numCheckRev = $numTwo;
        while ($numCheckRev != 0) {
            $lastNumTwo = $numCheckRev % 10;
            if ($lastNum >= $lastNumTwo) {
                $flagTwo = false;
            }
            $numCheckRev = intdiv($numCheckRev, 10);
        }
    }
    if ($flag) {
        echo "$i\n";

    }
    if($flagTwo){
        echo "$d\n";
    }
}
