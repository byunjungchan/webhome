<?php

//다차원배열

$members = array();

$members[0] = array('userId'=>'soyo0823','userPw'=>'1111','userAge'=>23);
$members[1] = array('userId'=>'soyo0404','userPw'=>'2222','userAge'=>26);
$members[2] = array('userId'=>'soyo0926','userPw'=>'3333','userAge'=>18);


echo "<pre>";
print_r($members);
echo "</pre>";

foreach($members as $key){
    foreach($key as $key2=>$val){
    echo $key2."=>".$val."<br>";
        }
    echo "<br>";
}





?>