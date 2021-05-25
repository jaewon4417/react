$('#header .lnb_menu').on('click', function(){
    $('#header').addClass('on')
    $('#lnb').animate({
        left:'0px'
    }, 500)
})

$('#header .lnb_close').on('click', function(){
    $('#lnb').animate({
        left:'-290px'
    }, 500, function(){
        $('#header').removeClass('on')
    })
})


setInterval(function(){
    $('.mainContent .main_noti a:first-child').animate({
        marginTop:'-50px'
    }, 500, function(){
        $(this).appendTo('.mainContent .main_noti').css({
            marginTop:'0px'
        })
    })
}, 3000)
// 미니 슬라이드
$(".article2 .slide_group").slick({
    autoplay: true, // 자동재생
    autoplaySpeed: 3000, // 간격시간
    dots: true, // 동그라미버튼
    speed: 600, // 바뀌는시간(생략가능)
    slidesToShow: 1, // 보여질슬라이드수(생략가능)
    slidesToScroll: 1, // 이동슬라이드수(생략가능)
    cssEase: 'linear', // 속도함수(생략가능)
    arrows: true, // 좌우화살표 사용여부(생략가능)
    prevArrow: '<button class="prev"><i class="fas fa-angle-left"></i></button>',
    nextArrow: '<button class="next"><i class="fas fa-angle-right"></i></button>',
    centerMode:true,  // 미니슬라이드모드(slidesToShow 값이 2 이상이어야 함)
    centerPadding:"100px", // 좌우측 끝에 보여질 이미지 넓이값
    responsive:[
        { breakpoint:1025,
          settings:{ slidesToShow: 1, centerPadding:"150px" }
        },
        { breakpoint:501,
          settings:{ slidesToShow: 1, centerMode:false }
        }
    ]
})