(function($) {
	var settings = drupalSettings.itk_cookie_message,
			cookieName = settings.cookie_name,
			cookieLifetime = settings.cookie_lifetime,
			cookieValue = (function() {
				var result;
				return (result = new RegExp('(?:^|; )' + encodeURIComponent(cookieName) + '=([^;]*)').exec(document.cookie)) ? (result[1]) : null;
			}());

  var el = document.getElementById('js-cookieterms');

	if (!cookieValue) {
		el.style.display = 'block';
		$('#js-cookieterms--agree').on('click', function() {
			var expiryDate = new Date(new Date().getTime() + cookieLifetime * 1000);
			document.cookie = cookieName+'=true; path=/; expires='+expiryDate.toGMTString();
			$(el).slideUp('fast', function(){
				$(el).empty().remove();
			});
		});
	}
  else {
    $(el).remove();
  }
}(jQuery));
