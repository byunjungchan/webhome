<?php

//세션삭제 방법1
@session_start();
session_destroy();//모든 세션 삭제
echo"
    <script>
    alert('로그아웃 성공');
    location.href='index.php';
    </script>
";

exit;



?>