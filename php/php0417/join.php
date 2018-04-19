<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>오설록 회원가입</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/join.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
   <div class="wrap">
   
   <?php include 'header.php';?>
   
    <div class="join">
        <h1 class="title">환영합니다.</h1>
        <form action="login2Ok.php" method="post">
        <div class="contents">
            <ul>
                <li><input type="text" name="userId" maxlength="12" size="12" placeholder="아이디 4~12자리를 입력해주세요"></li>
                <li><input type="password" name="userPw" maxlength="16" size="16" placeholder="비밀번호 4~16자리 영문 대소문자, 숫자"></li>
                <li><input type="password" id="PwChecked" maxlength="16" size="16" placeholder="비밀번호 확인"></li>
                <li><input type="text" name="userName" placeholder="이름(실명으로 입력해주세요.)"></li>
                <li class="Year"><input type="text" name="userYear">
                    <input type="radio" name="userGender" value="남자" checked>남자
                    <input type="radio" name="userGender" value="여자">여자
                </li>
                <li>
                    <select name="userPhone[]">
                        <option value="" selected>통신사 선택</option>
                        <option value="010">010</option>
                        <option value="011">011</option>
                        <option value="070">070</option>
                    </select>
                    <input type="text" name="userPhone[]">
                </li>
                <li>
                    <input type="submit" value="가입완료">
                </li>
            </ul>
        </div>
        </form>
    </div>
    </div>   
    
    <script src="js/gnb.js"></script>
    
        
</body>
</html>