<?php
$c = 0;
$chars = "";
$digits = 0;
$f=fopen("example.01.in","r+");
while(fscanf($f,"%s",$row)){
    if($c===0){
        $chars = $row;
    }else if($c === 1 ){
        $digits = $row;
    }
}
echo $digits." ".$chars;