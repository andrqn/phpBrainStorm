<?php

/*Даны  натуральные  числа  N  и  M . Определить,  являются  ли  они  взаимно простыми числами .
Взаимно простые числа не имеют общих делителей, кроме единицы .  */

$numFirst = 8;
$numSecond = 16;

while ($numFirst != $numSecond) {
    if ($numFirst > $numSecond) {
        $numFirst -= $numSecond;
    } else {
        $numSecond -= $numFirst;
    }
}
if($numFirst==1){
    echo "Числа являются взаимопростыми";
}
else{
    echo "Числа не являются взаимопростыми";
}