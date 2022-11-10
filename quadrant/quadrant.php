<?php
$count =0;
$file=fopen("2.in","r+");
$numbers = array();
while(fscanf($file,"%d",$input)){
    array_push($numbers,$input);
}
$x = $numbers[0];
$y = $numbers[1];
if($x > 0 && $y > 0){
    echo "1";
}else if($x < 0 && $y > 0){
    echo "2";
}else if($x < 0 && $y < 0){
    echo "3";
}else if($x > 0 && $y < 0){
    echo "4";
}