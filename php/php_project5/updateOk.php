<?php
header("Content-Type:text/html;charset=UTF-8");
?>
<?php
include "dbConnect.php";

if(!isset($_POST['userId'])||!isset($_POST['userPw'])||!isset($_POST['userName'])||!isset($_POST['userYear'])||!isset($_POST['userGender'])||!isset($_POST['userPhone'])){
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
$userName=$_POST['userName'];
$userYear=$_POST['userYear'];
$userGender=$_POST['userGender'];
$userPhone=implode('-',$_POST['userPhone']);//배열 >> 문자열

$query="update joinMember2 ";
$query.="set userPw='$userPw',userName='$userName',userYear='$userYear',userPhone='$userPhone',userPw='$userPw' ";
$query.="where userId='$userId'";

$result=$conn->query($query);//성공하면 1

if($result==1){
    echo"
    <script>
        alert('회원 수정 성공');
        location.href='index.php'
    </script>
    ";
}else{
    echo"
    <script>
        alert('회원 수정 실패');
        history.go(-1);
    </script>
    ";
}

$conn->close();//DB연결 해제





?>