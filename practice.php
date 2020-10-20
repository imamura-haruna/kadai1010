<?php

//課題１
function twice($result){
    echo $result*2;
}

echo twice(2) . "\n";


//課題２
function f($a, $b){
    $result=$a+$b;
    echo $result;
}

echo f(4,3) . "\n";


//課題３
function y($arr){
    echo $arr[0]*$arr[1]*$arr[2]*$arr[3]*$arr[4];
}

echo y($arr=array(1, 3, 5 ,7, 9)) . "\n";


//課題４
 function max_array($arr){
 $max_number = $arr[0];
     foreach($arr as $a){
         sort($arr);
     }

 return $max_number;
 }


//課題５
//strip_tags
$str="<h1>tech boost</h1>";
echo strip_tags($str) . "\n";

//array_push
$lang=array("あ","い","う");
array_push($lang,"え","お");
print_r($lang);

//array_merge
$lang1=["か","き","く"];
$lang2=["け","こ"];
$lang3=array_merge($lang1,$lang2);
print_r($lang3);

//time, mktime
echo time() . "\n";
echo mktime() . "\n";

//date
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s") . "\n";

?>
