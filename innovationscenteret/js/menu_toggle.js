/**
 * Created by jakobrindom on 28/08/15.
 */

$(document).ready(function () {
  $('.c-hamburger').click(function() {
    if(this.classList.contains("is-active")===true){
      //this.classList.remove("is-active");
      $('.c-hamburger--htx').removeClass("is-active");
      $('.hamburger-menu').removeClass("is-open");
    }
    else {
      //this.classList.add("is-active");
      $('.c-hamburger--htx').addClass("is-active");
      $('.hamburger-menu').addClass("is-open");
    }
  });
});



