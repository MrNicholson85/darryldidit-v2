import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faBars, faChevronLeft, faChevronRight, faEnvelope, faMapMarkedAlt, faMapMarker, faPhone } from '@fortawesome/free-solid-svg-icons';
import { faFacebook, faTwitter } from '@fortawesome/free-brands-svg-icons';

export default {
  init() {
    // JavaScript to be fired on all pages

    library.add(faFacebook, faTwitter, faPhone, faEnvelope, faMapMarkedAlt, faMapMarker, faChevronRight, faChevronLeft, faBars);

    dom.watch();

    $(document).ready(function(){
      $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
          $(".banner").addClass("show-bg");
        } else {
          $(".banner").removeClass("show-bg");
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
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      adaptiveHeight: true,
      asNavFor: '.single-project__test',
    });

    $('.single-project__test').slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      asNavFor: '.single-project__feat-image',
      arrows: false,
      adaptiveHeight: true,
      focusOnSelect: true,
    });

    //custom slider nav
    $('.slider-prev').click(function(){
      $(this).parent().find('.single-project__test').slick('slickPrev');
    } );

    $('.slider-next').click(function(e){
      e.preventDefault();
      $(this).parent().find('.single-project__test').slick('slickNext');
    } );
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
