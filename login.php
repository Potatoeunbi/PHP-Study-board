<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <title >로그인</title>
</head>
<body>
  <form method="post" action="check_login.php" class="loginForm">
    <fieldset style="width:300px; height:200px; padding: 15px;">

        <legend style="font-size:130%; text-align:center">로그인</legend>

        아이디  <br>

        <input type="text" style="vertical-align: 0px" name="id" class="id"><br>

        비밀번호  <br>

        <input type="text" style="vertical-align: 1px" name="pw" class="pw"><br><br>

        <button class="btn" style="vertical-align: 2px" type="submit" onclick="button()" >로그인</button>


        <div class="bottomText" style="margin-top:10px">
            <a href="#" style="margin:5px">비밀번호 찾기</a>
            <a href="#" style="margin:5px">아이디 찾기</a>
            <a href="/member/member.php" style="margin:5px">회원가입</a>
        </div>
    </fieldset>


  </form>
</body>
</html>