<?php
//할당연산자(복합대입연산자)+=, -=, *=, /=, %=, .=
//총쏘는 원리
$num=10;

$num=$num+10;
echo $num."<br>"; //20 

$num+=10;
echo $num."<br>"; //30 ($num=$num+10;)

$num-=10;
echo $num."<br>"; //20 ($num=$num-10;)

$num*=10;
echo $num."<br>"; //200 ($num=$num*10;)

$num/=10;
echo $num."<br>"; //20 ($num=$num/10;)

$num%=10;
echo $num."<br>"; //0 ($num=$num%10;)


$query = "insert into member";
echo $query."<br>";

$query = $query."(userId, userPw, userPhone)";
echo $query."<br>";

$query = $query."value(soyo, 2222, 010-3739-5263)";
echo $query."<br><br>";

// $query = $query."문자열"
// $query.= "문자열"

$query2 = "insert into member";
echo $query2."<br>";

$query2.="(userId, userPw, userPhone)";
echo $query2."<br>";

$query2.="value(soyo, 2222, 010-3739-5263)";
echo $query2."<br>";








?>