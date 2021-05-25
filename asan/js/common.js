$('.header .open').addClass('on')
$('.header .open').on('click', function(){
    $(this).next().css({
        opacity:1
    }).animate({right:0}, 300)
    $(this).removeClass('on')
    $(this).next().next().addClass('on')
})
$('.header .close').on('click', function(){
    $(this).prev().animate({right:'-170px'}, 300, function(){
        $(this).css({ opacity:0 })
    })
    $(this).removeClass('on')
    $(this).prev().prev().addClass('on')
    $('.depth1 > li').find('.depth2').slideUp(100)
})