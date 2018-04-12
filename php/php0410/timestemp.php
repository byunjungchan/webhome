<?php
//시간 / 날짜 함수


//현재 timestamp(특정한 시각); 자동
echo time()."<br>";

//date('표시될 포맷', 특정 timestamp);
echo date('y-m-d',time())."<br>"; 

//mktime(시,분,초,월,일,년) >> mk >> 특정 timestamp 만든다.
echo mktime(10,10,10,4,10,2018)."<br>";

//날짜 형식이 맞으면 true
echo checkdate(01,19,2018)."<br>";

if(checkdate(02,28,2018)){
    echo "날짜 형식에 맞습니다."."<br>";
}else{
    echo "날짜 형식에 맞지 않습니다.";
}

//get 가져온다. 날짜를 가져오는데 배열로 가져온다.
getdate(time());//timestamp를 변환 >> 배열

$dateArray = getdate(time());

echo $dateArray['year']."년<br>";
echo $dateArray['mon']."월<br>";
echo $dateArray['mday']."일<br>";
echo $dateArray['hours']."시<br>";
echo $dateArray['minutes']."분<br>";
echo $dateArray['seconds']."초<br>";

$year = $dateArray['year'];
$mon = $dateArray['mon'];
$mday = $dateArray['mday'];
$hours = $dateArray['hours'];
$minutes = $dateArray['minutes'];
$seconds = $dateArray['seconds'];

$time = $year."년".$mon."월".$mday."일".$hours."시".$minutes."분".$seconds."초<br>";

echo $time;

























?>