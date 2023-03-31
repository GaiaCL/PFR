$(document).ready(function(){
    $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if (scroll > 10) {
        $("#navMain").removeClass('bgTrans'),
        $("#navMain").addClass('bgDark');
      }else{
        $("#navMain").removeClass('bgDark'),
        $("#navMain").addClass('bgTrans');
      }
    });
  });