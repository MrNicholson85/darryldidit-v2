export default {
  init() {
    // JavaScript to be fired on the home page
    
    $(document).ready(function(){
      $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
          $(".banner").css("background" , "white");
          $(".nav a").css("color", "orange");
        } else {
          $(".banner").css("background" , "transparent");
          $(".nav a").css("color", "white");
        }
      });
    });

    $('.quote__list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
