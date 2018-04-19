<?php
//DB Connect 
$hostName="localhost";
$dbId="root";
$dbPw="1111";
$dbName="member3";

$conn=new mysqli($hostName,$dbId,$dbPw,$dbName);
    
$conn->query("SET NAMES utf8");
    //만약 얘가 에러가 나면 팝업창을 띄우고, 인덱스 페이지로 보내자
if($conn->connect_error){
    echo"
    <script>
        alert('DB연결실패');
        location.href='index.php';
    </script>
    ";
    exit;
}

//$conn->close();

?>