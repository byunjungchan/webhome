<?php

include "dbConnect.php";

$query="select * from myGuest";

$result=$conn->query($query);

if($result->num_row>0){
    echo $result->num_row."<br>";
    echo "DB테이블의 data가 있습니다.";
    while($row=$result->fetch_assoc()){//db data를 레코드 단위
        
        echo $row['userId'].",";
        echo $row['userPw'].",";
        echo $row['userGender'].",";
        echo $row['userPhone'].",";
        echo $row['userHobbys']."<br>";
        
    }
}else{
    echo "db 테이블의 data가 없습니다.";
}

echo "</table>";
