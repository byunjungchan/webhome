<?php
if(!isset($_POST['userId']) || !isset($_POST['userPw']) || !isset($_POST['userHobbys']) || !isset($_POST['userPhone'])){
    echo "
    <script>
    alert('접속 경로 오류! index페이지로 이동합니다.');
    location.href='index.php';
    </script>
    ";
    exit;
}


$userId = $_POST['userId'];
$userPw = $_POST['userPw'];
$userHobbys = implode(',',$_POST['userHobbys']);
$userPhone = implode(',',$_POST['userPhone']);

$members = array('userId'=>$userId,
                 '$userPw'=>userPw,
                 '$userHobbys'=>$userHobbys,
                 'userPhone'=>$userPhones);

echo "
    <script>
    alert('회원가입이 되셨습니다.');
    location.href='login2.php?members=".$members."';
    </script>
    ";



?>