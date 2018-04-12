<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>join</title>
</head>
<body>
    <form action="joinOk.php" method="get" name="joinOkForm">
        아이디: <input type="text" name="userId" placeholder="아이디를 입력하세요."><br>
        
        비밀번호: <input type="password" name="userPw" placeholder="비밀번호를 입력하세요."><br>
        
        나이: <input type="text" name="userAge" placeholder="정확한 나이를 쓰세요."><br>
        
        핸드폰: <select name="userPhone1">
            <option value="010" selected>010</option>
            <option value="010">011</option>
            <option value="010">070</option>
        </select> 
          - <input type="text" name="userPhone2" placeholder="4자리입력">
          - <input type="text" name="userPhone3" placeholder="4자리입력"><br>
          
          취미: 
          <input type="checkbox" name=s"userHobbys[]" value="영화" checked>영화
          <input type="checkbox" name="userHobbys[]" value="음악">음악
          <input type="checkbox" name="userHobbys[]" value="농구">농구
          <input type="checkbox" name="userHobbys[]" value="축구">축구<br>
        
          <input type="submit" value="회원가입" id="joinOk">
        

    </form>
    <script>
        
        var joinOkForm = document.getElementsByName('joinOkForm')[0]; 
        var joinOk = document.getElementById('joinOk');
        
        
        var userId=joinOkForm.userId;
        var userPw=joinOkForm.userPw;
        var userAge=joinOkForm.userAge;
        var userPhone2=joinOkForm.userPhone2;
        var userPhone3=joinOkForm.userPhone3;
        
        joinOk.addEventListener('click', joinOkFunc);
        
        function joinOkFunc(e){
            if(userId.value == "" || userId.value == null){
                alert("아이디 입력 오류");
                userId.focus();
                return;
            }
            if(userPw.value == "" || userPw.value == null){
                alert("비밀번호 입력 오류");
                userPw.focus();
                return;
            }
            if(userAge.value == "" || userAge.value == null){
                alert("나이 입력 오류");
                userAge.focus();
                return;
            }
            if(userPhone2.value == "" || userPhone2.value == null){
                alert("첫번째 전화번호 입력 오류");
                userPhone2.focus();
                return;
            }
            if(userPhone3.value == "" || userPhone3.value == null){
                alert("마지막 전화번호 입력 오류");
                userPhone3.focus();
                return;
            }
            
            joinOkForm.submit();
            
            
        }
    

    </script>
    
</body>
</html>