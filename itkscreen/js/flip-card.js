(function() {
  var cards = document.querySelectorAll(".flipper");

  console.log(cards);

  for ( var i  = 0, len = cards.length; i < len; i++ ) {
    var card = cards[i];
    clickListener( card );
  }

  function clickListener(card) {
    card.addEventListener( "click", function() {

      this.classList.toggle("flipped");

    });
  }
})();