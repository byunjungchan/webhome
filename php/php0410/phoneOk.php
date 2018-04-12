<?php



if(!isset($_POST['userPhone'])){
    echo "
    <script>
    alert('전화번호를 확인해주세요.);
    location.href='form.php';
    </script>
    ";
    exit;
}

if(!isset($_POST['userHobbys'])){
    echo "
    <script>
    alert('취미를 골라주세요.');
    location.href='form.php';
    </script>
    ";
    exit;
}


$phoneArr = implode("-",$_POST['userPhone']);
$hobbysArr = implode(",",$_POST['userHobbys']);

//var_dump($_POST['userPhone']);
//echo "<br>";
echo $phoneArr;
echo "<br>";
var_dump($phoneArr);
echo "<br>";


//var_dump($_POST['userHobbys']);
//echo "<br>";
echo $hobbysArr;
echo "<br>";
var_dump($hobbysArr);
echo "<br>";

$phoneStr = implode("-",$_POST['userPhone']);
$hobbysStr = implode(",",$_POST['userHobbys']);
//DB연동
$phoneArr = explode("-",$phoneStr);
var_dump($phoneArr);


// hobbys안됨
//$hobbysArr = explode(",",$hobbysStr);
//$urlStr = "";
//
//foreach($$hobbysArr as $key=>$val){
//    $urlStr.="hobbys$key=".$val."?";
//}
//echo $urlStr;
//echo "<br>";
//echo substr($urlStr,0,strlen($urlStr)-1);
//$rsStr = substr($urlStr,0,strlen($urlStr)-1);
// hobbys안됨


echo"
    <script>
        alert('전송 데이터 확인폼으로 이동');
        location.href='formView.php?phone1=$phoneArr[0]&phone2=$phoneArr[1]&phone3=$phoneArr[2]';
    </script>
";








?>