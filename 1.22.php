<?php
/*Натуральное число N разложить на простые множители.  */
$number=90;
$num=$number;
$stepCheck=2;

while ($num > 1){
    if($num%$stepCheck==0){
        echo "$stepCheck\n";
        $num/=$stepCheck;
    }
    elseif ($stepCheck==2){
        $stepCheck++;
    }else{
        $stepCheck+=2;
    }
}