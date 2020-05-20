const swiper = new Swiper('.related-posts-container', {
  pagination: {
    el: '.related-posts-pagination',
    clickable: true,
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
