/**
 * Display parts of form based on origin
 */

(function($) {
  // Function for togglen displayed fields
  function showOrigin() {
    var containerAakb = $('.js-origin-aakb-container');
    var containerOther = $('.js-origin-other-container');

    $('.js-origin-aakb').click(function() {
      containerAakb.addClass('is-visible');
      containerOther.addClass('is-hidden');
      containerAakb.removeClass('is-hidden');
      containerOther.removeClass('is-visible');
    });

    $('.js-origin-other').click(function() {
      containerAakb.addClass('is-hidden');
      containerOther.addClass('is-visible');
      containerAakb.removeClass('is-visible');
      containerOther.removeClass('is-hidden');
    });
  }

  // Start the show
  $(document).ready(function () {
    showOrigin();
  });

})(jQuery);
