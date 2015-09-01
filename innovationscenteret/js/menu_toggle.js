/**
 * Created by jakobrindom on 28/08/15.
 */

$(document).ready(function () {
  "use strict";

  var hamburger_button = $('.c-hamburger--htx');
  var hamburger_menu = $('.hamburger-menu');
  var html = $('html');
  var body = $('body');
  var overlay = $('overlay');

  $('.c-hamburger').click(function() {
    if(this.classList.contains("is-active")===true){
      // Button animation 'back to hamburger'
      hamburger_button.removeClass("is-active");

      // Closes hamburger menu
      hamburger_menu.removeClass("is-open");

      // Hides overlay
      overlay.removeClass('is-hidden');

      //Unlocks html and body element
      html.removeClass('is-locked');
      body.removeClass('is-locked');

    }
    else {
      // Hamburger button animatiion to 'x'
      hamburger_button.addClass("is-active");

      // Open hamburger menu
      hamburger_menu.addClass("is-open");

      // Shows overlay
      overlay.addClass('is-hidden');

      // Lock html and body elements
      html.addClass('is-locked');
      body.addClass('is-locked');

    }
  });
});


