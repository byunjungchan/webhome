<?php

include "dbConnect.php";

$query="create database member5 default character set urf8";

$result=$conn->query($query);

if($result==false){
    echo"db 생성 실패";
}else{
    echo"db 생성 성공";
}

$conn->close();//DB관계 처리면 항상 close();



?>