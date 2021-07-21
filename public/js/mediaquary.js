$(function(){
    
  $(".mediaquary>div").mousewheel(function(event, delta){
      if(delta>0){
          var prev=$(this).prev().offset().top;
          $("html, body").stop().animate({
              scrollTop:prev
          },500);
      }else if(delta<0){
          var next=$(this).next().offset().top;
          $("html, body").stop().animate({
              scrollTop:next
          },500);
      }
  });

});



