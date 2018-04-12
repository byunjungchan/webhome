<?php
//isset(변수) "변수 있느냐?"


$userId="soyo";
$userPw="1111";
$userAge=11;
$userPhone="010-3739-5263";
$userAddr="";
$userAddr2;

//변수가 실제 존재하는지
echo isset($userId)."<br>";
echo isset($userPw)."<br>";
echo isset($userAge)."<br>";
echo isset($userPhone)."<br>";
echo isset($userAddr)."<br>";
echo isset($userAddr2)."<br>";

echo "===============================<br>";

//변수가 비었는지?
echo " >>> ".empty($userId)."<br>";
echo " >>> ".empty($userPw)."<br>";
echo " >>> ".empty($userAge)."<br>";
echo " >>> ".empty($userPhone)."<br>";
echo " >>> ".empty($userAddr)."<br>";
echo " >>> ".empty($userAddr2)."<br>";




?>