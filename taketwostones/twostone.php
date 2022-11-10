<?php
$file = fopen("3.in","r+");

while(fscanf($file, "%d", $number)){
    for($i=1;$i<$number+1;$i++){
        $spell = "$i "."Abracadabra";
        fprintf($file,"\n%s",$spell);        
    }
}


// while(fscanf($file,"%d",$turn)){

// }

// $res = "";
// do{
// if($turn === 1){
//     $res = "Alice";
// }else if($turn ===0){
//     $res = "Bob";
// }
// $turn = $turn - 2;
// }while($turn > -1);
// fprintf($file,"%s",$res);