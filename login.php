<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://pineapple9716.dothome.co.kr">
    <meta property="og:image" content="./images/snsicon.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="teeny tiger">
    <meta property="og:locale" content="ko">
    <meta property="og:title" content="teeny tiger">
    <meta property="og:description" content="teeny tiger">

    <title>로그인 :: 티니타이거</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/favicon.ico">  <!-- 주소표시줄 : 파비콘(16*16) -->
    <link rel="apple-touch-icon" href="./images/tt.png">  <!-- 스마트폰 바탕화면 : 바로가기 아이콘(144*144)-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>
<body>
    
    <div id="wrap">

        <?php include 'header.php'; ?>

        <section class="loginPage">
            <div class="loginContent">
                <h2>Login</h2>
                <p>RETURNING CUSTOMERS</p>
                <form action="login_ok.php" method="post" name="login">
                <p>
                   <label for="id">ID</label>
                   <input type="text" id="id" name="id">
                </p>
                <p>
                    <label for="pw">PassWord</label>
                   <input type="password" id="pw" name="pw">
                </p>
                <p>
                    <button type="button" onclick="chk_input()">Login</button>
                </p>
                </form>
            </div>
        </section>

        <?php include 'footer.php'; ?>

    </div>


    <div id="onlyMobile">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>


    <script src="./js/asan.js"></script>
    <script>
        function chk_input() {
            if ( !document.login.id.value ) {
                alert("아이디를 입력하세요.");
                document.login.id.focus();
                return false;
            }
            if ( !document.login.pw.value ) {
                alert("비밀번호를 입력하세요.");
                document.login.pw.focus();
                return false;
            }
            document.login.submit();
        }
    </script>
</body>
</html>