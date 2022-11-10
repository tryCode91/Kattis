<?php

$file = fopen("autori.3.in","r+");
while(fscanf($file, "%s", $name) === 1){
    $str = explode("-",$name);
    $short = array();
    foreach ($str as $char) {
        array_push($short,$char[0]);
    }
    $result = implode("",$short);
    $len = fprintf($file, "%s\n",$result);
    echo $len;
}