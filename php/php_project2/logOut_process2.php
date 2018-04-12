<?php
//로그아웃
session_start();
session_destroy();// 모든 세션을 삭제(로그아웃)
session_unset();//세션의 변수를 모두 삭


echo "
    <script>
        alert('로그아웃 성공 index.php 페이지로 이동합니다.)
        location.href='index.php';
    </script>

";
exit;


?>