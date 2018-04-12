<?php

$arrInt3 = [];

$arrInt3[0] = 1;
$arrInt3[1] = 2;
$arrInt3[2] = 3;
$arrInt3[3] = 4;
$arrInt3[4] = 5;

echo "<pre>";
print_r($arrInt3);
echo "</pre>";

for($i=0;$i<count($arrInt3);$i++){
    echo $arrInt3[$i]."<br>";
}

echo "<br>";

$members = array();//배열 선언

$members[0] = "uesrId";
$members[1] = "uesrPw";
$members[2] = "uesrName";
$members[3] = "uesrGender";
$members[4] = "uesrAddr";

echo "<pre>";
print_r($members);
echo "</pre>";

for($i=0;$i<count($members);++$i){
    echo $members[$i]."<br>";
}


?>