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

    <title>진료과 :: 아산병원</title>
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
                    진료과
                </h2>
               <ul class="partList">
                   <li><a href="part1.php">가정의학과</a></li>
                   <li><a href="part2.php">간담도췌외과</a></li>
                   <li><a href="part3.php">진료과3</a></li>
                   <li><a href="#">진료과4</a></li>
                   <li><a href="#">진료과5</a></li>
                   <li><a href="#">진료과6</a></li>
                   <li><a href="#">진료과7</a></li>
                   <li><a href="#">진료과8</a></li>
                   <li><a href="#">진료과9</a></li>
                   <li><a href="#">진료과10</a></li>
                   <li><a href="#">진료과11</a></li>
                   <li><a href="#">진료과12</a></li>
                   <li><a href="#">진료과13</a></li>
                   <li><a href="#">진료과14</a></li>
                   <li><a href="#">진료과15</a></li>
                   <li><a href="#">진료과16</a></li>
                   <li><a href="#">진료과17</a></li>
                   <li><a href="#">진료과18</a></li>
                   <li><a href="#">진료과19</a></li>
                   <!-- <li><a href="#">진료과20</a></li> -->
               </ul>   
            </div>
            <div class="box"></div>
        </section>

        <?php include 'footer.php'; ?>

    </div>


    <div id="onlyMobile">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>


    <script src="./js/asan.js"></script>
    
</body>
</html>