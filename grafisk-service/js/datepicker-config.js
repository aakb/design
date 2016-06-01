
(function($) {
  // Function for setting datepicker.
  function set_date_picker() {
    $('.form--date').datepicker({
        dateFormat: "dd-mm-yy"
    });
  }

  // Start the show
  $(document).ready(function () {
    set_date_picker();
  });

})(jQuery);