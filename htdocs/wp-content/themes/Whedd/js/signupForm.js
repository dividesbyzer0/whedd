$(document).ready(function() {
  $('#signupForm1 .nextButton').click(function(){
    if ($("input[name='dateSet']:checked").val() ) {
      $('#main').hide('slide', {direction: 'right'}, 1400);
      $('#signupForm1').hide();
      $('#signupForm2').show();
      $('#main').show('slide', {direction: 'left'}, 1400);
      // $('#signupForm1').hide('slide', {direction: 'right'}, 1400); $('#signupForm2').delay(600).show('slide', {direction: 'left'}, 1400);
      return false;
    } else {
      $('#signupForm1 .error').html('<p>Please choose "Yes" or "No" and select a date</p>');
      $('#signupForm1 .error').fadeIn();
      $('#signupForm1 .nextButton').css('margin-top', '20%');
      return false;
    }
  })
  $('#signupForm2 .prevButton').click(function(){
    $('#main').hide('slide', {direction: 'right'}, 1400);
    $('#signupForm2').hide();
    $('#signupForm1').show();
    $('#main').show('slide', {direction: 'left'}, 1400);
    // $('#signupForm2').hide('slide', {direction: 'left'}, 1400); $('#signupForm1').delay(600).show('slide', {direction: 'right'}, 1400);
    return false;
  })
  $('#signupForm2 .nextButton').click(function(){
    $('#main').hide('slide', {direction: 'right'}, 1400);
    $('#signupForm2').hide();
    $('#signupForm3').show();
    $('#main').show('slide', {direction: 'left'}, 1400);
    // $('#signupForm2').hide('slide', {direction: 'right'}, 1400); $('#signupForm3').delay(600).show('slide', {direction: 'left'}, 1400);
    return false;
  })
})