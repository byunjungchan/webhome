<?php
//클래스

class ClassBasic{
    public $userId='soyo';//맴버(필드, 프로퍼티)
    public $userPw;
    
    function classMethod(){//맴버 (매서드)
        echo "클래스 맴버(매서드) OK";
    }
        
}
//인스턴스화(객체화)
$object1 = new ClassBasic();
echo gettype($object1);
echo "<br>";
echo $object1->userId;//객체의 맴버(필드)
echo "<br>";

$object1->userPw='1111';//userPw 초기화
echo $object1->userPw;
echo "<br>";
$object1->classMethod();//객체의 매서드 접근
echo "<br>";


$object1->arrInt = array(1,2,3,4,5);

foreach($object1->arrInt as $val){
    echo $val."<br>";
}


?>