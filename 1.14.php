<?php
/*Парными  простыми числами называются два простых числа, разность  которых равна двум.
Например,  3 и 5; 11 и 13. Найти 10  парных  простых чисел.  */

$countNum = 0;
$countCheck=0;
$countCheckTwo=0;
while ($countCheck!=10){

    for($i=3;$countCheck!=10;$i++){
        $numTwo=$i+2;
        for($j=1;$j<$i;$j++){
            if($i%$j==0 ){
                $countNum++;
            }
            if($numTwo%$j==0){
                $countCheckTwo++;
            }

        }
        if($countNum<2 && $countCheckTwo<2){
            echo "$i и $numTwo \n";
            $countCheck++;

        }
        $countNum=0;
        $countCheckTwo=0;
    }

}