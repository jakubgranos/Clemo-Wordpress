const horizontal_slider = new Swiper('.horizontal-slider', {
  pagination: {
    el: '.horizontal-slider-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.horizontal-slider-button-next',
    prevEl: '.horizontal-slider-button-prev',
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      slidesPerGroup: 1,
    },
    1024: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
  }
});
