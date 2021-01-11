export default {
  init() {
    // JavaScript to be fired on the home page

    jQuery('.quotes__list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 10000,
      arrows: false,
      adaptiveHeight: true,
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
