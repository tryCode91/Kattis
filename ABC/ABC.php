<?php
$file = fopen("2.in", "r+");
$number_arr=array();
$letter_arr=array();
$counter = 0;
    $valueOfLetters=array();
while(fscanf($file, "%[^\n]s\n", $number1)===1){
    //gather value
    if($counter===0){
        $number_arr = str_split($number1);
    }else if($counter === 1){
        $letter_arr = str_split($number1);
    }    
    //find size of integers (A,B and C).
    if(!empty($number_arr) && !empty($letter_arr)){
        sort($number_arr);
        for($i=0;$i<count($number_arr);$i++){
            if($letter_arr[$i] === 'A'){
                $valueOfLetters['A'] = $number_arr[0];
            }else if($letter_arr[$i] === 'B'){
                $valueOfLetters['B'] = $number_arr[1];
            }else if($letter_arr[$i] === 'C'){
                $valueOfLetters['C'] = $number_arr[2];
            }
        }
    }
    if(!empty($valueOfLetters)){
        echo $res = implode(' ',$valueOfLetters);
        $len = fprintf($file, "\n%s",$res);
    }
    $counter++;
}
