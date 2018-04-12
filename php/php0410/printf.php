<?php

//sprintf(표시될 문자열, 값)
//printf() << 반환값, printf << 반환값

//이진수 
// 0 = 1
// 1 = 2
// 10 = 3
// 11 = 4
// 100 = 5
// 101 = 6
// 서식문자 %

//2진수 : binary number (b)
//
//8진수 : octal number (o)
//
//10진수 : decimal number (d) 
//
//16진수 : hexadecimal (x)



$num = 15;

echo sprintf('num=%b',$num)."<br>";//15를 이진수 스타일로 찍으세요
echo sprintf('num=%o',$num)."<br>";//8진수
echo sprintf('num=%d',$num)."<br>";//10진수
echo sprintf('num=%x',$num)."<br>";//16진수

echo "<br>";

//printf echo처럼 찍어줌
printf('num=%b',$num)."<br>";//2진수
printf('num=%o',$num)."<br>";//8진수
printf('num=%d',$num)."<br>";//10진수
printf('num=%x',$num)."<br>";//16진수




















?>