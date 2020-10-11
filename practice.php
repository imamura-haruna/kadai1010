<?php
$name="haruna";
if($name=="haruna"){
    echo "私は $name です。";
}else{
    echo "あなたの名前ではありません。";
}

for($i=1;$i<10001;$i++){
    echo $i;
}


$fruits=array("apple","orenge","banana","lemon","peach");

foreach($fruits as $fruit){
    echo "$fruit";
    echo "\n";
}


$start = 1;

$end = 100;
++ $end ;

for($i = $start; $i < $end; $i++){

  if($i % 5 == 0){
    echo $i;
  }
}