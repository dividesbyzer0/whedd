$(document).ready(function(){
  $(window).scroll(function() {
    var height = $(window).scrollTop();
    if(height  > 10) {
      $('header').css('background-color', 'rgba(0, 0, 0, .5');
      $('header').height('1.25em');
      $('nav').css('margin-top', '0');
      $('#logo_img').height('1.25em');
    } else {
      $('header').css('background-color', 'transparent');
      $('header').height('2.5em');
      $('nav').css('margin-top', '0.625em');
      $('#logo_img').height('2.5em');
    }
  })
})
