<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./include/meta.php") ?>
</head>
<body>
    <?php include("./include/header.php") ?> 
    <main class="home-main">
        <div class="banner">
            <div class="swiper-container banner-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <img class="main-pic" src="./public/img/banner-1.png" alt="">
                      <div class="text">
                          <h3>HARTECH</h3>
                          <h2>自有機械製造品牌<br>齒輪工藝領先群倫</h2>
                          <a href="" class="knowmore d-flex align-items-center">
                              <span>了解更多</span>
                              <img class="arrow" src="./public/img/icon_arrow-white-long.svg" alt="">
                          </a>
                      </div>
                  </div>
                  <div class="swiper-slide">
                    <img class="main-pic" src="./public/img/banner-2.png" alt="">
                    <div class="text">
                        <h2>核心技術推進宇宙<br>
                            航太科技迎勢啟航</h2>
                        <a href="" class="knowmore d-flex align-items-center">
                            <span>了解更多</span>
                            <img class="arrow" src="./public/img/icon_arrow-white-long.svg" alt="">
                        </a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <img class="main-pic" src="./public/img/banner-3.png" alt="">
                    <div class="text">
                        <h2>全球前十大車廠<br>
                            傳動零組件供應商</h2>
                        <a href="" class="knowmore d-flex align-items-center">
                            <span>了解更多</span>
                            <img class="arrow" src="./public/img/icon_arrow-white-long.svg" alt="">
                        </a>
                    </div>
                  </div>
                </div>  
                <div class="swiper-pagination"></div>   
            </div>
            <div class="scroll d-md-block d-none">
                <div class="scroll_line">
                    <div class="scroll_dot">
                        <div class="scroll_dot_inner"></div>
                    </div>
                </div>
                <p>SCROLL</p>
            </div>
        </div>
        <div class="about">
            <div class="container">
                <div class="about_inner">
                    <div class="about_running">
                        <div class="about_running_rail">
                            <div class="about_running_rail_text">
                                <p class="about_running_rail_text_chinese">因轉動而前進，因前進而精進</p>
                                <p class="about_running_rail_text_english">ROTATION CREATES ADVANCEMENT, ADVANCEMENT MAKES PERFECTION</p>
                            </div>
                        </div>
                    </div>
                    <div class="about_text">
                        <div class="row align-items-end">
                            <div class="col-md-8">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="title-common">關於和大</h2>
                                    <a class="about_link d-md-none d-block mb-4" href="#"><img src="./public/img/icon_arrow-white-long.svg" alt=""></a>
                                </div>
                                
                                <p>和大以各式機械之加工、農機及汽機車等齒輪與軸類零組件聞名全球，為臺灣最大並擠身至全球前十大品牌車廠傳動零組件之供應商，和大持續創新、永續成長，是與您一同前進的最佳夥伴。</p>
                            </div>
                            <div class="col-md-4 d-md-block d-none">
                                <a class="about_link" href="#"><img src="./public/img/icon_arrow-white-long.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="about_video">
                        <video id="about-video" src="./public/video/videoplayback.mp4"></video>
                        <img class="about_video_play" onclick="playpause()" src="./public/img/icon_video.svg" alt="">
                    </div>
                    <div class="row mx-0 mt-5">
                        <div class="col-md-6 px-0">
                            <a href="" class="about_feature cover-box">
                                <img class="cover-box_img" src="./public/img/pic-1.png" alt="">
                                <div class="text">
                                    <h3>永續經營</h3>
                                    <p>我們關注企業社會責任準則、環境變遷、公益關懷，兼顧經濟、環境與社會三大面向發展</p>
                                </div>
                                <div class="arrow">
                                    <img class="normal" src="./public/img/icon_arrow-green.svg" alt="">
                                    <img class="hover" src="./public/img/icon_arrow-white.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 px-0">
                            <a href="" class="about_feature cover-box">
                                <img class="cover-box_img" src="./public/img/pic-2.png" alt="">
                                <div class="text">
                                    <h3>投資人關係</h3>
                                    <p>我們整合產業價值鏈與全球業務，以打造合作夥伴更為宏觀的持續發展</p>
                                </div>
                                <div class="arrow">
                                    <img class="normal" src="./public/img/icon_arrow-green.svg" alt="">
                                    <img class="hover" src="./public/img/icon_arrow-white.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 px-0">
                            <a href="" class="about_feature cover-box">
                                <img class="cover-box_img" src="./public/img/pic-3.png" alt="">
                                <div class="text">
                                    <h3>財務資訊</h3>
                                    <p>我們不斷創新研發，良好營利水平及穩定股價，反映在穩健財務表現成果上</p>
                                </div>
                                <div class="arrow">
                                    <img class="normal" src="./public/img/icon_arrow-green.svg" alt="">
                                    <img class="hover" src="./public/img/icon_arrow-white.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 px-0">
                            <a href="" class="about_feature cover-box">
                                <img class="cover-box_img" src="./public/img/pic-4.png" alt="">
                                <div class="text">
                                    <h3>新聞中心</h3>
                                    <p>發佈我們最新計劃，以及相關媒體報導、活動公告等資訊，提供大家共同參與見證</p>
                                </div>
                                <div class="arrow">
                                    <img class="normal" src="./public/img/icon_arrow-green.svg" alt="">
                                    <img class="hover" src="./public/img/icon_arrow-white.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="container">
                <div class="row align-items-end position-relative product_content product_content-1">
                    <div class="col-lg-6 product_pic">
                        <h3 class="product_title">Drivetrain<br>Components</h3>
                        <div class="pic position-relative">
                            <img class="pic_bg" src="./public/img/product-1-bg.png" alt="">
                            <img class="pic_1_1 pic_item position-absolute" src="./public/img/product-1_1.png" alt="">
                            <img class="pic_1_2 pic_item position-absolute" src="./public/img/product-1_2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 product_text">
                        <div class="text">
                            <h4 class="title-common">傳動系統零組件</h4>
                            <p class="d-webkit-box">和大自成立以來始終致力於齒輪生產技能的提升，對於齒輪製成的質與量均嚴謹並重視⋯⋯</p>
                            <a href="" class="knowmore d-flex align-items-center">
                                <span>了解更多</span>
                                <img class="arrow" src="./public/img/icon_arrow-white-long.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end position-relative product_content">
                    <div class="col-lg-6 product_pic">
                        <h3 class="product_title machine">Machine<br>Tool</h3>
                        <div class="pic position-relative">
                            <img class="pic_bg" src="./public/img/product-2-bg.png" alt="">
                            <img class="pic_2_1 pic_item position-absolute" src="./public/img/product-2_1.png" alt="">
                            <img class="pic_2_2 pic_item position-absolute" src="./public/img/product-2_2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 product_text">
                        <div class="text">
                            <h4 class="title-common">工具機</h4>
                            <p class="d-webkit-box">生產高精度與高效率齒輪製造機械為和大創新技術發展之目標，以自有HARTECH機械品牌行銷全球⋯⋯</p>
                            <a href="" class="knowmore d-flex align-items-center">
                                <span>了解更多</span>
                                <img class="arrow" src="./public/img/icon_arrow-white-long.svg" alt="">
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="row align-items-end position-relative product_content">
                    <div class="col-lg-6 product_pic">
                        <h3 class="product_title">Medical<br>Equipment</h3>
                        <div class="pic position-relative">
                            <img class="pic_bg" src="./public/img/product-3-bg.png" alt="">
                            <img class="pic_3_1 pic_item position-absolute" src="./public/img/product-3_1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 product_text">
                        <div class="text">
                            <h4 class="title-common">醫療器材</h4>
                            <p class="d-webkit-box">憑藉專業與R&D能力，和大順利跨足醫療器材領域並取得國內外認證，以拓展企業全球化⋯⋯</p>
                            <a href="" class="knowmore d-flex align-items-center">
                                <span>了解更多</span>
                                <img class="arrow" src="./public/img/icon_arrow-white-long.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <div class="container">
                <h2 class="title-common green position-relative">
                    全球據點
                    <a class="d-lg-none d-block position-absolute" href="#"><img src="./public/img/icon_arrow-green-long2.svg" alt=""></a>
                </h2>
                <div class="map_box">
                    <img class="map_box_main d-lg-block d-none" src="./public/img/map.png" alt="">
                    <div class="map_mask d-lg-block d-none"></div>
                    <div class="d-lg-block d-none">
                        <div class="map_pin japan">
                            <img src="./public/img/icon_pin.svg" alt="">
                            <div class="map_pin_circle"><div class="map_pin_circle_dot"></div></div>
                            <ul class="map_content">
                                <li><h3>TAIWAN</h3></li>
                                <li>台中市｜中部科學園區<br>設立於2006年</li>
                                <li>台中市｜大里區<br>設立於2006年</li>
                                <li>嘉義縣｜大埔美科學園區<br>設立於2016年</li>
                            </ul>
                        </div>
                        <div class="map_pin taiwan">
                            <img src="./public/img/icon_pin.svg" alt="">
                            <div class="map_pin_circle"><div class="map_pin_circle_dot"></div></div>
                            <ul class="map_content">
                                <li><h3>TAIWAN</h3></li>
                                <li>台中市｜中部科學園區<br>設立於2006年</li>
                                <li>台中市｜大里區<br>設立於2006年</li>
                                <li>嘉義縣｜大埔美科學園區<br>設立於2016年</li>
                            </ul>
                        </div>
                        <div class="map_pin china">
                            <img src="./public/img/icon_pin.svg" alt="">
                            <div class="map_pin_circle"><div class="map_pin_circle_dot"></div></div>
                            <ul class="map_content">
                                <li><h3>TAIWAN</h3></li>
                                <li>台中市｜中部科學園區<br>設立於2006年</li>
                                <li>台中市｜大里區<br>設立於2006年</li>
                                <li>嘉義縣｜大埔美科學園區<br>設立於2016年</li>
                            </ul>
                        </div>
                        <div class="map_pin canada">
                            <img src="./public/img/icon_pin.svg" alt="">
                            <div class="map_pin_circle"><div class="map_pin_circle_dot"></div></div>
                            <ul class="map_content">
                                <li><h3>TAIWAN</h3></li>
                                <li>台中市｜中部科學園區<br>設立於2006年</li>
                                <li>台中市｜大里區<br>設立於2006年</li>
                                <li>嘉義縣｜大埔美科學園區<br>設立於2016年</li>
                            </ul>
                        </div>
                        <div class="map_pin usa">
                            <img src="./public/img/icon_pin.svg" alt="">
                            <div class="map_pin_circle"><div class="map_pin_circle_dot"></div></div>
                            <ul class="map_content">
                                <li><h3>TAIWAN</h3></li>
                                <li>台中市｜中部科學園區<br>設立於2006年</li>
                                <li>台中市｜大里區<br>設立於2006年</li>
                                <li>嘉義縣｜大埔美科學園區<br>設立於2016年</li>
                            </ul>
                        </div>
                    </div>
                    <img class="w-100 d-lg-none d-block mt-5" src="./public/img/map-mobile.svg" alt="">
                </div>
            </div>
        </div>
        <div class="data">
            <div class="container">
                <img class="slogan d-sm-block d-none" src="./public/img/slogan.svg" alt="">
                <img class="slogan-mobile d-sm-none d-block" src="./public/img/slogan-mobile.svg" alt="">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 my-4">
                        <div class="data_content contain-box">
                            <img class="contain-box_img" src="./public/img/num-circle.svg" alt="">
                            <div class="text">
                                <p>臺灣TOP</p>
                                <p class="count taiwantop" data-ct-number="1" data-ct-duration="300">0</p>
                                <p>齒輪製造大廠</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-4">
                        <div class="data_content contain-box">
                            <img class="contain-box_img" src="./public/img/num-circle.svg" alt="">
                            <div class="text">
                                <p>卓越經驗累積</p>
                                <p class="count" data-ct-number="55" data-ct-duration="300">0</p>
                                <p>年以上</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-4">
                        <div class="data_content contain-box">
                            <img class="contain-box_img" src="./public/img/num-circle.svg" alt="">
                            <div class="text">
                                <p>每年生產超過</p>
                                <p class="count" data-ct-number="2000" data-ct-duration="300">0</p>
                                <p>萬個部件</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-4">
                        <div class="data_content contain-box">
                            <img class="contain-box_img" src="./public/img/num-circle.svg" alt="">
                            <div class="text">
                                <p>客戶滿意度</p>
                                <p>
                                    <span class="count" data-ct-number="98" data-ct-duration="300"></span><span class="unit">%</span>
                                </p>
                                <p>以上</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("./include/footer.php") ?> 
    <?php include("./include/js.php") ?> 
    <script>
        AOS.init();
        // banner
        var swiper = new Swiper(".banner-swiper", {
            slidesPerView: 1,
            loop:true,
            speed:800,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        })

        // video
        let video = document.getElementById("about-video");
        function playpause(){
            if(video.paused){
                video.play();
                $(".about_video").addClass("playing");
            }else {
                video.pause();
                $(".about_video").removeClass("playing");
            }
        }

       // count
        $(window).scroll(function() {
            $(".count").each(function() {
                let windowTop = $(window).scrollTop();
                let offset = $(this).offset();
                let top = offset.top;

                if (top - windowTop < 700) {
                    let number = $(this).attr("data-ct-number");
                    let dur = $(this).attr("data-ct-duration");
                    $(this).animate(
                        {
                            countNum: number
                        },
                        {
                            duration: parseInt(dur),
                            easing: "linear",
                            step: function(now) {
                                $(this).text(Math.floor(now));
                            }
                        }
                    );
                }
            });
        });

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
            $(window).on('resize', function() {
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
    </script>
</body>
</html>