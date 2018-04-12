<?php


$cookieId = setcookie('userId','soyo',time()+60*3);
$cookiePw = setcookie('userPw','1111',time()+60*3);


if($cookieId && $cookiePw){
    echo "ok";
}


?>