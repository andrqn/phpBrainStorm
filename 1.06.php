<?php

/*Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7*/
$countZero = 0;
$countTwo = 0;
$countThree = 0;
$countSeven = 0;
$lastNum = 0;
for ($i = 1000; $i < 10000; $i++) {
    $num = $i;

    while ($num != 0) {
        $lastNum = $num % 10;
        if ($lastNum == 0) {
            $countZero++;
        }
        if ($lastNum == 2) {
            $countTwo++;
        }
        if ($lastNum == 3) {
            $countThree++;
        }
        if ($lastNum == 7) {
            $countSeven++;
        }

        $num = intdiv($num, 10);
    }
    if (($countZero == 1) && ($countTwo == 1) && ($countThree == 1) && ($countSeven == 1)) {
        echo "$i\n";
        $countZero = 0;
        $countTwo = 0;
        $countThree = 0;
        $countSeven = 0;
    } else {
        $countZero = 0;
        $countTwo = 0;
        $countThree = 0;
        $countSeven = 0;
    }
}
