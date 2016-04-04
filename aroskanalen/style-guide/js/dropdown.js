/**
 * Toggle dropdown
 *
 */

(function($) {
  // Function for toggle burger navigation.
  function toggle_dropdown() {
    var dropdown = $('.js-dropdown');
    var dropdownSearchResult = $('.js-search-result-dropdown');

    $('.js-toggle-dropdown').click(function() {
      // If nav is open we close it.
      if (dropdown.hasClass('is-visible')) {

        // Hide menu.
        dropdown.removeClass('is-visible');
        dropdown.addClass('is-hidden');
      }

      // If nav is closed we open it.
      else {
        // show menu.
        dropdown.addClass('is-visible');
        dropdown.removeClass('is-hidden');
      }
    });

    $('.js-search-result-toggle-dropdown').click(function() {
      // If nav is open we close it.
      if (dropdownSearchResult.hasClass('is-visible')) {

        // Hide menu.
        dropdownSearchResult.removeClass('is-visible');
        dropdownSearchResult.addClass('is-hidden');
      }

      // If nav is closed we open it.
      else {
        // show menu.
        dropdownSearchResult.addClass('is-visible');
        dropdownSearchResult.removeClass('is-hidden');
      }
    });
  }

  // Start the show
  $(document).ready(function () {
    toggle_dropdown();
  });

})(jQuery);
