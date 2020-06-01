$(window).on('load', function() {
    $('.ki').addClass('kmuncul');
    $('.ka').addClass('kmuncul');
});


$(window).scroll(function() {

   var wScroll = $(this).scrollTop();

   $('.jumbotron img').css({
       'transform' : 'translate(0px, '+ wScroll/5 +'%)'
   });
   $('.jumbotron h1').css({
       'transform' : 'translate(0px, '+ wScroll/3 +'%)'
   });
   $('.jumbotron p').css({
       'transform' : 'translate(0px, '+ wScroll/1.4 +'%)'
   });
  
   if( wScroll > $('.portfolio').offset().top - 200 ) {
       $('.portfolio .thumbnail').each(function(i) {
           setTimeout(function() {
               $('.portfolio .thumbnail').eq(i).addClass('muncul');
           }, 300 * (i+1));

       });
   }
  


});