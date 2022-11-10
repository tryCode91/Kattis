<?php
$file = fopen("cake.in","r+");
$pieceTotalArea = array();
$row2 = array();
$counter = 0;
while(fscanf($file, "%d %d",$width, $length)){
    if($counter === 0){
        $cakeWidth = $width;
    }else if ($counter !== 1){
        $pieceArea = $width * $length;
        array_push($pieceTotalArea,$pieceArea);
    }
    $counter++;
}
    $sumArea = array_sum($pieceTotalArea);
    echo $lengthCake = $sumArea/$cakeWidth;