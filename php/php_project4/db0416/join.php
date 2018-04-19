<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
</head>
<body>
    <form action="joinOk.php" method="post">
        id: <input type="text" name="userId"><br>
        pw: <input type="password" name="userPw"><br>
        성별: <input type="radio" name="userGender" value="남자" checked>남자
        <input type="radio" name="userGender" value="여자">여자<br>
        
        취미: <input type="checkbox" name="userHobbys[]" value="여행" checked>여행
        <input type="checkbox" name="userHobbys[]" value="독서">독서
        <input type="checkbox" name="userHobbys[]" value="영화">영화
        <input type="checkbox" name="userHobbys[]" value="축구">축구
        <input type="checkbox" name="userHobbys[]" value="코딩">코딩<br>
        전화번호: <select name="userPhone[]">
            <option value="010" selected>010</option>
            <option value="011">011</option>
            <option value="070">070</option>
        </select> - <input type="text" name="userPhone[]" size="4" maxlength="4"> - <input type="text" name="userPhone[]" size="4" maxlength="4"><br>
        
        <input type="submit" value="회원가입">
        
    </form>
</body>
</html>