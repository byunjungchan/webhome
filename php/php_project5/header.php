<?php include 'count.php';?>
<?php 
@session_start();
?>
   <div class="header">
   <div class="count" style="color:#fff; float:left"><?=$val?>번째 방문입니다.</div>
    <div class="gnb">
        <ul>
            <li><a href="index.php">HOME</a>
            <ul class="sub one">
                <li>시즌 추천</li>
                <li>매거진</li>
                <li>차 정보</li>
            </ul>
            </li>
            
            <li><a href="#">tea Guide</a>
            <ul class="sub two">
                <li>시즌 추천</li>
                <li>매거진</li>
                <li>차 정보</li>
            </ul></li>
            
            <li><a href="#">about Osulloc</a>
            <ul class="sub thr">
                <li>brand story</li>
                <li>since 1979</li>
                <li>오설록 차밭 이야기</li>
            </ul></li>
            
            <li><a href="#">tea Life</a>
            <ul class="sub for">
                <li>이벤트</li>
                <li>SNS</li>
                <li>커뮤니Tea</li>
            </ul></li>
            
            <li><a href="#">MEMBER</a>
            <ul class="sub fiv">
              <?php
               if(isset($_SESSION['sessionId'])){
                    echo "<li><a href=\"logOutOk.php\">로그아웃</a></li>";
                    echo "<li><a href=\"memberUpdate.php\">회원수정</a></li>";
                    echo "<li><a href=\"select.php\">회원조회</a></li>";
                    echo "<li><a href=\"delete.php\">회원탈퇴</a></li>";
                    echo "<li><span class='sessionId'>".$_SESSION['sessionId']."님</span></li>";
               }else{
                    echo "<li><a href='login2.php'>로그인</a></li>";
                    echo "<li><a href='join.php'>회원가입</a></li>";
                    echo "<li><a href='board.php'>게시판</a></li>";
               }
               ?>
            </ul></li>
        </ul>
    </div>
    <div class="box"></div>
</div>