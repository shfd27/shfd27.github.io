function checkScroll(){
    var navbarY = $('.navbar').height() * 2;
    if($(window).scrollTop() > navbarY){
        $('.navbar').addClass("scrolled");
    }else{
        $('.navbar').removeClass("scrolled");
    }
}
if($('.navbar').length > 0){
    $(window).on("scroll load resize", function(){
        checkScroll();
    });
}