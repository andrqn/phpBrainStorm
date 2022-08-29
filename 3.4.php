<?php
/*В  массиве А(N,М) найти сумму тех элементов, в записи которых  используются только цифры 0, 1, 3, 8.  */
$array=[
    [1380,1,2],
    [8031,3,4,8],
    [3180,2,4,6,7]
];
$sum=0;
for($i=0;$i<count($array);$i++)
{
    $countZero=0;
    $countOne=0;
    $countThree=0;
    $countEight=0;
    for($j=0;$j<count($array[$i])-2;$j++)
    {
        $num = $array[$i][$j];

        while ($num != 0) {
            $lastNum = $num % 10;
            if ($lastNum == 0) {
                $countZero++;
            }
            if ($lastNum == 1) {
                $countOne++;
            }
            if ($lastNum == 3) {
                $countThree++;
            }
            if ($lastNum == 8) {
                $countEight++;
            }

            $num = intdiv($num, 10);
        }
        if (($countZero == 1) && ($countOne == 1) && ($countThree == 1) && ($countEight == 1)) {
            $sum+=$array[$i][$j];
            break;
        }

    }

}
echo $sum;
