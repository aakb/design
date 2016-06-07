/**
 * Check if filefield has upload.
 */

(function($) {
  function checkFileUpload() {
    $('.js-custom-form-submit').click(function() {
      $('.js-custom-toggle').toggle();
      
      // if ($(this).val()) {
      //   $('.js-form-file').addClass('has-file');
      //
      //   // Add content attribute for stylesheet.
      //   $(this).attr('data-content', $(this)[0].files[0].name);
      // }
      // else {
      //   $('.js-form-file').removeClass('has-file');
      // }
    });
  }

  // Start the show.
  $(document).ready(function () {
    checkFileUpload();
  });

})(jQuery);
