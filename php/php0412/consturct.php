<?php

class Members{
    private $userId;//클래스내에서만 접근 가능(private);
    private $userPw;
    private $userName;
    
    //생성자(객체생성을 도와주는 매서드)
    function __construct($userId,$userPw,$userName){
        
        $this->userId=$userId;
        $this->userPw=$userPw;
        $this->userName=$userName;
        
    }
   
    //getter 초기화 맴버를 get
    function getUserId(){
        return $this->userId;
    }
    function getUserPw(){
        return $this->userPw;
    }
    function getUserName(){
        return $this->userName;
    }
}

//__construct
$member1=new Members('soyo','1111','byun');
$member2=new Members('soyo2','2222','jung');
$member3=new Members('soyo3','3333','chan');

echo "아이디: ".$member1->getUserId()."<br>";
echo "비밀번호: ".$member1->getUserPw()."<br>";
echo "이름: ".$member1->getUserName()."<br>";


?>