const swiper = new Swiper( '.header-slider', {
  direction: 'vertical',
  allowTouchMove: false,
  pagination: {
    el: '.header-slider-pagination',
    clickable: true,
  },
  autoplay: {
    delay: 2500,
  },
});
