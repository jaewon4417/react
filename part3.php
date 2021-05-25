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

    <title>진료과3 :: 아산병원</title>
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
                    진료과3
                </h2>
                <div class="doctor" id="part3">
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
    <!-- <script src="./js/part.js"></script> -->
    <script>

        async function getFile(file) {
            let data = await fetch(file);
            let jdata = await data.json();
            if (jdata) {
                return jdata;
            } else {
                alert("오류발생");
                return false;
            }
        } 
        
        // getFile('https://yts.mx/api/v2/list_movies.json').then( (usedata)=>{ 
        //     var movieList = "";
        //     var movie = document.querySelector(".doctor")
        //     for (var i in usedata.data.movies) {
        //         movieList += `<li><div class="img"><img src="${usedata.data.movies[i].medium_cover_image}" alt=""></div>`;
        //         movieList += `<div class="info"><strong>${usedata.data.movies[i].title}</strong>`;
        //         movieList += `<p>${usedata.data.movies[i].year}</p>`;
        //         movieList += `<div>${usedata.data.movies[i].summary}</div></div></li>`
        //     }
        //     movie.innerHTML = `<ul class="dlist">${movieList}</ul>`
        //  } )



getFile('https://newsapi.org/v2/top-headlines?country=kr&apiKey=11ba08dfbd7e4f3c83ac93b27aa1dcb7').then( (usedata)=>{ 
            var movieList = "";
            var movie = document.querySelector(".doctor")
            for (var i in usedata.articles) {
                movieList += `<li><div class="img"><img src="${usedata.articles[i].urlToImage}" alt=""></div>`;
                movieList += `<div class="info"><strong>${usedata.articles[i].title}</strong>`;
                movieList += `<p>${usedata.articles[i].description}</p>`;
                movieList += `<div>${usedata.articles[i].publishedAt}</div></div></li>`
            }
            movie.innerHTML = `<ul class="dlist">${movieList}</ul>`
         } )

    </script>

</body>
</html>