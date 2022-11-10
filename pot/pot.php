<?php
$file = fopen("pot.1.in","r+");
$numbers=array();
$c =0;
while(fscanf($file,"%d",$pow)){
if($c===0){
}else{
    array_push($numbers,$pow);
}
    $c++;
}
$res = array();
for($i=0;$i<count($numbers);$i++){
    $split = str_split((string)$numbers[$i]);
    $powerTo = end($split);
    $removeLastValue = array_pop($split);
    $stringNum = implode($split);
    $Pn = pow((int)$stringNum, $powerTo);
    array_push($res,$Pn);
}
$result = array_sum($res);
echo $result;