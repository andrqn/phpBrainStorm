<?php
/*Найти все меньшие N числа-палиндромы, которые при возведении в квадрат дают палиндром. Число называется палиндромом,
если его запись читается одинаково с начала и с конца.*/

$numCheck = 100;

for ($i=10;$i<$numCheck;$i++)
{

    $num=$i;
    $newNum=0;
    while ($num != 0)
    {
        $lastNum = $num % 10;
        $newNum = ($newNum * 10) + $lastNum;
        $num = intdiv($num, 10);

    }
    
    if (($i==$newNum)&&(($i*$i)==($newNum*$newNum))){
        echo "$i\n";
    }

}

