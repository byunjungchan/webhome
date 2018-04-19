<?php
header("Content-Type: text/html; charset=UTF-8");
?>

<?php

include "dbConnect.php";


$query="insert into myGuest(userEmail) values('soyo0404@naver.com)";

$result=$conn->query($query);

if($result==false){
    echo"추가 생성 실패";
}else{
    echo"추가 생성 성공";
}
    
$conn->close();
    
?>