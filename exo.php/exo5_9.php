<?php



function returnMoney()
{
    $amount = 0;
    $count = 0;
    $count5 = 0;
    $count1 = 0;
    do {
        ($amount > 0);
        if ($amount >= 10) {
            echo ("10 €");
            $amount = $amount - 10;
        } else if ($amount >= 5) {
            echo ("5 €");
            $amount = $amount - 5;
        } else {
            echo ("1 €");
            $amount = $amount - 1;
        }
    } while ($amount != 0);
    echo ("$count bills of 10,$count5 bill of 5,$count1 coins of 1");
}



$sum = 0;
do {
    $thisprice = readline("enter price ");
    $sum = $sum + $thisprice;
} while ($thisprice != 0);
echo ("The sum is  $sum ");

$thispayement = readline("enter payment ");
$thisReturn = $thispayement - $sum;


returnMoney($thisReturn);
