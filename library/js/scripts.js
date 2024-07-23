$(document).ready(function() {
    // Menu Active 
    $(".nav .nav-link").on("click", function(){
        $(".nav").find(".active").removeClass("active");
        $(this).addClass("active");
    });

    $('.switch-home2').hover(function() {
        $(this).find('.home2').hide();
        $(this).find('.home2-hover').show();
    }, function() {
        $(this).find('.home2-hover').hide();
        $(this).find('.home2').show();
    });

    $('.switch-kurikulum').hover(function() {
        $(this).find('.kurikulum').hide();
        $(this).find('.kurikulum-hover').show();
    }, function() {
        $(this).find('.kurikulum-hover').hide();
        $(this).find('.kurikulum').show();
    });

    $('.switch-number').hover(function() {
        $(this).find('.number').hide();
        $(this).find('.number-hover').show();
    }, function() {
        $(this).find('.number-hover').hide();
        $(this).find('.number').show();
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
    speed: 2000,
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
    speed: 2000,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
    },
    navigation: {
        nextEl: "#leftarrowtestimonial",
        prevEl: "#rightarrowtestimonial",
    },
});

var swiper = new Swiper(".swiper-pengajar", {
    spaceBetween: 30,
    autoplay: true,
    loop: true,
    speed: 2000,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        paginationClickable: true,
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
    spaceBetween: 35,
    autoplay: true,
    loop: true,
    speed: 2000,
    grid: {
        fill: 'row',
        rows: 2,
    },
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    navigation: {
        nextEl: "#leftarrowkurikulum",
        prevEl: "#rightarrowkurikulum",
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