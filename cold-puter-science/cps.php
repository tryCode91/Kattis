<?php
$file = fopen("cold-002.in","r+");
while(fscanf($file, "%d", $row)){
     echo $row;
}

// $c = 0;
// do{
//     echo $c;
//     $F1 = fgets($file,9999);
//     if($c === 0){
//         $nrTemp = $F1;
//     }else if($c > 0){
//         $tempString = $F1;
//     }
//     $c++;
    
// }while($c < 2);
//     $belowZero = 0;
//     $strSplit = explode(" ",$tempString);
//     for($i=0;$i<count($strSplit);$i++){
//         if($strSplit[$i] < 0){
//             $belowZero++;
//         }
//     }
//     echo $belowZero;
//     fprintf($file, "\n%d",$belowZero);
//    if($fh = fopen("cold-002.in","r+")){
//     $c = 0;
//       while (!feof($fh)){
//          $F1 = fgets($fh,9999);
//             if($c === 0){
//                 $nrTemp = $F1;
//             }else if($c > 0){
//                 $tempString = $F1;
//             }
//         $c++;
//       }
//       fclose($fh);
//     }
//     $belowZero = 0;
//     $strSplit = explode(" ",$tempString);
//     for($i=0;$i<count($strSplit);$i++){
//         if($strSplit[$i] < 0){
//             $belowZero++;
//         }
//     }
//     echo $belowZero;
