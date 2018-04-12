<?php

$_POST['userId'];
$_POST['userPw'];
$_POST['userAge'];
$_POST['userPhone'];
$_POST['userAddr'];

if(!isset($_POST['userId'])){ //session의 유무를 판단
    echo "
        <script>
        
        alert('아이디를 입력해주세요.');
        history.go(-1);
        
        </script>
    
    ";
    exit;//바로 break
//    die("종료");//메세지를 남기고 종료 break
}

echo "아이디: ".$_POST['userId']."<br>";
echo "비밀번호: ".$_POST['userPw']."<br>";
echo "나이: ".$_POST['userAge']."<br>";
echo "전화번호: ".$_POST['userPhone']."<br>";
echo "주소: ".$_POST['userAddr']."<br>";










?>