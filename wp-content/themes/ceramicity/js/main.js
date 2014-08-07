$(document).ready(function() {
  var $container = $('#articles');
  // initialize
  $container.masonry({
    itemSelector: '.box',
    "gutter": 25.6
  });
});