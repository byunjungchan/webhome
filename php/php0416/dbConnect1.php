<?php
//계정 연결

$servername = "localhost";
$dbId = "root";
$dbPw = "1111";
$dbName = "member";

$conn =  mysqli_connect($servername,$dbId,$dbPw,$dbName);

if(!$conn){
    die("계정연결 실패".mysqli_connect_error());
}
echo "계정연결 성공";

mysqli_close($conn);


?>