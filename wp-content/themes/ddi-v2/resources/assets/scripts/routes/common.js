import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faChevronLeft, faChevronRight, faEnvelope, faMapMarkedAlt, faMapMarker, faPhone } from '@fortawesome/free-solid-svg-icons';
import { faFacebook, faTwitter } from '@fortawesome/free-brands-svg-icons';

export default {
  init() {
    // JavaScript to be fired on all pages

    library.add(faFacebook, faTwitter, faPhone, faEnvelope, faMapMarkedAlt, faMapMarker, faChevronRight, faChevronLeft);

    dom.watch();

    $(document).ready(function(){
      $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
          $(".banner").css("background" , "white");
          $(".banner").css("border-bottom", "rgb(226, 226, 226) solid 1px");
          $(".nav a").css("color", "var(--site-purple)");
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

    $('.single-project__feat-image').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 8000,
      arrows: false,
      adaptiveHeight: true,
    });

    //custom slider nav
    $('.slider-prev').click(function(){
      $(this).parent().find('.single-project__feat-image').slick('slickPrev');
    } );

    $('.slider-next').click(function(e){
      e.preventDefault();
      $(this).parent().find('.single-project__feat-image').slick('slickNext');
    } );
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
