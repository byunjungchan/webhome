<?php
//슈퍼글로벌변수(브라우저유지)
//$_GET[''];//전송방식 POST
//$_POST[''];//전송방식 GET
//$_REQUEST[''];//전송방식 POST,GET

if(!isset($_POST['userName'])){
    //정보가 없지?
    echo"
    <script>
        alert('접속정보오류!!);
        location.href='formEx1.php';
    </script>
    ";
    exit;
}

$userName = $_POST['userName'];
if($userName==''||$userName==null){
    //설정값이 없거나 공백이면
    echo"
    <script>
        alert('정보를 확인해주세요.');
        history.go(-1);
    </script>
    ";
    exit;
}

echo"
    <script>
        alert('환영합니다.');
    </script>
    ";

echo $userName;

?>