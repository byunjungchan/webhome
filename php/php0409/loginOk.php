<?php

$userId = $_POST['userId'];
$userId = $_POST['userPw'];
    
function loginChecked($userId, $userPw){
    if(!isset($userId)||!isset($userPw)){
        echo "
        <script>
        alert('아이디와 비밀번호 정보가 없습니다.');
        location.href='login.php';
        </script>
        ";
    }
    exit;
}

if($userId=""||$userId=null){
        echo "
        <script>
        alert(아이디를 입력해주세요.);
        history.go(-1);
        </script>
        ";
    }
    exit;

if($userPw=""||$userPw=null){
        echo "
        <script>
        alert(비밀번호를 입력해주세요.);
        history.go(-1);
        </script>
        ";
    }
    exit;

if($userId!="soyo"){
        echo "
        <script>
        alert(아이디를 확인해주세요.);
        history.go(-1);
        </script>
        ";
    }
    exit;

if($userPw!="1111"){
        echo "
        <script>
        alert(비밀번호를 확인해주세요.);
        history.go(-1);
        </script>
        ";
    }
    exit;


if(userId!="soyo"||userPw!="1111"){
        echo "
        <script>
        alert(아이디와 비밀번호를 확인해주세요.);
        history.go(-1);
        </script>
        ";
    }
    exit;


@session_start();

$_SESSION["sessionId"] = $userId;

echo "
        <script>
        
        alert(로그인에 성공했습니다.);
        location.href='index.php';
        
        </script>
        ";
exit;


loginChecked('soyo','1111');




?>