<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/s/studypress/v6.0/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jan 2022 11:13:26 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="StudyPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot" />
<link href="{{ URL::to('/') }}/user/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="{{ URL::to('/') }}/user/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="{{ URL::to('/') }}/user/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="{{ URL::to('/') }}/user/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="{{ URL::to('/') }}/user/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
@yield("css")
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center p-0">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline font-13 sm-text-center mt-5">
                <!-- <li>
                  <a class="text-white" href="#">FAQ</a>
                </li> -->
               
                <li>
                  <a class="text-white" href="/client/appointment">Help Desk</a>
                </li>
                <li class="text-white">|</li>
                @if(Session::has("isuserlogin"))
                <!-- <li>
                  Hello
                </li> -->
                @else
                <li>
                  <a class="text-white" href="/client/login">Login</a>
                </li>
                @endif
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget m-0 pull-right sm-pull-none sm-text-center">
              <ul class="list-inline pull-right">
              @if(Session::has("isuserlogin"))
                <li class="mb-0 pb-0">
                  <div class="top-dropdown-outer pt-5 pb-10">
                    <a class="top-cart-link has-dropdown text-white text-hover-theme-colored"><span>Cart</span>&nbsp;<i class="fa fa-shopping-cart font-13"></i></a>
                    <ul class="dropdown">
                      <li>
                        <!-- dropdown cart -->
                        <div class="dropdown-cart">
                         
                         
                          <div class="cart-btn text-left">
                              <a class="btn btn-theme-colored btn-xs" href="/client/usercart"> View cart</a>
                              <a class="btn btn-dark btn-xs " href="/client/checkout"> Checkout</a>
                          </div>
                        </div>
                        <!-- dropdown cart ends -->
                      </li>
                    </ul>
                  </div>
                </li>
              @endif
                <li class="mb-0 pb-0">
                  <div class="top-dropdown-outer pt-5 pb-10">
                    <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i class="fa fa-search font-13"></i> &nbsp;</a>
                    <ul class="dropdown">
                      <li>
                        <div class="search-form-wrapper">
                          <form method="get" class="mt-10">
                            <input type="text" onfocus="if(this.value =='Enter your search') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Enter your search'; }" value="Enter your search" id="searchinput" name="s" class="">
                            <label><input type="submit" name="submit" value=""></label>
                          </form>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
              <!-- <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
        @if(Session::has("isuserlogin"))
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)"><img src="{{ URL::to('/') }}/user/images/logonew.png" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-user text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-gray text-uppercase">Welcome</a>
                  <h5 class="font-14 m-0"><?php $username = session()->get('uname'); echo $username;  ?></h5>
                </li>
              </ul>
            </div>
          </div>  
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-gray text-uppercase">Call us today!</a>
                  <h5 class="font-14 m-0"> +91 6355052821</h5>
                </li>
              </ul>
            </div>
          </div>  
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-gray text-uppercase">We are open!</a>
                  <h5 class="font-13 text-black m-0"> Mon-Fri 8:00AM-06:00PM</h5>
                </li>
              </ul>
            </div>
          </div>
        @else()
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)"><img src="{{ URL::to('/') }}/user/images/logonew.png" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-gray text-uppercase">Call us today!</a>
                  <h5 class="font-14 m-0"> +91 6355052821</h5>
                </li>
              </ul>
            </div>
          </div>  
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-gray text-uppercase">We are open!</a>
                  <h5 class="font-13 text-black m-0"> Mon-Fri 8:00AM-06:00PM</h5>
                </li>
              </ul>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
            <ul class="menuzord-menu">
              <li class="active"><a href="/client/index">Home</a>
                
              </li>
              @if(Session::has("isuserlogin"))
              <li><a href="#">MyAccount </a>
              <ul class="dropdown">
                  <li><a href="/client/usertest">My Exam</a></li>
                  <li><a href="/client/userprogress">My Progress</a></li>
                  
                  <li><a href="/client/userorder">My Order</a></li>
                  <li><a href="/client/logout">Log Out</a></li>
                </ul>
              </li>
              @endif
              <li><a href="#home">Modules</a>
                <ul class="dropdown">
                  <li><a href="/client/speaking">Speaking</a></li>
                  <li><a href="/client/reading">Reading</a></li>
                  <li><a href="/client/listening">Listening</a></li>
                  <li><a href="/client/writting">Writting</a></li>
                </ul>
              </li>
              <li><a href="/client/viewproduct">Shop</a>
                
              </li>
              
              <li><a href="/client/viewpackage">Package</a>
                
              </li>
              
              <li><a href="/client/viewteam">Tutor</a>
                
              </li>
              <li><a href="/client/article">Article</a>
              </li>
              <li><a href="/client/aboutus">About Us</a>
                
              </li>
              @if(Session::has("isuserlogin"))
              </li>
              <li><a href="/client/feedback">Feedback</a>
              </li>
              @endif
              
            </ul>
            <ul class="pull-right flip hidden-sm hidden-xs">
              <li>
                <!-- Modal: Book Now Starts -->
                <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" data-toggle="modal"  href="/client/appointment">Book Now</a>
                <!-- Modal: Book Now End -->
              </li>
            </ul>
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  @yield("main")
  

  <?php if(!isset($page)) {  ?>
  <!-- Footer -->
  <footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="{{ URL::to('/') }}/user/images/bg/bg2.jpg">
    <div class="container">     
      <div class="row mt-10">
        <div class="col-md-3">
        <p>203,rajhans Ornet,Behind Alis Steet,Surat,India.</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">6355052821</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">StudyForest@gmail.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">www.studyforest.com</a> </li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
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
                  <div class="value pull-right"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
       
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2022 Study Forest. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
           
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php } ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

@yield("js")

</body>

<!-- Mirrored from html.kodesolution.live/s/studypress/v6.0/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jan 2022 11:18:31 GMT -->
</html>