@extends('clientside.usermaster')

@section("title")
Listening Information
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
              <h2 class="title text-white">Listening</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Listening</a></li>
                <li class="active text-gray-silver">Listening Information</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="{{ URL::to('/') }}/user/images/bg/l-1.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                </div>  
                <div class="entry-title pt-10 pl-15">
                  <h4><a class="text-uppercase" href="#">Listening Section </a></h4>
                </div>
                
                <div class="entry-content mt-10">
                  <p class="mb-15">The IELTS listening exam is the same for both the general and academic IELTS tests. It requires no specialist knowledge in order to pass, and is a good test of your overall English ability. Sections one and two are in a social context but the third and fourth sections are usually located in an educational facility, and have an academic context. I shall explain more about this, in detail, later..</p> </br>
                  <p class="mb-15">The purpose of the IELTS listening exam is to test your ability to do the following.</p></br>
                  <p class="mb-15">understand main idea.</p>
                  <p class="mb-15">follow logical arguments</p>
                  <p class="mb-15">find specific information (ie numbers, addresses)</p>
                  <p class="mb-15">recognize opinions or attitudes</p></br>
                  <p class="mb-15">Importantly, you will only have one chance to hear the recording and choose a correct answer.</p></br>

                  <blockquote class="theme-colored pt-20 pb-20">
                    <footer>Source<cite title="Source Title">cambridge</cite></footer>
                  </blockquote>
                  @if(Session::get("validtest")=="yes")
                  <div class="col-xs-12 col-sm-4 col-md-12 mt-30 mb-0">
                            <center>
                                <button class="btn btn-dark btn-theme-colored btn-circled btn-lg"><a href="/client/listeningtest" > Process </a></button>
                            </center>
                            @else
                            You must purchase Package First
                            <center>
                                <button class="btn btn-dark btn-theme-colored btn-circled btn-lg"><a href="/client/viewpackage" > Purchase </a></button>
                            </center>
                  @endif
                  </div>

                </div>
              </article>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  
@endsection