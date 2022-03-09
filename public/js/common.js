// header hover
$(".header_nav_main_li").mouseover(function(){
  if($(window).width()>=1200){
    $(this).children(".header_nav_second").slideDown(200);
  }
})
$(".header_nav_main_li").mouseleave(function(){
  if($(window).width()>=1200){
    $(this).children(".header_nav_second").slideUp(200);
  }
})

// header scroll
$(window).on("resize scroll",function(){
    if($(window).scrollTop() > 0){
        $("header").addClass("active");
    }else {
        $("header").removeClass("active");
    }
})

// header mobile
$(".lang-mobile").click(function(){
  $(this).children("ul").slideToggle(300);
})
$(".header_nav_main_li>a").click(function(){
  if($(window).width()<1200){
    $(this).parents(".header_nav_main_li").children(".header_nav_second").slideToggle(300);
  }
})
$(".menu").click(function(){
  if($(".header_nav").hasClass("active")){
    $(".header_nav").removeClass("active");
    $("header").removeClass("active");
  }else{
    $(".header_nav").addClass("active");
    $("header").addClass("active");
  }
  
})

// search
$(".icon_search").click(function(){
    $(".header_search").slideToggle(200);
    $(this).parents("header").toggleClass("active");
})

// gear
$(window).on("resize scroll",function(){
  let about_green_height;
  let gear_bottom;
  if($(window).width()<=500){
    about_green_height = $(".about").height()*0.35;
  }else if($(window).width()>500 && $(window).width()<=767){
    about_green_height = $(".about").height()*0.28;
  }else if($(window).width()>767 && $(window).width()<=991){
    about_green_height = $(".about").height()*0.55;
  }else if($(window).width()>991){
    about_green_height = $(".about").height()*0.4;
  };

  if($(window).width()<=575){
    gear_bottom = 170;
  }else if($(window).width()>575){
    gear_bottom = 200;
  }

  let about_top = $(".about").offset().top + about_green_height - $(window).height() + gear_bottom;
  let product_top = $(".product").offset().top - $(window).height() + gear_bottom;
  let map_top = $(".map").offset().top - $(window).height() + gear_bottom;
  let footer_top = $("footer").offset().top - $(window).height() + gear_bottom;
  if($(window).scrollTop()>0 && $(window).scrollTop()<=about_top) {
    $(".gear").removeClass("green");
  }else if ($(window).scrollTop()>about_top && $(window).scrollTop()<=product_top){
    $(".gear").addClass("green");
  }else if($(window).scrollTop()>product_top && $(window).scrollTop()<=map_top){
    $(".gear").removeClass("green");
  }else if($(window).scrollTop()>map_top && $(window).scrollTop()<=footer_top){
    $(".gear").addClass("green");
  }else if($(window).scrollTop()>footer_top){
    $(".gear").removeClass("green");
  }
})

// map pin
$(".map_pin").mouseover(function(){
  $(this).parents(".map_box").children(".map_mask").css("opacity","1");
  $(this).siblings(".map_pin").css("opacity","0.3");
  $(this).children(".map_pin_circle").fadeIn(500).css("display","flex");
  $(this).children(".map_content").fadeIn(500);
})
$(".map_pin").mouseleave(function(){
  $(this).parents(".map_box").children(".map_mask").css("opacity","0");
  $(this).siblings(".map_pin").css("opacity","1");
  $(this).children(".map_pin_circle").fadeOut(500);
  $(this).children(".map_content").fadeOut(500);
})


// gototop
$(".gototop").click(function(){
    $("body,html").animate({scrollTop:0},300);
})

$(window).on("resize scroll",function(){
  $(".product_content").each(function(){
    let product_top = $(this).offset().top - $(window).height() * 1/3;
    let product_bottom = $(this).offset().top + $(window).height()*1/6;
    // console.log("window height=" + $(window).height() + ",this heigth=" + $(this).offset().top + ",top=" + product_top + ",bottom=" + product_bottom + ",now hieght=" + $(window).scrollTop());
    if($(window).scrollTop() > product_top && $(window).scrollTop() < product_bottom){
      $(this).find(".pic_item").each(function(){
        $(this).addClass("active");
      })
    }else {
      $(this).find(".pic_item").each(function(){
        $(this).removeClass("active");
      })
    }
  })
})





