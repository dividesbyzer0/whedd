$(document).ready(function() {
  $('#signupForm1 #nextButton').click(function(){
    if ($("input[name='dateSet']:checked").val() ) {
      $('#signupForm1').hide('slide', {direction: 'right'}, 1400); $('#signupForm2').delay(600).show('slide', {direction: 'left'}, 1400);
      return false;
    } else {
      $('#signupForm1 .error').html('<p>Please choose "Yes" or "No" and select a date</p>');
      $('#signupForm1 .error').fadeIn();
      $('#signupForm1 #nextButton').css('margin-top', '20%');
      return false;
    }
  })
})