<?php
//자료형 변환
//변수의 타입(자료형)을 변환 cast

$strNum = "100";
$intStr = 100;

 
echo gettype($strNum)."<br>";
echo $strNum."<br>";

echo gettype($intStr)."<br>";
echo $intStr."<br>";
echo "==============<br>";

echo intval($strNum)."<br>";//정수형변환
echo gettype(intval($intStr))."<br>";
echo "==============<br>";

echo doubleval($strNum)."<br>";//double형
echo gettype(doubleval($intStr))."<br>";
echo "==============<br>";

echo gettype($intStr)."<br>";//string형
echo strval($intStr)."<br>";
echo gettype(strval($intStr))."<br>";
echo "==============<br>";







?>