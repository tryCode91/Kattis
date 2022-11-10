<?php
$file = fopen("1.in","r+");
$preDot = array();
$postDot = array();

$c =0;
while(fscanf($file,"%s %s\n",$num1,$num2)){
    if($c===0){
    }else{
        array_push($preDot,$num1);
        array_push($postDot,$num2);
    }
    $c++;
}
$sumProduct = 0;
for($i=0;$i<count($preDot);$i++){
    $pre = (float)$preDot[$i];
    $post = (float)$postDot[$i];
    $product = $pre * $post;
    $sumProduct +=$product;
}
echo $sumProduct;