const client_opinion = new Swiper('.client-comment', {
  allowTouchMove: false,
  pagination: {
    el: '.client-comment-pagination-bullets, .client-comment-pagination-thumbnail',
    clickable: true,
    renderBullet: function (index, className) {
      return '<img src="' + menu[index] +'" class="' + className + '" >'
    },
  },
  autoplay: {
    delay: 2500,
  },
});
