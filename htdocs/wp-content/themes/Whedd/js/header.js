$(document).ready(function(){
  $(window).scroll(function() {
    var height = $(window).scrollTop();
    if(height  > 10) {
      $('.page-header').css('background-color', 'rgba(0, 0, 0, .5');
      $('.page-header').height('4.0486%');
      $('nav').css('margin-top', '0');
      $('#logoImg').height('1.25rem');
    } else {
      $('.page-header').css('background-color', 'transparent');
      $('.page-header').height('8.097%');
      $('nav').css('margin-top', '1.0121%');
      $('#logoImg').height('2.5rem');
    }
  })
})
