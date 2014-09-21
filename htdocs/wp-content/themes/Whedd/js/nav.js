$(document).ready(function() {
  $('.login-nav').click(function() {
    $('#logoImg').slideUp();
    $('nav ul').slideUp();
    $('#login').show('slide', {direction: 'left'}, 1400);
    return false;
  })
  $('.signup').click(function() {
    $('#logoImg').slideUp();
    $('nav ul').slideUp();
    $('#signupForm1').show('slide', {direction: 'left'}, 1400);
    return false;
  })
  if( $('#login-error').length ) {
    $('#logoImg').slideUp();
    $('nav ul').slideUp();
    $('#login').show('slide', {direction: 'left'}, 1400);
    return false;
  }
})
