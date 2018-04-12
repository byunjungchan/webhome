<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
</head>
<body>
    <form action="join2OK.php" method="post">
       
        아이디: <input type="text" name="userId"><br>
        비밀번호: <input type="text" name="userPw"><br>
        성별: 
        <input type="radio" name="userGender" value="남자" checked>남자
        <input type="radio" name="userGender" value="여자">여자<br>
        취미:
        <input type="checkbox" name="userHobbys[]" value="등산" checked>등산
        <input type="checkbox" name="userHobbys[]" value="축구">축구
        <input type="checkbox" name="userHobbys[]" value="음악">음악
        <input type="checkbox" name="userHobbys[]" value="영화">영화<br>
        전화번호
        <select name="userPhone1" id="">
            <option value="010" selected>010</option>
            <option value="011">011</option>
            <option value="070">070</option>
        </select> - <input type="text" name="userPhone2">
        - <input type="text" name="userPhone3"><br>
        <input type="submit" value="회원가입">
        

    </form>
</body>
</html>