@extends('clientside.usermaster')

@section("title")
About Us
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
          <h2 class="title text-white">About</h2>
          <ol class="breadcrumb text-left text-black mt-10">
            <li><a href="#">Home</a></li>
            <li class="active text-gray-silver">About Us</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: About  -->
<section>
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20 ">
          <h2 class="line-bottom font-20 text-theme-colored text-uppercase mb-10 mt-0">Welcome to Our<span class="text-theme-color-2"> University</span></h2>
          <p class="lead font-18">We care for learners , protect their welfare, and prepare them for the future</p>
          <p>IELTS Locate and Explain - our unique feature allows users to “Locate” the answer within the passage and “Explain” why that answer is correct. Our community love this feature!</p>
          <p> Mock IELTS Band Scores - Once your practice test is submitted, your band score will be calculated automatically corresponding with the number of correct answered questions. We use our huge database of students and actual IELTS test results to benchmark tests</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
          <div class="image-box-thum">
            <img class="img-fullwidth" alt="" src="{{ URL::to('/') }}/user/images/about/ss1.jpg">
          </div>
          <div class="image-box-details pt-20 pb-sm-20">
            <h4 class="title text-uppercase line-bottom mt-0">Experience Yourself</h4>
            <p class="desc mb-10">If you can keep it forever, then it’s the best feeling or experience in the world. Everyone should experience this in life.</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
          <div class="image-box-thum">
            <img class="img-fullwidth" alt="" src="{{ URL::to('/') }}/user/images/about/ss2.jpg">
          </div>
          <div class="image-box-details pt-20 pb-sm-20">
            <h4 class="title text-uppercase line-bottom mt-0">Online Learning</h4>
            <p class="desc mb-10">Real IELTS Listening and IELTS Reading tests based on actual IELTS tests and following the Cambridge IELTS book format.</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="image-box-thum">
            <img class="img-fullwidth" alt="" src="{{ URL::to('/') }}/user/images/about/ss3.jpg">
          </div>
          <div class="image-box-details pt-20 pb-sm-20">
            <h4 class="title text-uppercase line-bottom mt-0">Mastery Learning</h4>
            <p class="desc mb-10">The IELTS Preparation courses in this specialization are intended for those seeking to boost their scores on the IELTS exam.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Features -->
<section id="features" class="bg-lighter">
  <div class="container">
    <div class="section-title">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-uppercase text-theme-colored font line-bottom line-height-1 mt-0 mb-0">Our <span class="text-theme-color-2 font-weight-400">Features</span></h2>
        </div>
      </div>
    </div>
    <div class="row mtli-row-clearfix">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="icon-box iconbox-theme-colored bg-white p-15 mb-30 border-1px">
            <i class="pe-7s-scissors"></i>
          </a>
          <div class="icon-box-details">
            <h4 class="icon-box-title font-16 font-weight-600 m-0 mb-5">Full Course</h4>
            <p class="text-gray font-13 mb-0">All IELTS modules are available here for practice.</p>
          </div>
        </div>    
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="icon-box iconbox-theme-colored bg-white p-15 mb-30 border-1px">
            <i class="pe-7s-pen"></i>
          </a>
          <div class="icon-box-details">
            <h4 class="icon-box-title font-16 font-weight-600 m-0 mb-5">Easy Operate</h4>
            <p class="text-gray font-13 mb-0">Easy and responsive website to Operate. </p>
          </div>
        </div>    
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="icon-box iconbox-theme-colored bg-white p-15 mb-30 border-1px">
            <i class="pe-7s-tools"></i>
          </a>
          <div class="icon-box-details">
            <h4 class="icon-box-title font-16 font-weight-600 m-0 mb-5">Special Tutors</h4>
            <p class="text-gray font-13 mb-0">Special tutorials which is made by our experianced staff.</p>
          </div>
        </div>    
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="icon-box iconbox-theme-colored bg-white p-15 mb-sm-30 border-1px">
            <i class="pe-7s-vector"></i>
          </a>
          <div class="icon-box-details">
            <h4 class="icon-box-title font-16 font-weight-600 m-0 mb-5">quick result generation</h4>
            <p class="text-gray font-13 mb-0">Listning and reading module havem quick result generation.</p>
          </div>
        </div>    
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="icon-box iconbox-theme-colored bg-white p-15 border-1px">
            <i class="pe-7s-phone"></i>
          </a>
          <div class="icon-box-details">
            <h4 class="icon-box-title font-16 font-weight-600 m-0 mb-5">highly experianced staff</h4>
            <p class="text-gray font-13 mb-0">Writting and spesking are checked by our responsive Teachers.</p>
          </div>
        </div>    
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="icon-box iconbox-theme-colored bg-white p-15 border-1px">
            <i class="pe-7s-light"></i>
          </a>
          <div class="icon-box-details">
            <h4 class="icon-box-title font-16 font-weight-600 m-0 mb-5">special meterial</h4>
            <p class="text-gray font-13 mb-0">if you want to learn extra st your home we selling a best meterials</p>
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
          <h2 data-animation-duration="2000" data-value="{{ count($userdata) }}" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
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
          <h2 data-animation-duration="2000" data-value="{{ count($teacherdata) }}" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
          <h5 class="text-white text-uppercase mb-0">Our Teachers</h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
        <div class="funfact text-center">
          <i class="pe-7s-cup mt-5 text-theme-color-2"></i>
          <h2 data-animation-duration="2000" data-value="{{ count($userdata) }}" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
          <h5 class="text-white text-uppercase mb-0">Awards Won</h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Why Choose Us -->
<section data-bg-img="images/pattern/p6.png">
      <div class="container pb-0">
        <div class="row">
          <div class="col-md-8">
            <h3 class="text-gray mt-0 mt-sm-30 mb-0">Welcome To</h3>
            <h2 class="text-theme-colored mt-0">Study Forest</h2>
            <p class="font-weight-600">Get Ready for Your 2022 IELTS Test</p>
           <p class="mt-20">Prepare to Achieve Band 7+ IELTS Score with our comprehensive IELTS Preparation Packages and Get Evaluated by Experienced Examiners from the UK</p>
            <p class="mt-20">IELTS Online Test is the largest global community of students, teachers,examiners,institutions and IELTS training center, and is currently the #1 website for online IELTS practice. We are a community-driven website with free real IELTS exams,IELTS tips abd numerious innovative features to make IELTS online testing easier,helping students improve their IELTS score online.</p>
            <p class="mt-20"><img src="{{ URL::to('/') }}/user/images/signature.png" alt=""></p>
          </div>
          <div class="col-md-4">
            <img src="{{ URL::to('/') }}/user/images/team/dc1.png" alt="">
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
<!-- end main-content -->
@endsection