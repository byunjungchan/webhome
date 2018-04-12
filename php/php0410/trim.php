<?php

//trim 공백제거(좌우)
//ex)아이디 입력하는데, 한칸을 띄웠다. 근데 로그인이 된다면? trim을 써서 공백을 제거해줌

$str = "soyo ";

echo $str;
echo "<br>";
echo strlen($str);
echo "<br>";


echo trim($str);
echo "<br>";
echo strlen(trim($str));


?>