<?php

$arr1 = array(10,4,5,1,9);
$arr2 = array(15,6,7,3,8);

$arr3 = array_merge($arr1,$arr2);//두개의 배열을 합친다.

print gettype($arr3);
print "<pre>";
print_r($arr3);
print "</pre>";

$slice = array_slice($arr1, 2);//

print_r($slice);

$slice = array_slice($arr2,1,3);//

print_r($slice);


//array_slice($변수, 인덱스, 갯수) 인덱스 시작부터 갯수만큼 살리고 나머지는 자름


?>