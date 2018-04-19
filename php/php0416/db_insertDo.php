<?php
include "D:\webhome\php\dbConnect.php";



$query="insert into memberJoin(userId,userPw,userGender,userHobbys,userPhone) values('soyo','1111','남자','코딩','010-000-0000');";
    
$result=$conn->query($query);//sql문을 실행

if($result==true){
    echo "회원가입 성공";
}else{
    echo "회원가입 실패>>".$conn->error;
}

//if($conn->query($query)==true){
//    echo "회원가입 성공";
//}else{
//    echo "errow".$query."<br>".$conn->error;
//}

$conn->close();
    
?>