$(document).ready(function() {
  $('.login-nav').click(function() {
    $('#logoImg, nav ul').slideUp();
    $('footer, #prefooter, #split').addClass('hide-bottom');
    $('footer, #prefooter, #split').css('display', 'none');
    $('#content').css('height', '100%');
    $('#login').removeClass('hide-right');
    return false;
  })
  $('.signup').click(function() {
    $('#logoImg').slideUp();
    $('nav ul').slideUp();
    $('footer').addClass('hide-bottom');
    $('#prefooter').addClass('hide-bottom');
    $('#split').addClass('hide-bottom');
    $('#content').css('height', '100%');
    $('#login').removeClass('hide-right');
    return false;
  })
  if( $('#login-error').length ) {
    $('#logoImg').slideUp();
    $('nav ul').slideUp();
    $('footer').hide('slide', {direction: 'down'}, 200);
    $('#prefooter').hide('slide', {direction: 'down'}, 200);
    $('#split').hide('slide', {direction: 'down'}, 200);
    $('#login').removeClass('hide-right');
    return false;
  }
})