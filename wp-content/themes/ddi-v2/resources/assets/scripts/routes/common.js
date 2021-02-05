export default {
  init() {
    // JavaScript to be fired on all pages

    $(document).ready(function(){
      $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
          $(".banner").css("background" , "white");
          $(".banner").css("border-bottom", "rgb(226, 226, 226) solid 1px");
          $(".nav a").css("color", "orange");
        } else {
          $(".banner").css("background" , "transparent");
          $(".banner").css("border-bottom", "transparent");
          $(".nav a").css("color", "white");
        }
      });
    });

    $('.quotes__list').slick({
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
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
