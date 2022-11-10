<?php
$file = fopen("1.in","r+");
while(fscanf($file, "%f", $option1)){
    $option2 = 100 - $option1;
     $ratioOption1 = 100/$option1;
     $ratioOption2 = 100/$option2;
    echo gettype($ratioOption2);
    $len = fscanf($file, "\n%f %f", $ratioOption1, $ratioOption2);
}
