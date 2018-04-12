<?php
if(!isset($_COOKIE['cookieId'])||!isset($_COOKIE['cookiePw'])){
    
    echo"
    <script>
    alert('로그인 정보가 없습니다.(cookie) main페이지로 이동합니다.');
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
    쿠키1: <?=$_COOKIE['cookieId']?><br>
    쿠키2: <?=$_COOKIE['cookiePw']?><br>
    
    <a href="cookieDelete.php">쿠키삭제</a>
</body>
</html>