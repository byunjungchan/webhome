<?php

if(!isset($_POST['userId'])||!isset($_POST['userPw'])){
    echo"
    <script>
    alert('접속 정보 오류');
    location.href='login.php';
    </script>
    ";
    exit;
}


$userId = $_POST['userId'];
$userPw = $_POST['userPw'];


//공란처리
if($userId==""||$userId==null){
    echo"
    <script>
    alert('아이디를 확인해주세요.');
    history.go(-1);
    </script>
    ";
    exit;
}

if($userPw==""||$userPw==null){
    echo"
    <script>
    alert('비밀번호를 확인해주세요.');
    history.go(-1);
    </script>
    ";
    exit;
}

//입력값이 맞는지?
if($userId!="soyo"){
    echo"
    <script>
    alert('아이디 이거 아니면');
    history.go(-1);
    </script>
    ";
    exit;
}

if($userPw!="1111"){
    echo"
    <script>
    alert('비밀번호 이거 아니면');
    history.go(-1);
    </script>
    ";
    exit;
}

setcookie('cookieId',$userId,time()+60*3);
setcookie('cookiePw',$userPw,time()+60*3);


echo "
    <script>
    alert('로그인 성공 index.php로 이동합니다.');
    location.href='index.php';
    </script>
";
exit;





?>