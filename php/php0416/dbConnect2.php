<?php
//DB 연결

$servername = "localhost";
$dbId = "root";
$dbPw = "1111";
$dbName = "member2";

$conn =  mysqli_connect($servername,$dbId,$dbPw,$dbName);

if(!$conn->connect_error){//DB연결이 실패시
    die("DB연결 실패>>".connect_error);
}
echo "DB연결 성공";

$conn->close();


?>