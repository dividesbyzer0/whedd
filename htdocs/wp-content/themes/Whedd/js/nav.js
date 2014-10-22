$(document).ready(function() {
  $('.login-nav').click(function() {
    $('#logoImg, nav ul').slideUp();
    $('footer, #prefooter, #split').addClass('hide-bottom').delay(500).hide();
    $('#content').css('height', '100%');
    $('#login').removeClass('hide')
                .delay(500)
                .queue(function() { 
                  $('#login').removeClass('hide-right'); 
                });
    return false;
  })
  $('.signup').click(function() {
    $('#logoImg, nav ul').slideUp();
    $('footer, #prefooter, #split').addClass('hide-bottom').delay(500).hide();
    $('#content').css('height', '100%');
    $('#signupForm1').removeClass('hide hide-right');
    $('#signupForm1').removeClass('hide')
                .delay(500)
                .queue(function() { 
                  $('#signupForm1').removeClass('hide-right'); 
                });
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