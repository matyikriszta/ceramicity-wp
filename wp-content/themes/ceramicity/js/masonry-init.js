(function( $ ) {
  "use strict";
  $(function() {
    //set the container that Masonry will be inside of in a var
    var container = document.querySelector('#container');
    var msnry;
    // initialize Masonry after all images have loaded
        msnry = new Masonry( container, {
            itemSelector: '.post'
        });
    });
  });
}(jQuery));