<?php

//배열 "다수의 data를 순서대로 그룹화"
//배열은 0번지 부터 저장
//배열의 인덱스는 총갯수-1


$arrInt = array(1,2,3,4,5);

var_dump($arrInt);

echo "<br>";

echo "<pre>";//구조를 가져옴
print_r($arrInt);
echo "</pre>";


echo $arrInt[0]."<br>";
echo $arrInt[1]."<br>";
echo $arrInt[2]."<br>";
echo $arrInt[3]."<br>";
echo $arrInt[4]."<br>";

echo "배열의 총갯수: ".count($arrInt);








?>