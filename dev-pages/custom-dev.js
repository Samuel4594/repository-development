$('#timeslot-1').click(function() {
    
  if ($('.product-menu > a').hasClass('show')) 
  {
    $('.product-menu > a').stop();
    $('.product-menu > a').addClass('hide');
    $('.product-menu > a').removeClass('show');
    $('.product-menu-block').animate({
      height: '300px'
    }, 300, function() {});
    $('.product-menu > a').animate({
      top: '300px'
    }, 300, function() {});
  } 
  else 
  {
    $('.product-menu > a').stop();
    $('.product-menu-block').animate({
      height: '0px'
    }, 300, function() {
      $('.product-menu > a').removeClass('hide');
      $('.product-menu > a').addClass('show');
    });
    $('.product-menu > a').animate({
      top: '0px'
    }, 300, function() {});
  }

});