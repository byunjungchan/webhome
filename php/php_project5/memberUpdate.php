<?php
header("Content-Type:text/html;charset=UTF-8");
?>
<?php
session_start();
if(!isset($_SESSION['sessionId'])){
    echo"
    <script>
    alert('로그인 후에 이용해주세요.');
    laction.href='login2.php';
    </script>
";
    exit;
}


include "dbConnect.php";

$sessionId=$_SESSION['sessionId'];
$query="select * from joinmember2 where userId='$sessionId'";
$result=$conn->query($query);


$userId;
$userPw;
$userName;
$userYear;
$userGender;
$userPhone;

//db에 레코드가 없을때
if($result->num_rows==0){
    echo"
    <script>
    alert('가져올 데이터가 없습니다.');
    laction.href='index.php';
    </script>
";
    exit;
}else{
    //가져올 레코드가 있으면  //fetch_assoc 약속된거
    while($row=$result->fetch_assoc()){
    $userId=$row['userId'];
    $userPw=$row['userPw'];
    $userName=$row['userName'];
    $userYear=$row['userYear'];
    $userGender=$row['userGender'];
    $userPhone=$row['userPhone'];
}
}


echo"
    <script>
    alert('회원수정 사이트로 이동합니다.');
    location.href='update.php?userId=$userId&userPw=$userPw&userName=$userName&userYear=$userYear&userGender=$userGender&userPhone=$userPhone';
    </script>
";

$conn->close();

?>
