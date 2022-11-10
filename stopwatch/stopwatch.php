<?php
$f = fopen("1.in","r+");
$count = 0;
$time_arr = array();
while(fscanf($f, "%d ", $time)){
    if($count === 0){
    $loopRun = $time;
    }else{
        array_push($time_arr,$time);
    }
    $count++;
}

$running = true;
$total = 0;
$lastTime = 0;
for($i=0;$i<count($time_arr);$i++){
    
    if(!empty($time_arr[$i-1])){

        $lastTime=$time_arr[$i-1];

    }
    
    echo $lastTime;

    if($running === false){
        $running = true;
        $lastTime = $time_arr[$i];
    }else{
        $run = false;
        $total+=($time_arr[$i] - $lastTime);
    }
        
    if($running){
        echo "Still running";
    }else{
        echo $total;
    }    
}