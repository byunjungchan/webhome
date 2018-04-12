<?php
//비교 연산자

$num1 = 10;
$num2 = 5;

echo $num1 > $num2;
echo "<br>";

echo $num1 >= $num2;
echo "<br>";

echo $num1 < $num2;
echo "<br>";

echo $num1 <= $num2;
echo "<br>";

$userId = "soyo";
$userPw = "1111";

echo $userId == "soyo";
echo "<br>";

echo ">>>".($userPw == 1111);//값만 같냐? true
echo "<br>";

echo ">>>".($userPw === 1111);//자료형 까지 같냐? false
echo "<br><br>";


echo ">>>".($userPw != 1111);//다르지? false
echo "<br>";

echo ">>>".($userPw !== 1111);//다르지? ㅇㅇ true
echo "<br>";

echo "<>".($userId<>"soyo");
echo "<br>";








?>