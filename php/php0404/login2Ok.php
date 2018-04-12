<?php

if(!isset($_POST['userId']) || !isset($_POST['userPw'])){
    echo "
    <script>
    alert('접속 경로 오류');
    location.href='login2.php';
    </script>
    ";
    exit;
    //die('접속경로 오류');
}


$userId = $_POST['userId'];
$userPw = $_POST['userPw'];


//공란 오류
if($userId == "" || $userId == null){
    echo"
    <script>
    alert('아이디를 확인하세요.');
    history.go(-1);
    </script>
    ";
    exit;
}

if($userPw == "" || $userPw == null){
    echo"
    <script>
    alert('비밀번호를 확인하세요.');
    history.go(-1);
    </script>
    ";
    exit;
}
//입력값 오류

if($userId !== "soyo" || $userPw !== "1111"){
    echo"
    <script>
    alert('아이디/비밀번호를 확인하세요.');
    history.go(-1);
    </script>
    ";
    exit;
}


//로그인 실행

echo "
    <script>
    alert('오늘도 즐거운 하루 되세요.');
    location.href='main.php?userId=".userId."';
    </script>
    ";
    exit;


?>