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
    <link rel="apple-touch-icon" href="./images/tt.png">  <!-- 스마트폰 바탕화면 : 바로가기 아이콘(144*144)-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>
<body>
    
    <div id="wrap">

        <?php include 'header.php'; ?>

         <section class="boardPage">
            <div class="boardContent">
                <h2>자유게시판</h2>
                <div id="board_list">
                    <table class="free_board">
                        <caption>자유게시판</caption>
                        <colgroup>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>제목</th>
                                <th>글쓴이</th>
                                <th>첨부</th>
                                <th>날짜</th>
                                <th>조회</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $con = mysqli_connect("localhost", "tsalt", "truesalt9!", "tsalt");
                            $sql = "select * from mobboard order by num desc";
                            $result = mysqli_query($con, $sql);
                            $total_record = mysqli_num_rows($result);
                            
                            if ( isset($_GET["page"]) ) {
                                $page = $_GET["page"];
                            } else {
                                $page = 1;
                            }
                            $scale = 10;

                            // 전체 페이지수($total_page) 계산
                            if ( $total_record % $scale == 0 ) {
                                $total_page = $total_record / $scale;
                            } else {
                                $total_page = floor($total_record / $scale) + 1;
                            }
                            $start = ($page-1)*$scale;  // 0~9(<10), 10~19(<20), 20~29(<30)
                            $number = $total_record - $start;  // 31~22(10), 21~12(10), 11~2(10), 1

                            for ( $i=$start; $i<$page*$scale && $i<$total_record; $i++ ) {
                                mysqli_data_seek($result, $i);        // 가져올 레코드로 위치(포인터) 이동
                                $row = mysqli_fetch_array($result);   // 하나의 레코드 가져오기
                                $num = $row["num"];
                                $subject = $row["subject"];
                                $irum = $row["irum"];
                                if ( $row["file_name"] ) {
                                    $file_image = "<img src='./images/file.gif'>";
                                } else {
                                    $file_image = "";
                                }
                                $regist_day = $row["regist_day"];
                                $hit = $row["hit"];
                            ?>

                            <tr>
                                <td><?= $number; ?></td>
                                <td> <a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject;?></a> </td>
                                <td><?= $irum; ?></td>
                                <td><?= $file_image; ?></td>
                                <td><?= $regist_day; ?></td>
                                <td><?= $hit; ?></td>
                            </tr>

                        <?php 
                            $number--;
                            }
                            mysqli_close($con);
                        ?>
                        </tbody>
                    </table>
                    <ul id="page_num">
                         <?php 
                            for ($i=1; $i<=$total_page; $i++) {
                                if ($page==$i) {
                                    echo "<li> <b> [{$i}] </b> </li>";
                                } else {
                                    echo "<li> <a href='board_list.php?page=$i'>[{$i}]</a> </li>";
                                }
                            }
                         ?>   
                    </ul>
                    <div class="buttons">
                        <?php 
                         if ($userid) {
                        ?>
                           <button onclick="location.href='board_form.php'">글쓰기</button>
                        <?php 
                        } else {
                        ?>
                           <button onclick="alert('로그인후 이용해 주세요!')">글쓰기</button>
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>

    </div>


    <div id="onlyMobile">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>


    <script src="./js/asan.js"></script>
    <script>
        
    </script>
</body>
</html>