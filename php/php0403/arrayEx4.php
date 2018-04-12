<?php

//연관 배열
$arrInt[0]=1;
$arrInt[1]=2;
$arrInt[2]=3;
$arrInt[3]=4;
$arrInt[4]=5;

echo "<pre>";
print_r($arrInt);
echo "</pre>";

for($i=0;$i<count($arrInt);$i++){
    echo "[".$i."]=>".$arrInt[$i]."<br>";
}

$arrMembers['userId'] = 'soyo';
$arrMembers['userPw'] = '2222';
$arrMembers['userName'] = '정찬';
$arrMembers['userGender'] = '남자';
$arrMembers['userPhone'] = '010-3739-5263';

echo "<pre>";
print_r($arrMembers);
echo "</pre>";

for($i=0;$i<count($arrMembers);$i++){
    $key;
    $val;
        if($i==0){
            $key='userId';
            $val=$key;
        }else if($i==1){
            $key='userPw';
            $val=$key;
        }else if($i==2){
            $key='userName';
            $val=$key;
        }else if($i==3){
            $key='userGender';
            $val=$key;
        }else if($i==4){
            $key='userPhone';
            $val=$key;
        }
    echo $val."=>".$arrMembers[$key]."<br>";
}


?>