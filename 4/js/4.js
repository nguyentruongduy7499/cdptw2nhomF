jQuery(document).ready(function($){
var swiper = new Swiper('.swiper-container', {
  navigation: {
     nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 60,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
});
});
