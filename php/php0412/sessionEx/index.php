<?php
session_start();
if(!isset($_SESSION['sessionId'])||!isset($_SESSION['sessionPw'])){
    
    echo"
    <script>
    alert('로그인 정보가 없습니다.(session) main페이지로 이동합니다.');
    location.href='main.php';
    </script>
";

exit;
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <br>
    세션1: <?=$_SESSION['sessionId']?><br>
    세션2: <?=$_SESSION['sessionPw']?><br>
    
    <a href="sessionDelete.php">세션삭제</a>
</body>
</html>