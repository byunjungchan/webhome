<?php
$hostName='localhost';
$dbId='root';
$dbPw='1111';
$dbNamd='member4';
//$dbPort=3306 기본포트 거의 안바뀜


$conn=new mysqli($hostName,$dbId,$dbPw,$dbNamd);

if($conn->connect_error){//연결 실패시
    //die('연결 실패:'.$conn->connect_error)//반환값 반환하고 종료
    echo"
    <script>
        alert('연결 실패');
        location.href='index.php';
    </script>
    ";
    exit;
}

echo "DB연결 성공";

?>