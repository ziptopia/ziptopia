$(function(){
    
  $(".mediaquary>div").mousewheel(function(event, delta){
      if(delta>0){//마우스를 위로 스크롤했다면
          var prev=$(this).prev().offset().top;
          $("html, body").stop().animate({
              scrollTop:prev
          },500);
      }else if(delta<0){//마우스를 아래로 스크롤했다면
          var next=$(this).next().offset().top;
          $("html, body").stop().animate({
              scrollTop:next
          },500);
      }
  });


});



