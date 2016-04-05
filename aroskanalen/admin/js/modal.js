/**
 * Toggle sub menu
 *
 */

(function($) {
  // Function for toggle burger navigation.
  function toggle_modal() {
    var hamburger_button = $('.nav-toggle');
    var modal = $('.js-modal');
    var modalDialog = $('.js-modal-dialog');
    var body = $('body');

    $('.js-toggle-modal').click(function(e) {
      // If nav is open we close it.
      if (modal.hasClass('is-visible')) {

        // Look for toggle class before closing modal.
        var classes = e.target.className;
        var parent_classes = e.target.parentElement.className;
        if (classes.indexOf('js-toggle-modal') > -1 || parent_classes.indexOf('nav-toggle') > -1 ) {
          // Continue closing.
          // A toggle class exists on the element (or parent when clicking the X span for close)
        } else {
          // No toggle class exists and we should nt close.
          return;
        }

        // Button animation 'back to hamburger'.
        hamburger_button.removeClass("open");

        // Hide menu.
        modal.addClass('is-hidden');
        modal.removeClass('is-visible');
        modalDialog.addClass('is-hidden');
        modalDialog.removeClass('is-visible');
        body.removeClass('is-locked');
      }

      // If nav is closed we open it.
      else {
        // Hamburger button animation to 'x'.
        hamburger_button.addClass("open");

        // show menu.
        modal.removeClass('is-hidden');
        modal.addClass('is-visible');
        modalDialog.removeClass('is-hidden');
        modalDialog.addClass('is-visible');
        body.addClass('is-locked');
      }
    });
  }

  // Start the show
  $(document).ready(function () {
    toggle_modal();
  });

})(jQuery);
