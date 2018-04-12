<?php
//비트 연산자 0 1

$num1 = 10; //1010
$num2 = 8; //1000


echo $num1 & $num2;//1000
echo "<br>";

echo $num1 | $num2;//1010
echo "<br>";

echo $num1 ^ $num2;//0010
echo "<br>";

echo ~ $num1;//1010 -> 0101
echo "<br>";

echo $num1 << 2;//왼쪽으로 2비트 이동(커진다)
echo "<br>";

echo $num1 >> 2;//왼쪽으로 2비트 이동(작아진다)
echo "<br>";
?>






