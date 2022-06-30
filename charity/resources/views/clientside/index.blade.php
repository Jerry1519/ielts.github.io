@extends('clientside.usermaster')

@section("title")
Home Page
@endsection

@section("css")
<!-- Page Title -->
<title>@yield("title")</title>

<!-- Stylesheet -->
<link href="{{ URL::to('/') }}/user/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{{ URL::to('/') }}/user/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="{{ URL::to('/') }}/user/css/animate.css" rel="stylesheet" type="text/css">
<link href="{{ URL::to('/') }}/user/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ URL::to('/') }}/user/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ URL::to('/') }}/user/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ URL::to('/') }}/user/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ URL::to('/') }}/user/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ URL::to('/') }}/user/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ URL::to('/') }}/user/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="{{ URL::to('/') }}/user/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="{{ URL::to('/') }}/user/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ URL::to('/') }}/user/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">
@endsection

@section("js")
<!-- external javascripts -->
<script src="{{ URL::to('/') }}/user/js/jquery-3.6.9.min.js"></script>
<script src="{{ URL::to('/') }}/user/js/jquery-2.2.4.min.js"></script>
<script src="{{ URL::to('/') }}/user/js/jquery-ui.min.js"></script>
<script src="{{ URL::to('/') }}/user/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ URL::to('/') }}/user/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ URL::to('/') }}/user/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ URL::to('/') }}/user/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ URL::to('/') }}/user/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                 tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [650, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
@endsection

@section("main")
 <!-- Start main-content -->
 <div class="main-content"> 
   
   <!-- Section: home -->
   <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ URL::to('/') }}/user/images/bg/bg3.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ URL::to('/') }}/user/images/bg/bg3.jpg"  alt=""  data-bgposition="center 10%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-1-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-110']" 
                  data-fontsize="['100']"
                  data-lineheight="['110']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700;">IELTS
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                  id="rs-1-layer-2"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['35']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">Education For Every IELTS Student
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white" 
                  id="rs-1-layer-3"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['35']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best teaching for our students and  always<br> try to achieve our student's trust and satisfaction.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-1-layer-4"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['100']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20" href="/client/aboutus">View Details</a> 
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ URL::to('/') }}/user/images/bg/bg2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ URL::to('/') }}/user/images/bg/bg2.jpg"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-5 text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                  id="rs-2-layer-1"
                
                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['28']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Feed Your Knowledge 
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['48']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;"> World’s Best Online Learning Website
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-center" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our Students and  always<br> try to achieve our student's trust and satisfaction.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['115']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"> 
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ URL::to('/') }}/user/images/bg/bg4.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ URL::to('/') }}/user/images/bg/bg4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['64']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">Take Your Test
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-dark-transparent-6 text-white font-raleway pl-20 pr-20"
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['32']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">For Your Better Future 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-right" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"> 
                </div>
              </li>

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
      
        <!-- Slider Revolution Ends -->

      </div>
    </section>

   <!-- Section: About -->
   

   <!-- Section: COURSES -->
 
   <section class="">
      <div class="container">
        <div class="section-title mb-10">
          <div class="row">
            <div class="col-md-8">
              <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Our <span class="text-theme-color-2 font-weight-400">Courses</span></h2>
           </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-4col" data-dots="true">
              <div class="item">
                <div class="campaign bg-lighter maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="{{ URL::to('/') }}/user/images/1.jpg" alt="" class="img-fullwidth">
                    <div class="campaign-overlay"></div>
                  </div>
                  <div class="campaign-details clearfix p-15 pt-10 pb-10">
                    <h5 class="text-theme-colored font-weight-500 mb-0">ACADEMIC & GENERAL</h5>
                    <h4 class="font-weight-700 mt-0"><a href="/client/listening">LISTNING</a></h4>
                    <p>Recent actual IELTS exam test</p>
                    <p>understand different types of Problem & Solution questions
                    use a range of linking expressions to develop your ideas</p>

                    <div class="campaign-bottom border-top clearfix mt-20">
                      <ul class="list-inline font-weight-600 pull-left flip pr-0 mt-10">
                        <li class="text-theme-color-2 pr-0 mr-5">Couse Fee: <span class="text-theme-colored">₹ 6500</span></li>
                      </ul>
                      <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="/client/viewpackage">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="campaign bg-lighter maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="{{ URL::to('/') }}/user/images/2.jpg" alt="" class="img-fullwidth">
                    <div class="campaign-overlay"></div>
                  </div>
                  <div class="campaign-details clearfix p-15 pt-10 pb-10">
                    <h5 class="text-theme-colored font-weight-500 mb-0">ACADEMIC & GENERAL</h5>
                    <h4 class="font-weight-700 mt-0"><a href="/client/reading">READING</a></h4>
                    <p>Recent actual IELTS exam test</p>
                    <p>understand different types of Problem & Solution questions
                    use a range of linking expressions to develop your ideas
                    </p>

                    <div class="campaign-bottom border-top clearfix mt-20">
                      <ul class="list-inline font-weight-600 pull-left flip pr-0 mt-10">
                        <li class="text-theme-color-2 pr-0 mr-5">Couse Fee: <span class="text-theme-colored">₹ 9500</span></li>
                      </ul>
                      <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="/client/viewpackage">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="campaign bg-lighter maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="{{ URL::to('/') }}/user/images/3.jpg" alt="" class="img-fullwidth">
                    <div class="campaign-overlay"></div>
                  </div>
                  <div class="campaign-details clearfix p-15 pt-10 pb-10">
                    <h5 class="text-theme-colored font-weight-500 mb-0">ACADEMIC & GENERAL</h5>
                    <h4 class="font-weight-700 mt-0"><a href="/client/speaking">SPEAKING</a></h4>
                    <p>Recent actual IELTS exam test</p>
                    <p>understand different types of Problem & Solution questions
                    use a range of linking expressions to develop your ideas</p>                    <div class="campaign-bottom border-top clearfix mt-20">
                      <ul class="list-inline font-weight-600 pull-left flip pr-0 mt-10">
                        <li class="text-theme-color-2 pr-0 mr-5">Couse Fee: <span class="text-theme-colored">₹ 12500</span></li>
                      </ul>
                      <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="/client/viewpackage">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
             
              <div class="item">
                <div class="campaign bg-lighter maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="{{ URL::to('/') }}/user/images/4.jpg" alt="" class="img-fullwidth">
                    <div class="campaign-overlay"></div>
                  </div>
                  <div class="campaign-details clearfix p-15 pt-10 pb-10">
                    <h5 class="text-theme-colored font-weight-500 mb-0">ACADEMIC & GENERAL</h5>
                    <h4 class="font-weight-700 mt-0"><a href="/client/writting">WRITTING </a></h4>
                    <p>Recent actual IELTS exam test</p>
                    <p>understand different types of Problem & Solution questions
                    use a range of linking expressions to develop your ideas</p>                    <div class="campaign-bottom border-top clearfix mt-20">
                      <ul class="list-inline font-weight-600 pull-left flip pr-0 mt-10">
                        <li class="text-theme-color-2 pr-0 mr-5">Couse Fee: <span class="text-theme-colored">₹ 12500</span></li>
                      </ul>
                      <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="/client/viewpackage">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   <!-- Divider: Funfact -->
   <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="{{ URL::to('/') }}/user/images/bg/bg2.jpg" data-parallax-ratio="0.7">
     <div class="container">
       <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
           <div class="funfact text-center">
             <i class="pe-7s-smile mt-5 text-theme-color-2"></i>
             <h2 data-animation-duration="2000" data-value="{{ count($singledata) }}" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
             <h5 class="text-white text-uppercase mb-0">Happy Students</h5>
           </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
           <div class="funfact text-center">
             <i class="pe-7s-note2 mt-5 text-theme-color-2"></i>
             <h2 data-animation-duration="2000" data-value="{{ count($pkgdata) }}" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
             <h5 class="text-white text-uppercase mb-0">Our Courses</h5>
           </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
           <div class="funfact text-center">
             <i class="pe-7s-users mt-5 text-theme-color-2"></i>
             <h2 data-animation-duration="2000" data-value="{{ count($teamdata) }}" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
             <h5 class="text-white text-uppercase mb-0">Our Teachers</h5>
           </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
           <div class="funfact text-center">
             <i class="pe-7s-cup mt-5 text-theme-color-2"></i>
             <h2 data-animation-duration="2000" data-value="{{ count($singledata) }}" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
             <h5 class="text-white text-uppercase mb-0">Awards Won</h5>
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- Section: team -->
   <section>
     <div class="container">
    
       <div class="section-title mb-10">
         <div class="row">
           <div class="col-md-8">
             <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Our <span class="text-theme-color-2 font-weight-400">Teachers</span></h2>
          </div>
         </div>
       </div>
       @foreach($teamdata as $row)
       <div class="section-content">
         <div class="row multi-row-clearfix">
           <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
             <div class="team maxwidth400">
               <div class="thumb"><img class="img-fullwidth" src="{{ URL::to('/') }}/uploads/employee/{{ $row->empimg }}" width="262" height="300"  alt=""></div>
               <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                 <h4 class="name text-theme-color-2 mt-0">{{ $row->e_name }} - <small>Teacher</small></h4>
                 <!-- <p class="mb-20">{{ $row->about_emp }}</p> -->
                 <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                 </ul>
                 <a class="btn btn-theme-colored btn-sm pull-right flip" href="/client/teamdetails/{{ $row->emp_id }}">view details</a>
               </div>
             </div>
           </div>
           @endforeach
   </section>

   <!-- Section: Gallery -->
<section id="gallery" class="bg-lighter">
  <div class="container">
      <div class="section-content">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mt-0 text-uppercase text-theme-colored title line-bottom line-height-1">IELTS<span class="text-theme-color-2 font-weight-400"> THE BEST  FORMATE</span></h2>
        </div>
      </div>
         <div class="row">
            <div class="col-md-6">
               <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">What is the test format for the IELTS Academic?</h2>
               <h4 class="text-theme-colored">The exam is conducted over 2 hours and 45 minutes, and consists of three sections, with the Speaking component conducted separately (lasting 11-14 minutes).</h4>
               <p> <i class="fa fa-angle-double-right text-theme-color-2 font-15"></i>Speaking and Writing are entirely subjective and thus scores are given accordingly, based on ability to articulate clearly and precisely, as well as usage of vocabulary, grammar, syntax and sentence structure. Accordingly, a score between 0 (non-user) to 9 (expert user) is awarded.</p>
               <p> <i class="fa fa-angle-double-right text-theme-color-2 font-15"></i> In Reading and Listening, there are 40 questions carrying 1 mark each. For every correct answer you get a single mark, which then cumulates into the final raw scores that you have. For example— if 30 of your answers are correct in listening, then 30 will be your raw score in IELTS listening out of 40, which will then be converted into bands.</p>
               <p> <i class="fa fa-angle-double-right text-theme-color-2 font-15"></i> In order to convert scores to bands, the raw score is matched with the corresponding band score. So if your raw score is 30, it will be converted into 7 bands. Each section has its own band score, and based on the average of the four bands, a score is given.</p>
            </div>
            <div class="col-md-6">
               <div>                
                  <img alt="" src="{{ URL::to('/') }}/user/images/f-1.png" class="img-responsive img-fullwidth" >
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

  <!-- Section: Why Choose Us -->
  <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-3">
              <div class="text-center">
               
                  <img src="{{ URL::to('/') }}/user/images/flaticon-png/small/graduates.png" width="90" alt="">
                
                <h4 class="icon-box-title text-uppercase">Experience Yourself</h4>
                <p class="">If you can keep it forever, then it’s the best feeling or experience in the world. Everyone should experience this in life.</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="text-center">
               
                  <img src="{{ URL::to('/') }}/user/images/flaticon-png/small/desktop.png" width="90" alt="">
              
                <h4 class="icon-box-title text-uppercase">Online Learning</h4>
                <p class="">Real IELTS Listening and IELTS Reading tests based on actual IELTS tests and following the Cambridge IELTS book format.</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="text-center">
               
                  <img src="{{ URL::to('/') }}/user/images/flaticon-png/small/library.png" width="90" alt="">
              
                <h4 class="icon-box-title text-uppercase">Mastery Learning</h4>
                <p class="">The IELTS Preparation courses in this specialization are intended for those seeking to boost their scores on the IELTS exam.</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="text-center">
                
                  <img src="{{ URL::to('/') }}/user/images/flaticon-png/small/lecture.png" width="90" alt="">
              
                <h4 class="icon-box-title text-uppercase"><a class="" href="/client/viewteam">Qualified Teachers</a></h4>
                <p class="">Our IELTS Analytics is a tool that allow you to set a target IELTS band score, analyse your progress, find how to improve.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: About -->
    <section data-bg-img="images/pattern/p6.png">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <div class="video-popup">                
               
                  <img alt="" src="{{ URL::to('/') }}/user/images/about/4.JFIF" class="img-responsive img-fullwidth">
                
              </div>
            </div>
            <div class="col-md-6">
              <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-sm-30 mt-0 mb-0">Welcome</h6>
              <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">The World’s Best Education</h2>
              <h4 class="text-theme-colored">Created by our community of IELTS teachers, previous IELTS examiners and IELTS exam takers.</h4>
              <p> <i class="fa fa-angle-double-right text-theme-color-2 font-15"></i>IELTS Locate and Explain - our unique feature allows users to “Locate” the answer within the passage and “Explain” why that answer is correct. Our community love this feature!</p>
              <p> <i class="fa fa-angle-double-right text-theme-color-2 font-15"></i> Mock IELTS Band Scores - Once your practice test is submitted, your band score will be calculated automatically corresponding with the number of correct answered questions. We use our huge database of students and actual IELTS test results to benchmark tests.</p>
              <p> <i class="fa fa-angle-double-right text-theme-color-2 font-15"></i> IELTS Side by Side - The IELTS reading passage and question paper are organised side-by-side to provide more convenience and a better testing experience. It's like having the two papers on your desk.</p>
              <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="/client/aboutus">Know More →</a>
            </div>
          </div>
        </div>
      </div>
    </section>
   
   <!-- Divider: testimonials -->
   <section class="divider parallax layer-overlay overlay-theme-colored-9" data-background-ratio="0.5" data-bg-img="{{ URL::to('/') }}/user/images/bg/bg2.jpg">
     <div class="container pb-50">
       <div class="section-title">
         <div class="row">
           <div class="col-md-6">
             <h5 class="font-weight-300 m-0 text-gray-lightgray">Happy Student</h5>
             <h2 class="mt-0 mb-0 text-uppercase line-bottom text-white font-28">Testimonials<span class="font-30 text-theme-color-2">.</span></h2>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-12 mb-10">
           <div class="owl-carousel-2col boxed" data-dots="true">
           @foreach($result as $row)
             <div class="item">
               <div class="testimonial pt-10">
                 <div class="thumb pull-left mb-0 mr-0 pr-20">
                   <img width="50" height="50" class="img-circle" alt="Not Uploaded" src="{{ URL::to('/') }}/uploads/feedback/{{ $row->image}}">
                 </div>
                 <div class="ml-100 ">
                   <h4 class="text-white mt-0">{{ $row->opinion }} </h4>
                   <h4 class="text-white mt-0">I get  {{ $row->band	 }} bands in professional Exam.  </h4>
                   <p class="author mt-20">- <span class="text-theme-color-2">,</span> <small><em class="text-gray-lightgray">{{ $row->name }} </em></small></p>
                 </div>
               </div> 
             </div>
             @endforeach
                       
           </div> 
         </div>
       </div>
     </div>
   </section>

   <!-- Section: blog -->
   <section id="blog" class="bg-lighter">
     <div class="container">
       <div class="section-title mb-10">
         <div class="row">
           <div class="col-md-8">
             <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Latest <span class="text-theme-color-2 font-weight-400">Articles</span></h2>
          </div>
         </div>
       </div>
       <section id="news">
      <div class="container">
        <div class="section-content">
          <div class="row">
              @foreach($articledata as $row)
            <div class="col-md-6">
                <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="{{ URL::to('/') }}/uploads/article/{{ $row->img1 }}" alt="" class="img-responsive img-fullwidth"> </div>

                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">{{ $row->article_title }}</a></h5>
                    <!-- <p class="text-left mb-20 mt-15 font-13">{!! $row->description !!}</p> -->
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="/client/articledetails/{{ $row->article_id }}">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><a class="text-theme-colored" href="#">Admin |</a></li>
                      <li><span class="text-theme-colored">{{ $row->article_datetime }}</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
            </div>
            @endforeach
     
          </div>
        </div>
      </div>
    </section>
     </div>
   </section>

   <!-- Divider: Clients -->
   <section class="clients bg-theme-color-2">
     <div class="container pt-10 pb-0">
       <div class="row">
         <div class="col-md-6" >
           <!-- Section: Clients -->
           <div class="owl-carousel-12col clients-logo transparent text-center owl-nav-top">
             <div class="item" > <a  href="https://www.britishcouncil.org/"><img src="{{ URL::to('/') }}/user/images/b1.png" height="150px" width="150px" class = "center" alt=""></a></div>
           </div>
           </div>
           <div class="col-md-6" >
           <!-- Section: Clients -->
           <div class="owl-carousel-12col clients-logo transparent text-center owl-nav-top">
             <div class="item" > <a  href="https://www.idp.com/global/ielts/"><img src="{{ URL::to('/') }}/user/images/idp.png" height="150px" width="150px" class = "center" alt=""></a></div>
           </div>
           </div>
           
         </div>
       </div>
     </div>
   </section>
 <!-- end main-content -->
 </div>
@endsection