$(document).ready(function(){
  $(window).scroll(function() {
    var height = $(window).scrollTop();
    if(height  > 10) {
      $('header').css('background-color', 'rgba(0, 0, 0, .5');
      $('header').height('1.25em');
      $('nav').css('margin-top', '0');
      $('#logoImg').height('1.25em');
    } else {
      $('header').css('background-color', 'transparent');
      $('header').height('2.5em');
      $('nav').css('margin-top', '0.625em');
      $('#logoImg').height('2.5em');
    }
  })
})
