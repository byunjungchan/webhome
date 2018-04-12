<?php
$members = array();

$members[0] = array('userId'=>'so', 
                    'userPw'=>'11', 
                    'userName'=>'byun', 
                    'userAge'=>18, 
                    'userPhone'=>'010-3739-1111');

$members[1] = array('userId'=>'yo', 
                    'userPw'=>'22', 
                    'userName'=>'jung', 
                    'userAge'=>26, 
                    'userPhone'=>'010-3739-2222');

$members[2] = array('userId'=>'bo', 
                    'userPw'=>'33', 
                    'userName'=>'chan', 
                    'userAge'=>13, 
                    'userPhone'=>'010-3739-3333');


echo "<pre>";
print_r($members);
echo "</pre>";

echo count($members)."<br>";//배열의 갯수 3개
echo count($members[0])."<br>";//배열 요소 하나당 >> 5개

echo $members[0]['userId'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>아이디</th>
            <th>비밀번호</th>
            <th>이름</th>
            <th>나이</th>
            <th>전화번호</th>
        </tr>
        
        <?php
        /* 이렇게 할 수도 있고 
            for($i=0;$i<count($members);$i++){
            
            echo "<tr>";
                
            echo "<td>".$members[$i]['userId']."</td>
                  <td>".$members[$i]['userPw']."</td>
                  <td>".$members[$i]['userName']."</td>
                  <td>".$members[$i]['userAge']."</td>
                  <td>".$members[$i]['userPhone']."</td>";
                
            echo "</tr>";
            };
          밑에 처럼 할 수도있고 */ 
        
        foreach($members as $idx){
                echo "<tr>";
            foreach($idx as $val){
                echo "<td>".$val."</td>";
            }
            echo "</tr>";
        }
        
        ?>
        
        <?php
        
        foreach($members as $idx){
            
                ?>
                
            <tr>
                
                <?php
            
            foreach($idx as $val){
                
                ?>
                
                <td><?=$val?></td>;
                
                <?php
                    
            }
            
            ?>
            
            </tr>
            
            <?php
        }

        ?>
        

        
    </table>
</body>
</html>