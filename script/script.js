var fadeDiv = document.getElementById('firstDiv');
window.addEventListener('scroll', function () {
    fadeDiv.style.opacity = 1 - +window.pageYOffset / 350 + ''
    fadeDiv.style.top = +window.pageYOffset + 'px'
});

/*
var fadeNav = document.getElementById('nav_class');
window.addEventListener('scroll', function () {
    fadeNav.style.opacity = 1 + +window.pageYOffset / 350 + ''
    fadeNav.style.top = +window.pageYOffset + 'px'
});
*/


var fadeNav = document.getElementById('nav_class');
var homeclk = document.getElementById('home');
window.addEventListener('scroll', function () {

    if (+window.pageYOffset) {
        fadeNav.classList.add("scrolled_nav");
    } else {
        fadeNav.classList.remove("scrolled_nav");
    }



    // = 1 - +window.pageYOffset / 350 + ''
    //fadeNav.style.top = +window.pageYOffset + 'px'
});

function scrollToTop() {
    window.scrollTo(0, 0);
}


$('.msg_class').click(function () {
    $(this).fadeOut(1000);
});


//slick

$(document).ready(function () {
    $('.slick_class').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 5,
        slidesToScroll: 5,
        dots: true,
        arrows: true,
        centerMode: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    infinite: true
                }
    },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
    },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });
});


//gallery

const current = document.querySelector('#current');
const imgs = document.querySelectorAll('.imgs img');

//const [current, imgs] = [
// document.querySelector('#current'),
//document.querySelectorAll('.imgs img')
//];
const opacity = 0.4;

imgs.forEach(img => img.addEventListener('click', imgClick));

function imgClick(e) {
    //reset opacity
    imgs.forEach(img => (img.style.opacity = 1));

    current.src = e.target.src;
    //add fade-in class
    current.classList.add('fade-in');

    //remove class fade-in
    setTimeout(() => current.classList.remove('fade-in'), 500);

    e.target.style.opacity = opacity;
}
