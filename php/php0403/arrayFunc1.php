<?php
//배열의 내장함수


$week = array('월','화','수','목','금','토','일');
echo gettype($week)."<br>";
echo "<pre>";
print_r($week);
echo "</pre>";

$weekStr = implode(',',$week);//배열 -> 문자열
echo gettype($weekStr)."<br>";
echo $weekStr."<br>";

$arrWeek = explode(',',$weekStr);//문자열 -> 배열
echo gettype($arrWeek)."<br>";

echo "<pre>";
print_r($arrWeek);
echo "</pre>";

$arr1 = array(10,4,5,1,9);

print "<pre>";
print_r($arr1);
print "</pre>";
//일반 배열 사용

sort($arr1);//오름차순
print "<pre>";
print_r($arr1);
print "</pre>";

rsort($arr1);//내림차순
print "<pre>";
print_r($arr1);
print "</pre>";

array_pop($arr1);//array_pop 배열의 마지막 요소 삭제
print "<pre>";
print_r($arr1);
print "</pre>";

array_push($arr1);//array_push 배열의 마지막 요소 뒤에 추가
print "<pre>";
print_r($arr1);
print "</pre>";

?>