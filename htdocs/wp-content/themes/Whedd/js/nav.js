$(document).ready(function() {
  $('.login-nav').click(function() {
    $('#logoImg').slideUp();
    $('nav ul').slideUp();
    $('#main').hide('slide', {direction: 'right'}, 1400);
    $('#login').show();
    $('#main').show('slide', {direction: 'left'}, 1400);
    // $('#login').show('slide', {direction: 'left'}, 1400);
    return false;
  })
  $('.signup').click(function() {
    $('#logoImg').slideUp();
    $('nav ul').slideUp();
    $('#main').hide('slide', {direction: 'right'}, 1400);
    $('#signupForm1').show();
    $('#main').show('slide', {direction: 'left'}, 1400);
    // $('#signupForm1').show('slide', {direction: 'left'}, 1400);
    return false;
  })
  if( $('#login-error').length ) {
    $('#logoImg').slideUp();
    $('nav ul').slideUp();
    $('#main').hide('slide', {direction: 'right'}, 1400);
    $('#login').show();
    $('#main').show('slide', {direction: 'left'}, 1400);
    // $('#login').show('slide', {direction: 'left'}, 1400);
    return false;
  }
})