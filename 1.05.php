<?php
/*По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.*/

$num = 4566;
$newNum = 0;
$lastNum = 0;
while ($num != 0)
{
    $lastNum = $num % 10;
    $newNum = ($newNum * 10) + $lastNum;
    $num = intdiv($num, 10);

}
echo $newNum;
