<?php
//방문자 수 확인
//쿠키값은 브라우저에 유지된다.

$val = 1;

if(isset($_COOKIE['userId'])){
    $val = $_COOKIE['userId'];//쿠키 userId의 값
    
    $val++;//1,2,3,4,5.....
}

setcookie('userId',$val,time()+10);//쿠키값은 브라우저에 유지된다.


//if($val==1){
//    echo "첫번째 방문입니다.";
//}else{
//    echo $val."번째 방문입니다.";
//}

?>