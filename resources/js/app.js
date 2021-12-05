require('./bootstrap');

import Alpine from 'alpinejs';
import  jQuery from './jquery-3.6.0.slim.min';

window.Alpine = Alpine;

Alpine.start();
jQuery(window).scroll(function (){
   const scroll = jQuery(window).scrollTop();
   if(scroll >= 50){
       jQuery('.sticy-header').addClass('active-sticy-header');
   }else {
       jQuery('.sticy-header').removeClass('active-sticy-header');
   }
});
