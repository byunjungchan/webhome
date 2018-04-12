<?php
//변수의 자료형(타입 type)

$a = 10; //정수
$b = 2.0; //실수(double);
$c = 'A'; //문자열
$d = "soyo"; //문자열
$e = array(1,2,3); //array >> 객체
$bool = true;
$strNull = null;

//변수의 타입을 알 수 있는 내장 함수(gettype)

echo gettype($a);
echo "<br>";
echo gettype($b);
echo "<br>";
echo gettype($c);
echo "<br>";
echo gettype($d);
echo "<br>";
echo gettype($e);
echo "<br>";
echo gettype($bool);
echo "<br>";
echo gettype($strNull);

?>

