const vertical_slider = new Swiper( '.vertical-slider', {
  direction: 'vertical',
  allowTouchMove: false,
  pagination: {
    el: '.vertical-slider-pagination',
    clickable: true,
  },
  autoplay: {
    delay: 2500,
  },
});
