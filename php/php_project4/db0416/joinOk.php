<?php
include "dbConnect.php";

if(!isset($_POST['userId'])||!isset($_POST['userPw'])||!isset($_POST['userGender'])||!isset($_POST['userHobbys'])||!isset($_POST['userPhone'])){
    echo"
    <script>
        alert('접속 경로 오류');
        location.href='index.php'
    </script>
    ";
    exit;
}

$userId=$_POST['userId'];
$userPw=$_POST['userPw'];
$userGender=$_POST['userGender'];
$userHobbys=implode(',',$_POST['userHobbys']);//배열을 ,로 구분해나눔
$userPhone=implode('-',$_POST['userPhone']);//배열을 -로 구분해나눔


if($userId==""||$userId==null){
    echo"
    <script>
        alert('아이디를 입력하세요.');
        hisory.go(-1);
    </script>
    ";
    exit;
}

if($userPw==""||$userPw==null){
    echo"
    <script>
        alert('비밀번호를 입력하세요.');
        hisory.go(-1);
    </script>
    ";
    exit;
}


//DB insert

$query="insert into joinmember(userId,userPw,userGender,userHobbys,userPhone) ";
$query.=" values('$userId','$userPw','$userGender','$userHobbys','$userPhone')";

$result=$conn->query($query);//insert 성공하면 true(1)

if($result!=true){
    echo"
    <script>
        alert('회원가입 실패입니다.');
        hisory.go(-1);
    </script>
    ";
    $conn->close();
    exit;
}


echo"
    <script>
        alert('회원가입 성공, 로그인페이지로 이동합니다.');
        location.href='login.php';
    </script>
    ";
    $conn->close();



?>