<?php
$file = fopen("tarifa.1.in","r+");
$net= array();
while(fscanf($file,"%d\n",$number)){
    array_push($net,$number);
}
$gotPerMonth = $net[0];
 $totalMonths = $net[1] + 1;
unset($net[0]);
unset($net[1]);
$usedPerMonth=array_sum(array_values($net));
echo $saved = ($totalMonths * $gotPerMonth) - $usedPerMonth;
