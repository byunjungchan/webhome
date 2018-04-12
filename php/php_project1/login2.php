<?php

$members = $_GET['members'];
echo "<pre>";
print_r($members);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
</head>
<body>
   <?php
    
    foreach($members as $key=>$val){
        echo $key."=>".$val."<br>";
    }
    
    
    ?>
    <form action="login2Ok.php" method="post">
        id: <input type="text" name="userId"><br>
        pw: <input type="password" name="userPw"><br>
        <input type="submit" value="로그인">
        
        
    </form>
</body>
</html>