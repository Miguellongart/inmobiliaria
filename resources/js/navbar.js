$('.menu-toggle-grid').click(function(){
    console.log('funciona')
    $(".nav-grid").toggleClass("mobile-nav");
    $(this).toggleClass("is-active");
});