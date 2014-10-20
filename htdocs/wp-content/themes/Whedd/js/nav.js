$(document).ready(function() {
  $('.login-nav').click(function() {
    $('#logoImg').slideUp();
    $('nav ul').slideUp();
    $('footer').hide('slide', {direction: 'down'}, 200);
    $('#prefooter').hide('slide', {direction: 'down'}, 200);
    $('#split').hide('slide', {direction: 'down'}, 200);
    $('#content').css('height', '100%');
    $('#main').hide();
    $('#login').show();
    $('#main').show('slide', {direction: 'left'}, 1400);
    // $('#login').show('slide', {direction: 'left'}, 1400);
    return false;
  })
  $('.signup').click(function() {
    $('#logoImg').slideUp();
    $('nav ul').slideUp();
    $('footer').hide('slide', {direction: 'down'}, 200);
    $('#prefooter').hide('slide', {direction: 'down'}, 200);
    $('#split').hide('slide', {direction: 'down'}, 200);
    $('#content').css('height', '100%');
    $('#main').hide();
    $('#signupForm1').show();
    $('#main').show('slide', {direction: 'left'}, 1400);
    // $('#signupForm1').show('slide', {direction: 'left'}, 1400);
    return false;
  })
  if( $('#login-error').length ) {
    $('#logoImg').slideUp();
    $('nav ul').slideUp();
    $('footer').hide('slide', {direction: 'down'}, 200);
    $('#prefooter').hide('slide', {direction: 'down'}, 200);
    $('#split').hide('slide', {direction: 'down'}, 200);
    $('#main').hide();
    $('#login').show();
    $('#main').show('slide', {direction: 'left'}, 1400);
    // $('#login').show('slide', {direction: 'left'}, 1400);
    return false;
  }
})
