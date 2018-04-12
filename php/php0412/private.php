<?php

class Members{
    private $userId;//클래스내에서만 접근 가능(private);
    private $userPw;
    private $userName;
    
    function insertDoMethod($userId,$userPw,$userName){
        
        $this->userId=$userId;
        $this->userPw=$userPw;
        $this->userName=$userName;
        
    }
    //setter 외부에서 맴버를 초기화
    function setUserId($userId){
        $this->userId=$userId;
    }
    function setUserPw($userPw){
        $this->userPw=$userPw;
    }
    function setUserName($userName){
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

$member2=new Members;
$member2->insertDoMethod('soyo2','2222','jung');

echo "member2 아이디: ".$member2->getUserId()."<br>";
echo "member2 비밀번호: ".$member2->getUserPw()."<br>";
echo "member2 이름: ".$member2->getUserName()."<br>";

echo "=================<br>";

//괄호 넣어도 되고, 맘대로
$member1=new Members;
//$member1->userId="soyo";//private 때문에 직접 접근이 안됨
$member1->setUserId("soyo");//그래서 셋으로 초기화하고, 
$member1->setUserPw("1111");
$member1->getUserName('byun');

echo $member1->getUserId()."<br>";//겟으로 가져온다.
echo $member1->getUserPw()."<br>";//메서드는 호출한 그 시점(지점)에서 return
echo $member1->getUserName()."<br>";






?>