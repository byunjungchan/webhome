<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
   <?php include "header.php";?>
    <div class="login">
        <h1>Log In</h1>
        <div class="loginForm">
          <div class="loginHeader">
           <ul>
               <li class="on">회원로그인</li>
               <li>비회원(주문조회)</li>
           </ul>
           </div>
           <div class="loginContent">
            <form action="loginOk.php" method="post">
            <ul>
                <li><input type="text" name="userId" id="userId" placeholder="   아이디"></li>
                <li><input type="password" name="userPw" id="userPw" placeholder="   비밀번호"></li>
                <li><input type="submit" value="로그인" id="loginSubmit"></li>
            </ul>
            </form>
            </div>
            <div class="loginFooter">
                <ul>
                    <li><a href="join.php">회원가입</a></li>
                    <li><a href="idSerch.php">아이디찾기</a></li>
                    <li><a href="pwSerch.php">비밀번호찾기</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <script>
        
        var topBtn=$('.loginHeader >ul>li');
        var arr1=['아이디','비밀번호'];
        var arr2=['주문번호','주문자 연락처'];
        var userId=$('input#userId');
        var userPw=$('input#userPw');
        
        topBtn.on('click',function(e){
            var idx=($(this).index());
           $(this).addClass('on').siblings().removeClass('on'); 
            
            if(idx==0){
                userId.attr('placeholder',arr1[0]);
                userPw.attr('placeholder',arr1[1]);
            }else if(idx==1){
                userId.attr('placeholder',arr2[0]);
                userPw.attr('placeholder',arr2[1]);
            }
        });
    
    </script>
    <script src="js/gnb.js"></script>
    
</body>
</html>