$(document).ready(function() {
  function hideLeft(selector) {
    $(selector).addClass('hide-left')
                .delay(500)
                .queue(function() { 
                  $(selector).addClass('hide'); 
                });
  }

  function hideRight(selector) {
    $(selector).addClass('hide-right')
                .delay(500)
                .queue(function() { 
                  $(selector).addClass('hide'); 
                });
  }

  function showLeft(selector) {
    $(selector).removeClass('hide')
                .delay(500)
                .queue(function() { 
                  $(selector).removeClass('hide-left'); 
                });
  }

  function showRight(selector) {
    $(selector).removeClass('hide')
                .delay(500)
                .queue(function() { 
                  $(selector).removeClass('hide-right'); 
                });
  }

  $('#signupForm1 .nextButton').click(function(){
    if ($("input[name='dateSet']:checked").val() ) {
      hideLeft('#signupForm1');
      showRight('#signupForm2');
      // $('#signupForm1').addClass('hide-left')
      //           .delay(500)
      //           .queue(function() { 
      //             $('#signupForm1').addClass('hide'); 
      //           });
      // $('#signupForm2').removeClass('hide')
      //           .delay(500)
      //           .queue(function() { 
      //             $('#signupForm2').removeClass('hide-right'); 
      //           });
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
    hideRight('#signupForm2');
    showLeft('#signupForm1');
    // $('#signupForm2').addClass('hide-right')
    //             .delay(500)
    //             .queue(function() { 
    //               $('#signupForm2').addClass('hide'); 
    //             });
    // $('#signupForm1').removeClass('hide')
    //             .delay(500)
    //             .queue(function() { 
    //               $('#signupForm1').removeClass('hide-left'); 
    //             });
    // $('#signupForm2').hide('slide', {direction: 'left'}, 1400); $('#signupForm1').delay(600).show('slide', {direction: 'right'}, 1400);
    return false;
  })
  $('#signupForm2 .nextButton').click(function(){
    hideLeft('#signupForm2');
    showRight('#signupForm3');
    // $('#signupForm2').addClass('hide-left')
    //             .delay(500)
    //             .queue(function() { 
    //               $('#signupForm1').addClass('hide'); 
    //             });
    //   $('#signupForm3').removeClass('hide')
    //             .delay(500)
    //             .queue(function() { 
    //               $('#signupForm3').removeClass('hide-right'); 
    //             });
    // $('#signupForm2').hide('slide', {direction: 'right'}, 1400); $('#signupForm3').delay(600).show('slide', {direction: 'left'}, 1400);
    return false;
  })
})
