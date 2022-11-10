<?php
$count = 0;
$file = fopen("carrots.01.in","r+");
$loop = 0;
$width = 0;
$height = 0;
$numbers=array();
while(fscanf($file,"%d %d %d", $matchesLength, $width,$height)){
    if($count === 0){
        
    }else{
        array_push($numbers,$matchesLength);
    }
    $count++;
}
$Box = sqrt($width*$width + $height*$height);
for($i=0;$i<count($numbers);$i++){
    if($Box >= $numbers[$i]){
        echo "DA";
    }else{
        echo "NE";
    }
}