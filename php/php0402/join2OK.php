<?php
//POST방식

$userId = $_POST['userId'];
$userPw = $_POST['userPw'];
$userGender = $_POST['userGender'];
$userHobbys = $_POST['userHobbys'];
$userPhone1 = $_POST['userPhone1'];
$userPhone2 = $_POST['userPhone2'];
$userPhone3 = $_POST['userPhone3'];


//GET방식
/*
$userId = $_GET['userId'];
$userPw = $_GET['userPw'];
$userGender = $_GET['userGender'];
$userHobbys = $_GET['userHobbys'];
$userPhone1 = $_GET['userPhone1'];
$userPhone2 = $_GET['userPhone2'];
$userPhone3 = $_GET['userPhone3'];
*/

echo gettype($userHobbys)."<br>";

//echo implode(",",$userHobbys)."<br>";



echo "아이디: ".$userId;
echo "<br>";
echo "비밀번호: ".$userPw;
echo "<br>";
echo "성별: ".$userGender;
echo "<br>";

echo "취미: for문 >> ";
for($i=0;$i<count($userHobbys);$i++){//for문으로 배열뽑기
    echo $userHobbys[$i]." ";
}
echo "<br>";

echo "취미: foreach문 >> ";
//취미 가져오는 방법
foreach($userHobbys as $key){
    echo $key.", ";
}

echo "<br>";

echo "전화번호: ".$userPhone1;
echo "<br>";
echo "전화번호: ".$userPhone2;
echo "<br>";
echo "전화번호: ".$userPhone3;
echo "<br>";












?>