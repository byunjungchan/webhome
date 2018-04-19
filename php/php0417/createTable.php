<?php

include "dbConnect.php";

$query="create table memberjoin (
num int(6) unsigned auto_increment,
userEmail VARCHAR(50),
reg_date TIMESTAMP,
primary key(num)
)ENGINE = innoDB default character set utf8";

$result=$conn->query($query);

if($result==false){
    echo"db 생성 실패";
}else{
    echo"db 생성 성공";
}

$conn->close();//DB관계 처리면 항상 close();



?>