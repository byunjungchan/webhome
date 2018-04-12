<?php

//쿠키삭제 방법1

setcookie('cookieId');
setcookie('cookiePw');

echo"
    <script>
    alert('로그아웃 성공');
    location.href='index.php';
    </script>
";

exit;

//echo $_COOKIE['cookieId']."<br>";
//echo $_COOKIE['cookiePw']."<br>";



?>