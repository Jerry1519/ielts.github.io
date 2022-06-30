@extends('clientside.usermaster')

@section("title")
Package
@endsection

@section("css")
<!-- Page Title -->
<title>@yield("title")</title>

<!-- Stylesheet -->
<meta name="csrf-token" content="{{ csrf_token() }}">
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
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
  $(document).ready(function(){
    $.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
}); 
    $("#checkout-form").submit(function(e){
      e.preventDefault();

      var totalAmount = $("#totalpay").val();
      var package_id =  $("#pkgid").val();
      var options = {
      "key": "rzp_test_wLBpSsZqZwWIXn",
      "amount": (totalAmount*100), // 2000 paise = INR 20
      "name": $("#username").val(),
      "description": "Payment",
      "handler": function (response){
        window.location.href = "/client/insertpackagedata?&totalpay="+$("#totalpay").val()+"&pkgid="+$("#pkgid").val()+"&pkgdays="+$("#pkgdays").val()+"&userid="+$("#userid").val()+"&paymentid="+response.razorpay_payment_id;
      },
      "prefill": {
      "contact": $("#cno").val(),//'9904869939'
      "email":   $("#email").val()//tutsmake@gmail.com',
      },
      "theme": {
      "color": "#528FF0"
      }
      };
      var rzp1 = new Razorpay(options);
      rzp1.open();
    });
  });
  </script>


@endsection

@section("main")
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ URL::to('/') }}/user/images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Course Details</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Packages</a></li>
                <li class="active text-gray-silver">Package Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container">
        <form id="checkout-form" action="/client/insertpackagedata" method="post" enctype="multipart/form-data">
              @csrf
        <div class="row">
          <div class="col-md-12 blog-pull-left">
          <input type="hidden" name="totalpay" id="totalpay" value="{{ $pkgdata->price }}" />
          <input type="hidden" name="pkgid" id="pkgid" value="{{ $pkgdata->pkg_id }}" />
          <input type="hidden" name="pkgdays" id="pkgdays" value="{{ $pkgdata->days }}" />
          <input type="hidden" name="userid" id="userid" value="{{ Session::get('id') }}" />
          <input type="hidden" name="cno" id="cno" value="{{ Session::get('cno') }}" />
          <input type="hidden" name="email" id="email" value="{{ Session::get('email') }}" />
          <input type="hidden" name="username" id="username" value="{{ Session::get('uname') }}" />
            <div class="single-service">
              <!-- <img src="{{ URL::to('/') }}/user/images/services/lg6.jpg" alt=""> -->
              <h3 class="text-theme-colored line-bottom text-theme-colored">{{ $pkgdata->pkg_name }}</h3>
              <h4 class="mt-0"><span class="text-theme-color-2">Price :</span><span>&#x20B9</span>{{ $pkgdata->price }}</h4>
              <h4 class="mt-0"><span class="text-theme-color-2">Time-Period :</span>{{ $pkgdata->days }}Days</h4>
                <ul class="review_text list-inline">
                  <li>
                    <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
                  </li>
                </ul>
              <h3 class="text-theme-colored line-bottom text-theme-colored">Speaking Modual</h3>
              <h5><em>{{ $pkgdata->speaking_des }}</em></h5>
              <h3 class="text-theme-colored line-bottom text-theme-colored">Reading Modual</h3>
              <h5><em>{{ $pkgdata->reading_des }}</em></h5>
              <h3 class="text-theme-colored line-bottom text-theme-colored">Writting Modual</h3>
              <h5><em>{{ $pkgdata->writting_des }}</em></h5>
              <h3 class="text-theme-colored line-bottom text-theme-colored">Listening Modual</h3>
              <h5><em>{{ $pkgdata->listening_des }}</em></h5>
            </div>
            <div class="widget">
                <h4 class="widget-title line-bottom">Opening <span class="text-theme-color-2">Hours</span></h4>
                <div class="opening-hours">
                  <ul class="list-border">
                    <li class="clearfix"> <span> Mon - Tues :  </span>
                      <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Wednes - Thurs :</span>
                      <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Fri : </span>
                      <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Sun : </span>
                      <div class="value pull-right"> Colosed </div>
                    </li>
                  </ul>
                </div>
              </div>
          </div>
          <div class="row">
                  <center>
                  <div class="col-6">
                      <button type="submit">Purchase</button>
                  </div>
                </center>
              </div>
            </div>
          </div> -->
        </div>
        </form>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  @endsection