require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
window.s = window.jQuery = require('jquery');
require('./slick-1.8.1.min');
import feather from 'feather-icons/dist/feather.min';
feather.replace();

import lity from 'lity/dist/lity.min';
jQuery(window).scroll(function (){
   const scroll = jQuery(window).scrollTop();
   if(scroll >= 50){
       jQuery('.sticy-header').addClass('active-sticy-header');
   }else {
       jQuery('.sticy-header').removeClass('active-sticy-header');
   }
});
jQuery(document).ready(function($){
    $('.gallery-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:true,
        nextArrow:"<button class=\'gallery-arrow arrow-next\'></button>",
        prevArrow:"<button class=\'gallery-arrow arrow-prev\'></button>",
        fade: true,
        asNavFor: '.thumnail-gallery'
    });
    $('.thumnail-gallery').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        asNavFor: '.gallery-slider',
        dots: false,
        centerMode: true,
        nextArrow:"<button class=\'gallery-arrow arrow-next\'></button>",
        prevArrow:"<button class=\'gallery-arrow arrow-prev\'></button>",
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2
                }
            },
        ]
    });
    $('.moblile-menu,.civanoglu-menu ul li a').on('click',function (){
       $('.civanoglu-menu').toggleClass('active');
    });
});
