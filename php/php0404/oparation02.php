<?php
//증감 연산자

$i = 10;

echo $i++;
echo "<br>";

echo ++$i;
echo "<br>";

echo $i--;
echo "<br>";

echo --$i;
echo "<br>";

$arrInt = array();//자바스크립트 >> 배열.push();
$members = array("m1","m2","m3","m4","m5");

for($i=0; $i<10; $i++){
    echo $i."";
    array_push($arrInt, $i);
}


foreach($arrInt as $val){
    echo $val."<br>";
}

echo "<pre>";
//var_dump($arrInt);
print_r($arrInt);
echo "</pre>";


foreach($members as $val){
    echo $val."<br>";
}

foreach($members as $key=>$val){
    echo $key."=>".$val."<br>";
}

echo "<pre>";
print_r($members);
echo "</pre>";

$members2 = array('userId'=>'soyo', 'userPw'=>'1111', 'userGender'=>'남자');

echo "<pre>";
print_r($members2);
echo "</pre>";

echo count($members2)."<br>";

foreach($members2 as $val){
    echo $val."<br>";
}

foreach($members2 as $key=>$val){
    echo $key."=>".$val."<br>";
}

?>