<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://pineapple9716.dothome.co.kr">
    <meta property="og:image" content="./images/tt.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="teeny tiger">
    <meta property="og:locale" content="ko">
    <meta property="og:title" content="teeny tiger">
    <meta property="og:description" content="teeny tiger">

    <title>로그인 :: 아산병원</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/favicon.ico">  <!-- 주소표시줄 : 파비콘(16*16) -->
    <link rel="apple-touch-icon" href="./images/asan.png">  <!-- 스마트폰 바탕화면 : 바로가기 아이콘(144*144)-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>
<body>
    
    <div id="wrap">

        <?php include 'header.php'; ?>

         <section class="boardPage">
            <div class="boardContent">
                <h2>자유게시판 > 글쓰기</h2>
                <form action="board_insert.php" name="board_form" method="post" enctype="multipart/form-data">
                <ul id="board_form">
                    <li>
                        <span>이름 : </span>
                        <span>
                            <?=$username?>
                        </span>
                    </li>
                    <li>
                        <span><label for="irum">제목</label> : </span>
                        <span>
                            <input type="text" name="subject" id="irum">
                        </span>
                    </li>
                    <li>
                        <span><label for="cont">내용</label> : </span>
                        <span>
                            <textarea name="content" id="cont"></textarea>
                        </span>
                    </li>
                    <li>
                        <span><label for="attach">첨부파일</label> : </span>
                        <span>
                            <input type="file" name="upfile" id="attach">
                        </span>
                    </li>
                </ul>
                <div class="buttons">
                    <button type="button" onclick="check_input()">전송</button>
                    <button type="button" onclick="location.href='board_list.php'">목록</button>
                </div>
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
        function check_input() {
            if ( !document.board_form.subject.value ) {
                alert("제목을 입력하세요!");
                document.board_form.subject.focus();
                return false;
            }
            if ( !document.board_form.content.value ) {
                alert("내용을 입력하세요!");
                document.board_form.content.focus();
                return false;
            }
            document.board_form.submit();
        }
    </script>
</body>
</html>