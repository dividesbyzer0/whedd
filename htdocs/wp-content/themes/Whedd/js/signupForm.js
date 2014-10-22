$(document).ready(function() {
  $.fn.showRight = function()  {
    $(this).removeClass('hide')
                .delay(500)
                .queue(function() {
                  $(this).removeClass('hide-right');
                  $(this).dequeue();
                });
    return this;
  }

  $.fn.showLeft = function() {
    $(this).removeClass('hide')
                .delay(500)
                .queue(function() {
                  $(this).removeClass('hide-left');
                  $(this).dequeue();
                });
    return this;
  }

  $.fn.hideRight = function() {
    $(this).addClass('hide-right')
                .delay(500)
                .queue(function() {
                  $(this).addClass('hide');
                  $(this).dequeue();
                });
    return this;
  }

  $.fn.hideLeft = function() {
    $(this).addClass('hide-left')
                .delay(500)
                .queue(function() {
                  $(this).addClass('hide');
                  $(this).dequeue();
           });
    return this;
  };


  $('#signupForm1 .nextButton').click(function(){
    if ($("input[name='dateSet']:checked").val() ) {
      $('#signupForm1').hideLeft();
      $('#signupForm2').showRight();
      return false;
    } else {
      $('#signupForm1 .error').html('<p>Please choose "Yes" or "No" and select a date</p>');
      $('#signupForm1 .error').fadeIn();
      $('#signupForm1 .nextButton').css('margin-top', '20%');
      return false;
    }
  })
  $('#signupForm2 .prevButton').click(function(){
    $('#signupForm2').hideRight();
    $('#signupForm1').showLeft();
    return false;
  })
  $('#signupForm2 .nextButton').click(function(){
    $('#signupForm2').hideLeft();
    $('#signupForm3').showRight();
    return false;
  })
  $('#signupForm3 .prevButton').click(function(){
    $('#signupForm3').hideRight();
    $('#signupForm2').showLeft();
    return false;
  })
  $('#signupForm3 .nextButton').click(function(){
    $('#signupForm3').hideLeft();
    $('#signupForm4').showRight();
    return false;
  })  
  $('#signupForm4 .prevButton').click(function(){
    $('#signupForm4').hideRight();
    $('#signupForm3').showLeft();
    return false;
  })
  $('#signupForm4 .nextButton').click(function(){
    $('#signupForm4').hideLeft();
    $('#signupForm5').showRight();
    return false;
  })
  $('#signupForm5 .prevButton').click(function(){
    $('#signupForm5').hideRight();
    $('#signupForm4').showLeft();
    return false;
  })
  $('#signupForm5 .nextButton').click(function(){
    $('#signupForm5').hideLeft();
    $('#signupForm6').showRight();
    return false;
  })  
})
