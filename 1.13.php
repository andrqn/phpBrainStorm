<?php
/*Определить, является ли число  2n  m  симметричным, т. е. запись  числа содержит четное количество цифр и
совпадают его левая и правая  половинки.  */

$num = 222022;
$countNum = $num ;
$newNum = 0;
$lastNum = 0;
$count = 0;
while ($countNum != 0)
{
    $lastNum = $countNum % 10;
    $newNum = ($newNum*10)+$lastNum;
    $countNum = intdiv($countNum, 10);
    $count++;
}

if($count % 2 == 0 && $newNum==$num) {
    echo "Число -> $num , является симметричным";

}
else{
    echo "Число -> $num , не является симметричным";

}