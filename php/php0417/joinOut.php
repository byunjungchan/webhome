<?php
session_start();
if(!isset($_SESSION['userId'])){
    echo"
    <script>
    alert('로그인 정보가 없습니다.');
    location.href='login.php';
    </script>
    ";
    exit;
}
$sessionId=$_SESSION['userId'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원탈퇴</title>
</head>
<body>
    <form action="deleDo.php" method="post">
        id: <input type="text" name="userId" value='<?=$sessionId?>'>
        pw: <input type="password" name="userPw">
        
        
        
    </form>
    
</body>
</html>