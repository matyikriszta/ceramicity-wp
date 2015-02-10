(function( $ ) {
  "use strict";
  $(function() {
    var button = $('.navigation-button');
    var nav = $('.navigation');
    button.on('click', function() {
      nav.toggleClass('show');
    });
  });
}(jQuery));