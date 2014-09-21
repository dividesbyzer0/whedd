$(document).ready(function() {
  $('#signupForm1 #nextButton').click(function(){alert("yay!!")})
    if ($("input[name='html_elements']:checked").val() == "") {
      $('#signupForm1 .error').removeClass('hide');
      $('#signupForm1 .error').html('<p>Please chose "Yes" or "No" and select a date</p>');
      return false;
    } else {
      $('#signupForm1').hide('slide', {direction: 'right'}, 1400); $('#signupForm2').delay(600).show('slide', {direction: 'left'}, 1400);
      return false;
    }
})