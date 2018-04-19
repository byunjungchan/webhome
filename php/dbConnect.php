<?php

$servername = "localhost";
$dbId = "root";
$dbPw = "1111";
$dbName = "member2";

$conn = new  mysqli($servername,$dbId,$dbPw,$dbName);

if($conn->connect_error){//DB연결이 실패시
    echo"
    <script>
    alert('데이터베이스 연결 실패');
    location.href='index.php';
    </script>
    ";
    exit;
}

?>