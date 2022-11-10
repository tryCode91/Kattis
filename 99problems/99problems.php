<?php
$file=fopen("1.in","r+");
while(fscanf($file,"%d",$n)){
    //find closests integer that ends with 99

}
//stopp hittar värdet till 99, det kunde vara 99 också
$find = (int)$n;
$stopPos=100;
$countIndex = 0;
for( $i = $find; $i <100; $i++ ){
    if($i === 99){
       break;
    }
    $countIndex++;
}
$CINeg =0;
$diff = 99-$find;
for( $i = $find; $i <100 ; $i-- ){
    if($i === 99){
       break;
    }
    // $CINeg++;
}
echo $CINeg.$countIndex;