$(document).ready(function() {
  $('.login').click(function() {
    $('nav ul').hide();
    $('#form1').show('slide', {direction: 'left'}, 1400);
    return false;
  })
  $('.signup').click(function() {
    $('nav ul').hide();
    $('#form2').show('slide', {direction: 'left'}, 1400);
    return false;
  })
  if( $('#login-error').length ) {
    $('nav ul').hide();
    $('#form1').show('slide', {direction: 'left'}, 1400);
    return false;
  }
})
