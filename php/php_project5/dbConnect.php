<?php

$hostName = "localhost";//계정
$dbId = "root";//계정 아이디
$dbPw = "1111";//계정 비밀번호
$dbName = "member5";//DB명

$conn=new mysqli($hostName,$dbId,$dbPw,$dbName);
$conn->query("SET NAMES utf8");//한글 깨짐 방지

if($conn->connect_error){
    echo"
    <script>
    alert('접속 오류');
    location.href='index.php';
    </script>
    ";
    exit;
}


?>