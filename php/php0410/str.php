<?php

$str = "soyo 2018 Go";
$strLen = strlen($str);//문자열 길이
//영어 1byte, 한글 3byte, 공란도 1byte
echo $strLen;
echo "<br>";


$str2 = "대한민국";
echo strlen($str2);
echo "<br>";

echo gettype(strlen($str2));
echo "<br>";

///$str = "soyo 2018 Go";
//substr(문자열, 시작인덱스, 가져올 갯수)
echo $str."의 길이는".$strLen."<br>";
$strSub1 = substr($str,0,5);

echo "substr()".$strSub1."<br>";
$strSub2 = substr($str,6,4);
echo $strSub2."<br>";
echo "substr()".$strSub2."<br>";

$strSub3 = substr($str,11,2);
echo $strSub3."<br>";
echo "substr()".$strSub3."<br>";

echo "========================";

$insert = "insertIntoDo.php";
$delete = "deleteDo.php";
$select = "selectFromDo.php";
$update = "updateSetDo.php";
echo "<br>";

//.php만 빼고 가져오기, 졸라어렵네ㅡㅡ
//substr(문자열, 시작인덱스, 가져올 갯수)
echo substr($insert,0,strlen($insert)-strlen(".php"))."<br>";
echo substr($delete,0,strlen($delete)-strlen(".php"))."<br>";
echo substr($select,0,strlen($select)-strlen(".php"))."<br>";
echo substr($update,0,strlen($update)-strlen(".php"))."<br>";

//Do.php 빼고 가져오기
echo substr($insert,0,strlen($insert)-strlen("Do.php"))."<br>";
echo substr($delete,0,strlen($delete)-strlen("Do.php"))."<br>";
echo substr($select,0,strlen($select)-strlen("Do.php"))."<br>";
echo substr($update,0,strlen($update)-strlen("Do.php"))."<br>";

echo "========================<br>";

$site1 = "DbMmberLogin.do";
$site2 = "DbMmberLogOut.do";
$site3 = "DbMmberJoin.do";
$site4 = "DbMmberUpdate.do";
$site5 = "DbMmberDelete.do";
$site6 = "DbMmberSelect.do";

controllsite($site1);controllsite($site2);controllsite($site3);controllsite($site4);controllsite($site5);controllsite($site6);

echo substr($site1,0,strlen($site1)-strlen(".do"));

function controllsite($site){
    echo substr($site,0,strlen($site)-3)."<br>";
}

echo "<br>";
echo "========================<br>";

//replace 선택된 문자열을 바꾼다.
//str_replace(문자열, 선택문자열, 바꿀문자열);

$str = "soyo PHP 2018";
echo $str;
echo "<br>";

echo str_replace($str,"2018","2019");
echo "<br>";

echo $str."<br>";
echo str_replace($str,"PHP","PHP7");
echo "<br>";














?>