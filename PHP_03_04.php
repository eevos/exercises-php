<?php
$looptijd = time();
$i = $looptijd + 1;
$j = 0;

while (time() < $i){
    $j++;
}


echo number_format($j,0,',','.');