<?php

//연관 배열


$arrMembers['userId'] = 'soyo';
$arrMembers['userPw'] = '2222';
$arrMembers['userName'] = '정찬';
$arrMembers['userGender'] = '남자';
$arrMembers['userPhone'] = '010-3739-5263';

echo "<pre>";
print_r($arrMembers);
echo "</pre>";

foreach($arrMembers as $key => $val){
    echo $key."=>".$val."<br>";
}

echo "=============================<br>";

foreach($arrMembers as $val){
    echo $val."<br>";
}


?>