<?php
//중요*****
$entity = "<b>b요소가 삭제되어 출력화면에 나타난다.</b>";

echo $entity."<br>";
echo "<br>";


// nl2br(값); 값 그대로 표시
echo nl2br(
  "안녕하세요~
변정찬 입니다.
고맙습니다."
);
echo "<br>";

echo nl2br(
"123
4565678
78763"
);











?>