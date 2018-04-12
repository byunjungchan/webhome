<?php
if(!isset($_POST['userId']) || !isset($_POST['userPw'])){
    echo"
    <script>
    alert('로그인 정보 오류');
    location.href='join.php';
    </script>
    
    ";
}



$userId = $_POST['userId'];
$userPw = $_POST['userPw'];


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

if($userId != "변정찬" || $userPw != "1111"){
    echo"
    <script>
    alert('아이디 또는 비밀번호를 확인하세요.');
    history.go(-1);
    </script>
    ";
    exit;
}

//위에를 다 통과해야 아래가 실행된다.
echo"
    <script>
    alert('로그인의 성공했습니다.');
    location.href='main.php?userId=".$userId."';
    </script>
    ";
    exit;




?>