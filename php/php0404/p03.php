<?php
//논리연산자 && ||

$userId = "soyo";
$userPw = "1111";

echo $userId == "soyo";
echo "<br>";

echo $userPw == "1111";
echo "<br>";

echo $userId == "soyo" && $userPw == "1111";
echo "<br>";
echo $userId == "soyo1" && $userPw == "1111";
echo "<br>";
echo $userId == "soyo" && $userPw == "1112";
echo "<br>";
echo $userId == "soyo3" && $userPw == "1113";






?>