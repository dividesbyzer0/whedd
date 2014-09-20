$(document).ready(function() {
  $('.login-nav').click(function() {
    $('nav ul').hide();
    $('#login').show('slide', {direction: 'left'}, 1400);
    return false;
  })
  $('.signup').click(function() {
    $('nav ul').hide();
    $('#signup-1').show('slide', {direction: 'left'}, 1400);
    return false;
  })
  if( $('#login-error').length ) {
    $('nav ul').hide();
    $('#1ogin').show('slide', {direction: 'left'}, 1400);
    return false;
  }
})
