<?php
header("Content-Type:text/html;charset=UTF-8");
?>
<?php
include "dbConnect.php";

if(!isset($_POST['userId'])||!isset($_POST['userPw'])){
    echo"
        <script>
        alert('접속 경로 오류');
        location.href='index.php';
        </script>
    ";
    exit;
}

$userId=$_POST['userId'];//session으로 넘어온거 있어서 안해도됨
$userPw=$_POST['userPw'];

if($userPw==""||$userPw==null){
    echo"
        <script>
        alert('비밀번호를 확인해주세요.');
        history.go(-1);
        </script>
    ";
    exit;
}

$query="delete from joinmember2 where userId='$userId' and userPw='$userPw'";
$num=$conn->query($query);//성공하면 1값을 반환

if($num==1){
    session_start();
    session_destroy();
    echo"
        <script>
        alert('회원탈퇴 성공! 감사합니다.');
        location.href='index.php';
        </script>
    ";
}else{
    echo"
        <script>
        alert('회원탈퇴 실패');
        history.go(-1);
        </script>
    ";
}

$conn->close();


?>