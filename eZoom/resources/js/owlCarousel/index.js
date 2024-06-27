import { preventPassiveWarning } from '../helpers/dom/preventPassiveWarning';

// import $ from 'jquery'; // Ensure jQuery is imported

import 'owl.carousel';

function owlCarouselFunctions() {
  // Prevents passive warnings caused by Jquery lib
  preventPassiveWarning('touchstart');
  preventPassiveWarning('touchmove');

  // console.log(window.$.fn.owlCarousel);

  const owlCarouselExists =
    (typeof $.fn.owlCarousel === 'function');

  if (!owlCarouselExists) {
    console.error('Owl Carousel functions not loaded');
    return;
  }

  // owl carousel
  const owl = $('[data-js="news-categories-slider"]');
  const owlLoaded = owl.attr('data-loaded');

  if (owl && !owlLoaded) {

    owl.attr('data-loaded', true);

    owl.owlCarousel({
      loop: true,
      margin: 0,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      dots: false,
      responsive: {
        // breakpoint from 0 up
        0: {
          items: 1,
          dots: true,
        },
        // breakpoint from 480 up
        480: {
          items: 1,
          dots: true,
        },
        // breakpoint from 768 up
        900: {
          items: 2,
          dots: true,
        },
        1000: {
          items: 3,
          dots: false,
        },
        // breakpoint from 1000 up
        1161: {
          items: 3,
          dots: false,
        }
      }
    });
  }

  // ------------- ------------- -------------
  
  // FeaturedCards itens
  const featuredCards = $('[data-js="featured-cards"]');
  const featuredCardsLoaded = featuredCards.attr('data-loaded');

  if (featuredCards && !featuredCardsLoaded) {

    featuredCards.attr('data-loaded', true);

    featuredCards.owlCarousel({
      loop: true,
      margin: 0,
      autoplay: true,
      autoplayTimeout: 7000,
      autoplayHoverPause: true,
      dots: false,
      responsive: {
        // breakpoint from 0 up
        0: {
          items: 1,
          dots: true,
        },
        // breakpoint from 480 up
        480: {
          items: 2,
          dots: true,
        },
        // breakpoint from 768 up
        900: {
          items: 3,
          dots: true,
        },
        1000: {
          items: 4,
          dots: false,
        },
        1300: {
          items: 5,
          dots: false,
        },
        // breakpoint from 1000 up
        1161: {
          items: 5,
          dots: false,
        }
      }
    });
  }

}

document.addEventListener('DOMContentLoaded', owlCarouselFunctions);
