<?php
$sport = array("Football","Basketball","Voley Ball","Handball","bockets","box","kickbox");
// echo $sport[4];
// echo implode("" , $sport , )."<br>";
array_push($sport, "Golf");
array_push($sport);
array_unshift($sport, "Tenis");
array_push($sport);
array_push($sport);
$output1 = array_slice($sport,2);
$output2 = array_slice($sport,0,3);
var_dump($output1);
var_dump($output2);
// var_dump($sport); 
// len  = count($sport);
// for ($i = 0; $i <$len; $i++){
    // echo $sport[$i] . "<br>";
 //  }



// echo implode(", ", $sport)."<br>";
// echo end($sport)."<br>";
// echo count($sport)."<br>";

$myvalues = array(12,24,36,48);
var_dump(array_sum($myvalues));


$len = count($sport);
for($i = 0; $i < $len;$i++){
    echo $sport[$i] ,"\n";
}



?>