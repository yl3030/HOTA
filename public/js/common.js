// header hover
$(".header_nav_main_li").mouseover(function(){
    $(this).children(".header_nav_second").slideDown(200);
})
$(".header_nav_main_li").mouseleave(function(){
    $(this).children(".header_nav_second").slideUp(200);
})

// header scroll
$(window).on("resize scroll",function(){
    if($(window).scrollTop() > 0){
        $("header").addClass("active");
    }else {
        $("header").removeClass("active");
    }
})

// search
$(".icon_search").click(function(){
    $(".header_search").slideToggle(200);
    $(this).parents("header").toggleClass("active");
})

// map pin
$(".map_pin").each(function(){
    $(this).mouseover(function(){
        $(this).parents(".map_box").children(".map_mask").css("opacity","1");
    });
    $(this).mouseleave(function(){
        $(this).parents(".map_box").children(".map_mask").css("opacity","0");
    })
})

// gototop
$(".gototop").click(function(){
    $("body,html").animate({scrollTop:0},300);
})



// 跑馬燈
$('.about_running').each(function() {
    const $this = $(this);
    const $rail = $this.find('.about_running_rail');
    const $txt = $rail.find('.about_running_rail_text');
    for ( let i = 0; i < 3; i++ ) {
      $rail.append($txt.clone());
    }
    let txtW = parseInt($txt.outerWidth(), 10);
    let val = 0;
    let resizeInterval = setInterval(function() {
      if ( val != 0 - txtW ) {
        $rail.css('transform', 'translateX(' + val + 'px)')
        val = val - 1;
      } else {
        $rail.css('transform', 'translateX(0)')
        val = 0;
      }
    }, 25);
    $window.on('resize', function() {
      clearInterval(resizeInterval);
      $rail.css('transform', 'translateX(0)')
      txtW = parseInt($txt.outerWidth(), 10);
      val = 0;
      resizeInterval = setInterval(function() {
        if ( val != 0 - txtW ) {
          $rail.css('transform', 'translateX(' + val + 'px)')
          val = val - 1;
        } else {
          $rail.css('transform', 'translateX(0)')
          val = 0;
        }
      }, 25);
    });
  });

