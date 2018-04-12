<?php

//연관배열

$members = array(

'userId'=>'soyo',
'userPw'=>'2222',
'userName'=>'jungchan',
'userPhone'=>'010-3739-5263'
);

echo "<pre>";
print_r($members);
echo "</pre>";

foreach($members as $key => $val){
    echo $key."=>".$val."<br><br>";
}

echo "==============================<br>";

$arrInt = array(0=>1, 1=>2, 2=>3, 3=>4, 4=>5);

echo "<pre>";
print_r($arrInt);
echo "</pre>";

foreach($arrInt as $key => $val){
    echo $key."=>".$val."<br>";
}








?>