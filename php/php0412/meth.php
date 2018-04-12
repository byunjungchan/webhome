<?php

//수학 함수정리

$num1 = -100;

echo abs($num1)."<br>";//절대값

$num2 = 25.44258;

echo round($num2)."<br>";//1의 자리까지(정수값만)
echo round($num2,-1)."<br>";//일의 자리에서 반올림
echo round($num2,1)."<br>";//+(소수)소수 첫번째자리까지 반올림


$num3 = 1.2;

echo ceil($num3)."<br>";//올림 가장 가까운 큰 정수
echo floor($num3)."<br>";//내림 가장 가까운 작은 정수
echo max(10,5,300,100)."<br>";//가장 큰 수
echo min(10,5,300,100)."<br>";//가장 작은 수

?>