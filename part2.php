<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://tsalt.dothome.co.kr">
    <meta property="og:image" content="./images/snsicon.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="아산병원">
    <meta property="og:locale" content="ko">
    <meta property="og:title" content="아산병원">
    <meta property="og:description" content="서울아산병원을 소개하는 글">

    <title>가정의학과 :: 아산병원</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/favicon.ico">  <!-- 주소표시줄 : 파비콘(16*16) -->
    <link rel="apple-touch-icon" href="./images/asan.png">  <!-- 스마트폰 바탕화면 : 바로가기 아이콘(144*144)-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>
<body>
    
    <div id="wrap">

        <?php include 'header.php'; ?>

         <section class="medicalListPage">
            <div class="medicalListContent">
                <h2 class="pageTitle">
                    <a href="#none" onclick="goprev()">
                        <img src="./images/img_prev.png" alt="이전페이지">
                    </a>
                    간담도췌외과
                </h2>
                <div class="doctor" id="part2">
                    <!-- <ul>
                        <li>
                            <div class="img">
                                <img src="./images/doctor1.jpg" alt="">
                            </div>
                            <div class="info">
                                <strong>김영식</strong>
                                <p>가정의학과</p>
                                <div>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias fugiat nihil iusto dignissimos necessitatibus deserunt maxime eum sint culpa laboriosam molestiae facilis ipsa, quam aut officia iste quia ex neque.
                                </div>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>

    </div>


    <div id="onlyMobile">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>


    <script src="./js/asan.js"></script>
    <script src="./js/part.js"></script>
</body>
</html>