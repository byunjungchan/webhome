<?php

$num1 = 10;
$num2 = 1.1;
$str = "soyo";
$arr = array(1,2,3,4,5);

echo "=====변수의 자료형=====<br>";

//변수의 자료형
echo gettype($num1);
echo "<br>";

echo gettype($num2);
echo "<br>";

echo gettype($str);
echo "<br>";

echo gettype($arr);
echo "<br><br>";

echo "=====변수의 자료형과 값=====<br>";

//변수의 자료형과 값
var_dump($num1);
echo "<br>";

var_dump($num2);
echo "<br>";

var_dump($str);
echo "<br>";

var_dump($arr);
echo "<br><br>";

echo "=====배열의 구조=====<br>";

//배열의 구조
echo "<pre>";
print_r($arr);
echo "</pre>";





?>