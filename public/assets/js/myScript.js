$(function () {
    $(document).scroll(function () {
        // var $nav = $(".fixed-top");
        $(".fixed-top").toggleClass('scrolled',$(this).scrollTop() > $(".home-banner").height());
        if($(this).scrollTop() > $(".home-banner").height()){
            $(".header-logo").attr('src', "images/mona-logo2.png")
        }
        if($(this).scrollTop() < $(".home-banner").height()){
            $(".header-logo").attr('src', "images/logo-while-1.png")
        }

    });
});
