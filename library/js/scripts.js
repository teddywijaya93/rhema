$(document).ready(function() {
    // Menu Active 
    $(".nav .nav-link").on("click", function(){
        $(".nav").find(".active").removeClass("active");
        $(this).addClass("active");
    });
});

// Change Header
$(window).scroll(function() {
    if ($(this).scrollTop()>100){
        $('#section-header-top').show();
    }else{
        $('#section-header-top').hide();
    }
});

// AOS - Animate
AOS.init({once: true});

// Footer
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("TOP").style.display = "block";
    } else {
        document.getElementById("TOP").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}