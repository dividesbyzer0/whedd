$(document).ready(function() {
  $('.login-nav').click(function() {
    $('nav ul').slideUp();
    $('#logoImg').slideUp();
    $('#login').show('slide', {direction: 'left'}, 1400);
    return false;
  })
  $('.signup').click(function() {
    $('nav ul').slideUp();
    $('#logoImg').slideUp();
    $('#signupForm1').show('slide', {direction: 'left'}, 1400);
    return false;
  })
  if( $('#login-error').length ) {
    $('nav ul').slideUp();
    $('#logoImg').slideUp();
    $('#login').show('slide', {direction: 'left'}, 1400);
    return false;
  }
})
