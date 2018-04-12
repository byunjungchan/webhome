<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>phone</title>
</head>
<body>
    <form action="phoneOk.php" method="post">
        
        전화번호 : <select name="userPhone[]">
            <option value="010" selected>010</option>
            <option value="011">011</option>
            <option value="070">070</option>
        </select>
         - <input type="text" name="userPhone[]" size="5" maxlength="4">
        - <input type="text" name="userPhone[]" size="5" maxlength="4"><br>
        
        <input type="checkbox" name="userHobbys[]" value="등산">등산
        <input type="checkbox" name="userHobbys[]" value="영화">영화
        <input type="checkbox" name="userHobbys[]" value="음악">음악
        <input type="checkbox" name="userHobbys[]" value="코딩">코딩
        <input type="checkbox" name="userHobbys[]" value="수면">수면
        <br>
        <input type="submit" value="인증">
        
    </form>
</body>
</html>