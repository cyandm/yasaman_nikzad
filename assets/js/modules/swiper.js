import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';


//Single Service Swiper
const singleServiceSwiper = new Swiper('#singleServiceSwiper', {

  modules: [Navigation, Pagination],
  loop: true,


  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
    clickable: true,
  },


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  scrollbar: {
    el: '.swiper-scrollbar',
  },

  // autoHeight: true,
});


//Homepage Swiper
const homePageSwiper = new Swiper('#homePageSwiper', {

  modules: [Navigation, Pagination],
  loop: true,


  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
    clickable: true,
  },


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  scrollbar: {
    el: '.swiper-scrollbar',
  },

  // autoHeight: true,
});