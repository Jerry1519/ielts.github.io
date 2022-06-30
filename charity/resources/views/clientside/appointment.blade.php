@extends('clientside.usermaster')

@section("title")
Appointment
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



<script>
      $(document).ready(function(){
          $("appointment_form").validate({
            rules:
            {
              form_name:
              {
                required:true
              },
              form_email:
              {
                required:true,
              }
              form_appontment_date:
              {
                required:true,
              }
              form_appontment_time:
              {
                required:true,
              }
              form_message:
              {
                required:true,
              }
              
            },
            messages:
            {
              txtcatname:
              {
                required:"Please Enter  Name"
              },
              
              form_email:
              {
                required:"Please Enter Poper Email",
              }
              form_appontment_date:
              {
                required:"Please Enter Poper Email",
              }
              form_appontment_time:
              {
                required:"Please Enter Poper Email",
              }
              form_message:
              {
                required:"Please Enter Poper Email",
              }
             
              
            }
          });
      });
      </script>
<!-- Start main-content -->
<div class="main-content">

<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ URL::to('/') }}/user/images/bg/bg3.jpg">
  <div class="container pt-70 pb-20">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-white">Appointment</h2>
          <ol class="breadcrumb text-left text-black mt-10">
            <li><a href="#">Home</a></li>
            <li><a href="#">Appointment</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

 <!-- start main-content -->
 <div class="main-content"> 
    <!-- Section: home -->
    <section id="home" class="divider parallax layer-overlay" data-bg-img="images/bg/bg5.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-60"><a href="#" class=""><img alt="" src="images/logo-wide-white.png"></a></div>
                <div class="bg-lightest border-1px p-25">
                  <h4 class="text-theme-colored text-uppercase m-0">Make an Appointment</h4>
                  <div class="line-bottom mb-30"></div>
                  @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message}}</p>
                        </div>
                 @endif
                  <p>Have any Questions please ask us..</p>
                  <form id="appointment_form" name="appointment_form" class="mt-30" method="post" action="/client/insertappoitment">
                    @csrf
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="form_name" class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="form_phone" class="form-control required" type="text" placeholder="Enter Phone" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                      		<input name="form_appontment_date" class="form-control required" type="date" placeholder="Appoinment Date" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="form_appontment_time" class="form-control required" type="time" placeholder="Appoinment Time" aria-required="true">
                        </div>
                      </div>
                    </div>
                    <div class="form-group mb-10">
                      <textarea name="form_message" class="form-control required"  placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                    </div>
                    <div class="form-group mb-0 mt-20">
                      <input name="form_botcheck" class="form-control" type="hidden" value="">
                      <button type="submit" class="btn btn-dark btn-theme-colored" >Submit</button>
                    </div>
                  </form>
                
                  
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

<!-- Divider: Call To Action -->
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