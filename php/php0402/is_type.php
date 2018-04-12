<?php
//변수의 자료형(타입 type)

$a = 10; //정수
$b = 2.0; //실수(double);
$c = 'A'; //문자열
$d = "soyo"; //문자열
$e = array(1,2,3); //array >> 객체

class A{
    
}

$classA=new A();

$bool = true;
$strNull = null;

//변수 자료형의 맞는지? 1뜨면 true

echo is_int($a); //정수형 int
echo "<br>";
echo is_long($a); //정수형 long
echo "<br>";
echo is_double($b); //실수형 double
echo "<br>";
echo is_float($b); //실수형 float
echo "<br>";
echo is_real($b); //실수형(double 이냐 float)
echo "<br>";
echo is_string($d); //string
echo "<br>";
echo is_string($c); //string
echo "<br>";
echo is_array($e); //array
echo "<br>";
echo is_object($classA); //array
echo "<br>";
echo " >>> ".is_null($strNull); //null


?>

