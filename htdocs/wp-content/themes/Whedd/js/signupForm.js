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
      $('#signupForm1').hideLeft()
                       .delay(500)
                       .queue(function() {
                          $('#signupForm2').showRight();
                          $('#signupForm2').dequeue();
                       });
      return false;
    } else {
      $('#signupForm1 .error').html('<p>Please choose "Yes" or "No" and select a date</p>');
      $('#signupForm1 .error').fadeIn();
      $('#signupForm1 .nextButton').css('margin-top', '20%');
      return false;
    }
  })
  $('#signupForm2 .prevButton').click(function(){
    $('#signupForm2').hideRight()
                      .delay(500)
                      .queue(function() {
                        $('#signupForm1').showLeft();
                        $('#signupForm1').dequeue();
                      });
    return false;
  })
  $('#signupForm2 .nextButton').click(function(){
    $('#signupForm2').hideLeft()
                      .delay(500)
                      .queue(function() {
                        $('#signupForm3').showRight();
                        $('#signupForm3').dequeue();
                      });
    return false;
  })
  $('#signupForm3 .prevButton').click(function(){
    $('#signupForm3').hideRight()
                      .delay(500)
                      .queue(function() {
                        $('#signupForm2').showLeft();
                        $('#signupForm2').dequeue();
                      });
    return false;
  })
  $('#signupForm3 .nextButton').click(function(){
    $('#signupForm3').hideLeft()
                      .delay(500)
                      .queue(function() {
                        $('#signupForm4').showRight();
                        $('#signupForm4').dequeue();
                      });
    return false;
  })  
  $('#signupForm4 .prevButton').click(function(){
    $('#signupForm4').hideRight()
                      .delay(500)
                      .queue(function() {
                        $('#signupForm3').showLeft();
                        $('#signupForm3').dequeue();
                      });
    return false;
  })
  $('#signupForm4 .nextButton').click(function(){
    $('#signupForm4').hideLeft()
                      .delay(500)
                      .queue(function() {
                        $('#signupForm5').showRight();
                        $('#signupForm5').dequeue();
                      });
    return false;
  })
  $('#signupForm5 .prevButton').click(function(){
    $('#signupForm5').hideRight()
                      .delay(500)
                      .queue(function() {
                        $('#signupForm4').showLeft();
                        $('#signupForm4').dequeue();
                      });
    return false;
  })
  $('#signupForm5 .nextButton').click(function(){
    $('#signupForm5').hideLeft()
                      .delay(500)
                      .queue(function() {
                        $('#signupForm6').showRight();
                        $('#signupForm6').dequeue();
                      });
    return false;
  })  
})
