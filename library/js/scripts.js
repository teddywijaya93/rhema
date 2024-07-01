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

var swiper = new Swiper(".swiper-banner", {
    slidesPerView: 1,
    autoplay: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
    }
});

var swiper = new Swiper(".swiper-testimonial", {
    slidesPerView: 1,
    autoplay: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
    }
});

var swiper = new Swiper(".swiper-pengajar", {
    spaceBetween: 30,
    autoplay: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    navigation: {
        nextEl: "#leftarrow",
        prevEl: "#rightarrow",
    },
    breakpoints: {
        320: {slidesPerView: 2},
        480: {slidesPerView: 3},
        992: {slidesPerView: 4},
    }
});

var swiper = new Swiper(".swiper-kurikulum", {
    spaceBetween: 30,
    autoplay: true,
    loop: true,
    grid: {
        fill: 'row',
        rows: 2,
    },
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    breakpoints: {
        320: {slidesPerView: 2},
        992: {slidesPerView: 3},
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