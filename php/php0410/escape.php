<?php

//문자열 함수 이스케이프
$str = "soyo '2018'";
echo $str."<br>";

// '' 이 값까지 추가로 db에 추가로 들어가게 할라면 addslashes로 해줌
//ex)I'm a boy 를 문자열로 지정해서 'I'm a boy' 이렇게 쿼리로 전송되게 되면, I 뒤의 작은 따옴표 때문에 오류가 발생하게 됩니다.
//그래서, 내부에 위치하게 될 따옴표들을 기준을 가지고 다르게 표현을 해 줘야합니다. 흔히들 이스케이프(escape) 시킨다...라고 표현하는데요.

//addslashes 미리선언된 아래 4개의 유형을 자동으로 이스케이프 추가
    //single quote (')
    //doble quote (")
    //backslash (\)
    //NULL

echo addslashes($str)."<br>";//이스케이프 추가

$strJSON = "{'userId':'soyo','userPw':'1111','userName':'jung'}";
echo $strJSON;
echo "<br>";

echo addslashes($strJSON)."<br>";

echo stripslashes(addslashes($strJSON));//이스케이프 제거

//stripslashes 이스케이프 제거
///DB에서 다시 꺼내왔을 때는 추가됐던 백슬래쉬를 제거를 해줘야 원래의 문자열이 되겠지요? 추가됐던 백슬래쉬를 제거해주는 함수가 아래의 stripslashes() 입니다.




?>