

$(window).scroll(function(){
    if($(window).scrollTop() > 10){
        $('.navbar').css({
            'position':'fixed',
            'left':'0',
            'right':'0',
            'background':'#fff'
        })
    }
    else{
        $('.navbar').css({
            'position':'sticky',
            'background':'#fff',
            'box-shadow':'0 .125rem .25rem rgba(0,0,0,.075)!important'
        })
    }
})