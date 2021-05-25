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


function goprev() {
    history.go(-1)
}