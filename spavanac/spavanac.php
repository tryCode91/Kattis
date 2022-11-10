<?php
$file = fopen("spavanac.1.in", "r+");
while(fscanf($file, "%d %d",$hour, $minute)){
    $wakeMinute = $minute - 45;
    $wakeHour = $hour;
    if($wakeMinute < 0){

        $wakeMinute = 60 + $wakeMinute;
        $wakeHour = $hour - 1;
        if($wakeHour < 0){
            $wakeHour = 23;
            
        }
    }else if(($wakeHour - 1) < 0) {
        echo $wakeHour -=1;
    }
    echo $wakeHour." ".$wakeMinute;
} 
    // $difference = $minutes - 45;
    // if($difference < 0){
    //     if(($hour - 1) < 0 ){
    //         $hour = 24 - 1;
    //     }
    //     $hour = $hour - 1;
    //     $minutes = $difference + 60;
    //     echo $hour." ".$minutes;
    //     // fprintf(S,"%d %d",$hour,$minutes);
    // }else if($difference === 0){
    //     if(($hour - 1) < 0)
    //         $hour = 24 - 1;
    //         $minutes = 60 - $difference;
    //         echo $hour." ".$minutes;
    // }