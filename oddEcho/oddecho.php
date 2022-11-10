<?php
$file =fopen("1.in","r+");
$words = array();
while(fscanf($file, "%s", $word)){
    array_push($words, $word);   
}
$newArr = array();
for($i=0;$i<count($words);$i++){
    if(!($i % 2 === 0)){
        array_push($newArr,$words[$i]);
    }
}
// print_r($newArr); 
echo $result = implode("\n",$newArr);   
fprintf($file, "\n%s",$result);