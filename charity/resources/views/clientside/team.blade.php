@extends('clientside.usermaster')

@section("title")
Our-Team
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
              <h2 class="title text-white">Tutors</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Team</a></li>
                <li class="active text-gray-silver">About team</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Team -->
    <section id="team">
      <div class="container">
      @foreach($teamdata as $row)
        <div class="row mtli-row-clearfix">
        
          <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
            <div class="team maxwidth400">
              <div class="thumb"><img class="img-fullwidth" src="{{ URL::to('/') }}/uploads/employee/{{ $row->empimg }}" width="200" height="300" alt=""></div>
              <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                <h4 class="name text-theme-color-2 mt-0">{{ $row->e_name }} - <small>Teacher</small></h4>
                <!-- <p class="mb-20">{{ $row->about_emp }}</p> -->
                <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
                  <li><a href="https://www.instagram.com/mr_hirani33/?hl=en"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <a class="btn btn-theme-colored btn-sm pull-right flip" href="/client/teamdetails/{{ $row->emp_id }}">view details</a>
              </div>
            </div>
          </div>
        @endforeach
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

    <!-- Section: Why Choose Us -->
    <section class="">
  <div class="container pt-40">
    <div class="section-content">
      <div class="row">
        <div class="col-md-7">
          <div class="pr-40">
            <h3 class="text-uppercase text-theme-colored title line-bottom">Our <span class="text-theme-color-2 font-weight-400">Features</span></h3>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="icon-box p-0 mb-30">
                 <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip">
                  <i class="pe-7s-tools text-white"></i>
                 </a>
                 <div class="icon-box-details ml-sm-0">
                  <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">Full Course</h5>
                  <p class="text-gray">All IELTS modules are available here for practice.</p>
                 </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="icon-box p-0 mb-30">
                 <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip">
                  <i class="pe-7s-phone text-white"></i>
                 </a>
                 <div class="icon-box-details ml-sm-0">
                  <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">Easy Operate</h5>
                  <p class="text-gray">Easy and responsive website to Operate. </p>
                 </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="icon-box p-0 mb-30">
                 <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip">
                  <i class="pe-7s-scissors text-white"></i>
                 </a>
                 <div class="icon-box-details ml-sm-0">
                  <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">Special Tutors</h5>
                  <p class="text-gray">Special tutorials which is made by our experianced staff.</p>
                 </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="icon-box p-0 mb-30">
                 <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip">
                  <i class="pe-7s-vector text-white"></i>
                 </a>
                 <div class="icon-box-details ml-sm-0">
                  <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">quick result generation</h5>
                  <p class="text-gray">Listning and reading module havem quick result generation.</p>
                 </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="icon-box p-0 mb-30">
                 <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip">
                  <i class="pe-7s-light text-white"></i>
                 </a>
                 <div class="icon-box-details ml-sm-0">
                  <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">highly experianced staff</h5>
                  <p class="text-gray">Writting and spesking are checked by our responsive Teachers.</p>
                 </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="icon-box p-0 mb-30">
                 <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip">
                  <i class="pe-7s-pen text-white"></i>
                 </a>
                 <div class="icon-box-details ml-sm-0">
                  <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">special meterial</h5>
                  <p class="text-gray">if you want to learn extra st your home we selling a best meterials.</p>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <h3 class="line-bottom">Why <span class="text-theme-color-2">Choose Us?</span></h3>
          <p class="mb-20">We give you many tips, tricks, techniques and strategies to help you prepare in a short time.</p>
          <div id="accordion1" class="panel-group accordion">
            <div class="panel">
              <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span> Why STUDYFOREST is Best?</a> </div>
              <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                <div class="panel-content">
                  <p>IELTS training institute of Study Forest offers premium quality training and practice materials for achieving desired scores.</p> <p>Our modern training techniques and rigorous practice sessions make our classes one of the best hubs for learning English.</p><p> Students enrol with us for preparation of international language tests like IELTS for the abundant benefits our training centre offers.</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span> Why we are Best?</a> </div>
              <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                <div class="panel-content">
                  <p>Passionate and friendly trainers</p>
                  <p>Intensive practice sessions</p>
                  <p>Availability of study materials</p>
                  <p>Flexible timings</p>
                  <p>Motivated and inspiring atmosphere</p>
                  <p>Affordable fee structure</p>

                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span>How you can score high with IELTS STUDY FOREST?</a> </div>
              <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                <div class="panel-content">
                  <p>When you enroll with IELTSedge, you stand to benefit from a truly personal learning experience</p>
                  <p> that is completely centered around your learning needs, your daily schedule and most importantly, your target IELTS score - delivered online!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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

  </div>
  <!-- end main-content -->
  
@endsection