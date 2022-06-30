<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/viho/theme/dashboard-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 07:54:29 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    @yield('css')
</head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="/admin/dashboard"><img class="img-fluid" src="{{ URL::to('/') }}/assets/images/logo/logo123.png" alt=""></a></div>
            <!-- <div class="dark-logo-wrapper"><a href="/admin/dashboard"><img class="img-fluid" src="{{ URL::to('/') }}/assets/images/logo/dark-logo.png" alt=""></a></div> -->
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
         
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
             
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="/logout"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><img class="img-90 rounded-circle" src="{{ URL::to('/') }}/uploads/admin/{{ Session::get('img') }}" alt="">
            <div class="badge-bottom"></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">{{ Session::get("name")}}</h6></a>
            <p class="mb-0 font-roboto">{{ Session::get("email")}}</p>
            
          </div>  
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="git-pull-request"></i><span>Editors</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="summernote.html">Summer Note</a></li>
                      <li><a href="ckeditor.html">CK editor</a></li>
                      <li><a href="simple-MDE.html">MDE editor</a></li>
                      <li><a href="ace-code-editor.html">ACE code editor</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="/admin/dashboard"><i data-feather="home"></i><span>Dashboard</span></a>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="/user/viewuser"><i data-feather="users"></i><span>Users</span></a>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user"></i><span>MyAccount</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="/admin/changepassword">Change-Password</a></li>
                      <li><a href="/logout">Logout</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="shopping-cart"></i><span>Shop</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="/admin/catagory/view">Category</a></li>
                      <li><a href="/admin/subcatagory/subview">Sub-Category</a></li>
                      <li><a href="/admin/product/viewproduct">Product</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="map-pin"></i><span>Location</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="/admin/location/viewstate">State</a></li>
                      <li><a href="/admin/location/viewcity">City</a></li>
                    </ul>
                  </li>
                  
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Order</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="/admin/order/viewporder">Pending Order</a></li>
                      <li><a href="/admin/order/viewaorder">Approved Order</a></li>
                      <li><a href="/admin/order/viewcomporder">Completed Order</a></li>
                      <li><a href="/admin/order/viewcorder">Cancel Order</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="package"></i><span>Package</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="/admin/package/viewpackage">All Package</a></li>
                      <li><a href="/admin/userpackage/viewuserpackage">User Package</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link menu-title" href="/admin/report/viewreport"><i data-feather="bar-chart"></i><span>Report</span></a>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user"></i><span>Employee</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="/admin/employee/viewemp">All Employee</a></li>
                      <!-- <li><a href="/admin/report/viewreport">Report</a></li> -->
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="mic"></i><span>Speaking</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="/admin/writtingtest/viewwrittingtest/Speaking">SpeakingMaster</a></li>
                      <li><a href="/admin/speaking/viewspeaking">Speaking-Test</a></li>
                      <li><a href="/admin/test/viewtest/Speaking">All-Speaking-Test</a></li>
                      <li><a href="/admin/answer/viewanswer">All-Answer</a></li>
                      
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="headphones"></i><span>Listening</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="/admin/writtingtest/viewwrittingtest/Listening">ListeningMaster</a></li>
                      <li><a href="/admin/listeningtest/viewlisteningtest">Listening-Test</a></li>
                      <li><a href="/admin/listeningque/viewlisteningque">ListeningQuestion</a></li>
                      <li><a href="/admin/test/viewtest/Listening">All-Listening-Test</a></li>
                      <li><a href="/admin/listeningres/viewlisteningres">All-Answer</a></li>
                      
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="book-open"></i><span>Reading</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="/admin/writtingtest/viewwrittingtest/Reading">ReadingMaster</a></li>
                      <li><a href="/admin/listeningtest/viewlisteningtest">Reading-Test</a></li>
                      <li><a href="/admin/listeningque/viewlisteningque">ReadingQuestion</a></li>
                      <li><a href="/admin/test/viewtest/Reading">All-Reading-Test</a></li>
                      <li><a href="/admin/listeningres/viewlisteningres">All-Answer</a></li>
                      
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="edit"></i><span>Writting</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="/admin/writtingtest/viewwrittingtest/Writting">WrittingMaster</a></li>
                      <li><a href="/admin/writting/viewwritting">Writting-topic</a></li>
                      <li><a href="/admin/test/viewtest/Writting">All-Writting-Test</a></li>
                      <li><a href="/admin/writting_ans/viewwrittingans">All-Answer</a></li>
                     
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="book"></i><span>Article</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="/admin/article/viewarticle">All Article</a></li>
                      <li><a href="/admin/comment/viewcomment">Comments</a></li>
                      <li><a href="/admin/likes/viewlikes">Likes</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="calendar"></i><span>Appointments</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="/admin/appointments/penappointments">Pending Appointments</a></li>
                      <li><a href="/admin/comappointments/comappointments/view">Complate Appointments</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        @yield('main')
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2022-23 © All rights reserved By STUDY FOREST</p>
              </div>
              <!-- <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div> -->
            </div>
          </div>
        </footer>
      </div>
    </div>
    @yield('js')
  </body>

<!-- Mirrored from admin.pixelstrap.com/viho/theme/dashboard-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 07:54:50 GMT -->
</html>