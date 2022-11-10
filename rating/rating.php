<?php
$file = fopen("rating-0001.in","r+");
$fullArray=array();
$ratedJudges = "";
while(fscanf($file, "%f %f",$row, $ratedJudges)){
        array_push($fullArray,$row);//get data to array
}
for($i=1;$i<count($fullArray);$i++){
    // echo $fullArray[$i]; 
}
$totalJudge = $fullArray[0];//get total ammount of judges
$missingJudgeScores = $fullArray[0] - $ratedJudges; // beräkna antalet judge that did not give a score yet.
$fullArray[0] = 0; // set totaljudge to 0 to count the sum of available scores.
$sumAvailableScore = array_sum($fullArray);
$minimalTotalScorePerJudge = -3;
$maximalTotalScorePerJudge = 3;
$totalMinimalScore = (float)($minimalTotalScorePerJudge * $missingJudgeScores + $sumAvailableScore) / $totalJudge;
$totalMaximumScore = (float)($maximalTotalScorePerJudge * $missingJudgeScores + $sumAvailableScore) / $totalJudge;
echo gettype($totalMinimalScore)." ".gettype($totalMaximumScore);
$len = fprintf($file, "\n%f %f\n", $totalMinimalScore,$totalMaximumScore);
?>