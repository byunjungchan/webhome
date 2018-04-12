<?php

$str2 = "userId, userPw, userGender";
$str2Arr = explode(",",$str2);//문자열을 구분기호로 배열화 // split

echo count($str2Arr);

echo "<pre>";
print_r($str2Arr);
echo "</pre>";
echo "<br>";

foreach($str2Arr as $key=>$val){
    echo "$key => $val<br>";
};

$data = array("사과, 귤, 감, 밤");

$result = implode('***',$data);//배열 >> 문자열
echo "<pre>";
print_r($data);
echo "</pre>";

echo var_dump($data);


$phone = array("010-3739-5263");

$result = implode('-',$phone);//배열 >> 문자열
echo "<pre>";
print_r($phone);
echo "</pre>";

echo var_dump($phone);


$phone2 = "010-9903-0823";
$phone2Rs = explode("-",$phone2);

echo count($phone2Rs);

echo "<pre>";
print_r($phone2Rs);
echo "</pre>";
echo "<br>";

foreach($phone2Rs as $key=>$val){
    echo "$key => $val<br>";
};










?>