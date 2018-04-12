<?php
//쿠키 설정

            //쿠키이름   //쿠키값     //쿠키 유지시간        
setcookie('cookieId','cookieVal', time()+60*60);//1시간 동안 쿠키유지

echo $_COOKIE['cookieId'];//다른페이지 가도 값이 살아있다.

?>