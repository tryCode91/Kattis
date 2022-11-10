<?php
$c=0;
$codedString=array();
$codedchars = "";
$file = fopen("example.02.in","r+");
while(fscanf($file,"%s",$row1)){
    if($c===0){
        $codedchars = $row1;
    }else if($c===1){
        $codedString = str_split($row1,3);
    }
    $c++;
}

$chars = str_split($codedchars);
$ints = array();
for($i=0;$i<count($codedString);$i++){
    $temp = $codedString[$i] - 1;
    array_push($ints,$temp);
}
print_r($ints);
$result = array();
for($i=0;$i<=count($chars);$i++){
    
    for($j=0;$j<=count($ints);$j++){

        if(isset($chars[$i])){
            
            if(isset($ints[$j])){
            
                if($i === $ints[$j] ){

                    echo $chars[$i];
                    // array_push($result, $chars[$i]);

                }
            
            }

        }

    }
}

echo $res = implode($result);
