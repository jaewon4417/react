<?php 
    session_start();
    if ( isset($_SESSION["userid"]) ) {
        $userid = $_SESSION["userid"];
    } else {
        $userid = "";
    }

    if ( isset($_SESSION["username"]) ) {
        $username = $_SESSION["username"];
    } else {
        $username = "";
    }

?>

<header id="header">
    <div class="inner">
         <div id="lnb_menu" class="lnb_menu">
             <img src="images/bg_header_lnb.png" alt="메뉴열기">
         </div>
         <div id="navWrap">
             <nav id="lnb">
                 <div class="member">
                      <?php 
                        if ( !$userid ) {
                      ?>

                      <div class="inBtn loginBtn"><a href="login.php">로그인</a></div>
                      <div class="inBtn joinBtn"><a href="join.php">회원가입</a></div>

                      <?php
                        } else {
                            $logged = $username."(".$userid.") 님 환영합니다!! ";
                      ?>

                      <div class="inBtn loginBtn"><a href="logout.php"><?=$logged?>로그아웃 </a></div>
                      <div class="inBtn joinBtn"><a href="join_modify.php">정보수정</a></div>

                      <?php
                        }
                      ?>  
                 </div>

                 <ul class="menuBox">
                     <li><a href="part1.html" class="part1">가정의학과</a></li>
                     <li><a href="#">메뉴2</a></li>
                     <li><a href="#">메뉴3</a></li>
                     <li><a href="#">메뉴4</a></li>
                     <li><a href="#">메뉴5</a></li>
                 </ul>
                 <div class="reserveBtn">
                     <a href="tel:1688-7575">예약및문의 1688-7575</a>
                 </div>
                 <div id="lnb_close" class="lnb_close">
                     <img src="images/bg_header_lnb_active.png" alt="메뉴닫기">
                 </div>
             </nav>
         </div>
         <h1 class="logo">
             <a href="index.php"><img src="images/img_header_logo.png" alt="서울아산병원"></a>
         </h1>
         <div class="search">
             <a href="#"><img src="images/img_topSerch.png" alt="검색"></a>
         </div>
    </div>
 </header>


