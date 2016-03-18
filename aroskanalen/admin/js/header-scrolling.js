/**
 *
 * Header changes when the users scrolls
 *
 */

(function($) {
  'use strict';

  function headerScrolling() {
    var scroll = $(window).scrollTop();
    var threshold = 50;

    // Header elements
    var logo      = $('.js-logo');
    var nav       = $('.js-nav');
    var menu      = $('.js-menu-toggle');

    // When the user scrolls and reaches the threshold.
    if (scroll >= threshold) {
      // Make header sticky.
      logo.addClass('is-sticky');
      nav.addClass('is-sticky');
      menu.addClass('is-sticky');
    }
    else {
      // Make header not sticky.
      logo.removeClass('is-sticky');
      nav.removeClass('is-sticky');
      menu.removeClass('is-sticky');
    }
  }

  // Run function when the user scrolls.
  $(window).on('scroll', headerScrolling);

})(jQuery);
