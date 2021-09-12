import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faBars, faChevronLeft, faChevronRight, faCode, faEnvelope, faEraser, faMapMarkedAlt, faMapMarker, faPhone, faPhoneAlt, faVrCardboard } from '@fortawesome/free-solid-svg-icons';
import { faFacebook, faTwitter } from '@fortawesome/free-brands-svg-icons';

export default {
  init() {
    // JavaScript to be fired on all pages

    library.add(faFacebook, faTwitter, faPhone, faEnvelope, faMapMarkedAlt, faMapMarker, faChevronRight, faChevronLeft, faBars, faCode, faVrCardboard, faEraser, faPhoneAlt);

    dom.watch();

    // turn the nav bar white after scrolling 100 px
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

    // Slick Slider setting for the quotes module
    $('.quotes__list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 10000,
      arrows: false,
      adaptiveHeight: true,
    });

    const slider_count = document.querySelector('.single-project__feat-image-nav');

    // Slick SLider seeting for single project images
    $('.single-project__feat-image').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      adaptiveHeight: true,
      asNavFor: '.single-project__feat-image-nav',
    });

    $('.single-project__feat-image-nav').slick({
      slidesToShow: parseInt(slider_count.dataset.slide_count),
      slidesToScroll: parseInt(slider_count.dataset.slide_count),
      asNavFor: '.single-project__feat-image',
      arrows: false,
      adaptiveHeight: true,
      focusOnSelect: true,
    });

    //custom slider nav
    $('.slider-prev').click(function(){
      $(this).parent().find('.single-project__feat-image-nav').slick('slickPrev');
    } );

    $('.slider-next').click(function(e){
      e.preventDefault();
      $(this).parent().find('.single-project__feat-image-nav').slick('slickNext');
    } );
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
