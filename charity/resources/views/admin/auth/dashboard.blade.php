@extends('admin.master.master')

@section("title")
Dashboard
@endsection

@section("css")
<link rel="icon" href="{{ URL::to('/') }}/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ URL::to('/') }}/assets/images/favicon.png" type="image/x-icon">
    <title>@yield("title")</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/vector-map.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/owlcarousel.css">
 
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/whether-icon.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/style.css">
    <link id="color" rel="stylesheet" href="{{ URL::to('/') }}/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/responsive.css">
  
@endsection

@section("js")

   <!-- latest jquery-->
   <script src="{{ URL::to('/') }}/assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="{{ URL::to('/') }}/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="{{ URL::to('/') }}/assets/js/sidebar-menu.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="{{ URL::to('/') }}/assets/js/bootstrap/popper.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="{{ URL::to('/') }}/assets/js/chart/chartist/chartist.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/chart/knob/knob.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/chart/knob/knob-chart.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/prism/prism.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/clipboard/clipboard.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/counter/counter-custom.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/custom-card/custom-card.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/dashboard/default.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/notify/index.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
  
    <script src="{{ URL::to('/') }}/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/general-widget.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/height-equal.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ URL::to('/') }}/assets/js/script.js"></script>
   
    <!-- login js-->
    <!-- Plugin used-->
@endsection

@section("main")
<div class="page-body">
   <!-- Container-fluid starts-->
   <div class="container-fluid dashboard-default-sec">
      <div class="row">
         <div class="col-xl-5 box-col-12 des-xl-100">
            <div class="row">
               <div class="col-xl-6 col-md-4 col-sm-6 box-col-4 des-xl-25 rate-sec">
                  <div class="card income-card card-primary">
                     <div class="card-body text-center">
                        <div class="round-box">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                              <g>
                                 <g>
                                    <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                                 </g>
                              </g>
                              <g>
                                 <g>
                                    <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"></path>
                                 </g>
                              </g>
                           </svg>
                        </div>
                        <h5>{{ count($userdata) }}</h5>
                        <p>Happy Student</p>
                        <a class="btn-arrow arrow-primary" href="/user/viewuser"><i class="toprightarrow-primary fa fa-arrow-up me-2"></i>View</a>
                        <div class="parrten">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                              <g>
                                 <g>
                                    <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                                 </g>
                              </g>
                              <g>
                                 <g>
                                    <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z">                                  </path>
                                 </g>
                              </g>
                           </svg>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-md-4 col-sm-6 box-col-4 des-xl-25 rate-sec">
                  <div class="card income-card card-secondary">
                     <div class="card-body text-center">
                        <div class="round-box">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                              <g>
                                 <g>
                                    <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z"></path>
                                 </g>
                              </g>
                           </svg>
                        </div>
                        <h5>{{ count($order) }}</h5>
                        <p>Our Total Orders</p>
                        <a class="btn-arrow arrow-secondary" href="/admin/order/viewcomporder"><i class="toprightarrow-secondary fa fa-arrow-up me-2"></i>View</a>
                        <div class="parrten">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                              <g>
                                 <g>
                                    <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z"></path>
                                 </g>
                              </g>
                           </svg>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-5 box-col-12 des-xl-100">
            <div class="row">
               <div class="col-xl-6 col-md-4 col-sm-6 box-col-4 des-xl-25 rate-sec">
                  <div class="card income-card card-primary">
                     <div class="card-body text-center">
                        <div class="round-box">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                              <g>
                                 <g>
                                    <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                                 </g>
                              </g>
                              <g>
                                 <g>
                                    <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"></path>
                                 </g>
                              </g>
                           </svg>
                        </div>
                        <h5>{{ count($empdata) }}</h5>
                        <p>Our Teacher</p>
                        <a class="btn-arrow arrow-primary" href="/admin/employee/viewemp"><i class="toprightarrow-primary fa fa-arrow-up me-2"></i>View</a>
                        <div class="parrten">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                              <g>
                                 <g>
                                    <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                                 </g>
                              </g>
                              <g>
                                 <g>
                                    <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z">                                  </path>
                                 </g>
                              </g>
                           </svg>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-md-4 col-sm-6 box-col-4 des-xl-25 rate-sec">
                  <div class="card income-card card-secondary">
                     <div class="card-body text-center">
                        <div class="round-box">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                              <g>
                                 <g>
                                    <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z"></path>
                                 </g>
                              </g>
                           </svg>
                        </div>
                        <h5>{{ count($articledata) }}</h5>
                        <p>Our Article</p>
                        <a class="btn-arrow arrow-secondary" href="/admin/article/viewarticle"><i class="toprightarrow-secondary fa fa-arrow-up me-2"></i>View</a>
                        <div class="parrten">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                              <g>
                                 <g>
                                    <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z"></path>
                                 </g>
                              </g>
                           </svg>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
  <div class="row">
    <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
      <div class="card">
          <div class="mobile-clock-widget">
            <div class="bg-svg">
                <svg class="climacon climacon_cloudLightningMoon" id="cloudLightningMoon" version="1.1" viewBox="15 15 70 70">
                  <clippath id="moonCloudFillClipfill11">
                      <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                  </clippath>
                  <clippath id="cloudFillClipfill19">
                      <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                  </clippath>
                  <g class="climacon_iconWrap climacon_iconWrap-cloudLightningMoon">
                      <g clip-path="url(#cloudFillClip)">
                        <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                        </g>
                      </g>
                      <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                        <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "></polygon>
                      </g>
                      <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"></path>
                      </g>
                  </g>
                </svg>
            </div>
            <div>
                <ul class="clock" id="clock">
                  <li class="hour" id="hour"></li>
                  <li class="min" id="min"></li>
                  <li class="sec" id="sec"></li>
                </ul>
                <div class="date f-24 mb-2" id="date"><span id="monthDay"></span><span id="year">, </span></div>
                <div>
                  <p class="m-0 f-14 text-light">kolkata, India                                            </p>
                </div>
            </div>
          </div>
      </div>
    </div>
    <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
      <div class="card">
          <div class="weather-widget-two">
            <div class="card-body">
                <div class="media">
                  <svg class="climacon climacon_cloudDrizzleMoonAlt" id="cloudDrizzleMoonAlt" version="1.1" viewBox="15 15 70 70">
                      <clippath id="cloudFillClip">
                        <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                      </clippath>
                      <clippath id="moonCloudFillClip">
                        <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                      </clippath>
                      <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoonAlt">
                        <g clip-path="url(#cloudFillClip)">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                            </g>
                        </g>
                        <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
                        </g>
                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
                        </g>
                      </g>
                  </svg>
                  <!-- cloudDrizzleMoonAlt-->
                  <div class="media-body align-self-center text-white">
                      <h4 class="m-0 f-w-600 num">25°C</h4>
                      <p class="m-0 f-14">Newyork</p>
                  </div>
                </div>
                <div class="media">
                  <svg class="climacon climacon_cloudRainMoon" id="cloudRainMoon" version="1.1" viewBox="15 15 70 70">
                      <clippath id="cloudFillClip1">
                        <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                      </clippath>
                      <clippath id="moonCloudFillClip1">
                        <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                      </clippath>
                      <g class="climacon_iconWrap climacon_iconWrap-cloudRainMoon">
                        <g clip-path="url(#cloudFillClip1)">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip1)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                            </g>
                        </g>
                        <g class="climacon_wrapperComponent climacon_wrapperComponent-rain">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                        </g>
                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip1)">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
                        </g>
                      </g>
                  </svg>
                  <!-- cloudRainMoon-->
                  <div class="media-body align-self-center text-white">
                      <h4 class="m-0 f-w-600 num">95°F</h4>
                      <p class="m-0 f-14">Peris</p>
                  </div>
                </div>
                <div class="media">
                  <svg class="climacon climacon_cloudDrizzle" id="cloudDrizzle" version="1.1" viewBox="15 15 70 70">
                      <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzle">
                        <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                        </g>
                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>
                        </g>
                      </g>
                  </svg>
                  <!-- cloudDrizzle-->
                  <div class="media-body align-self-center text-white">
                      <h4 class="m-0 f-w-600 num">50°C</h4>
                      <p class="m-0 f-14">India</p>
                  </div>
                </div>
                <div class="top-bg-whether">
                  <svg class="climacon climacon_cloudHailAltFill" id="cloudHailAltFill" version="1.1" viewBox="15 15 70 70">
                      <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltFill">
                        <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                            <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                              <circle cx="42" cy="65.498" r="2"></circle>
                            </g>
                            <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                              <circle cx="49.999" cy="65.498" r="2"></circle>
                            </g>
                            <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                              <circle cx="57.998" cy="65.498" r="2"></circle>
                            </g>
                            <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                              <circle cx="42" cy="65.498" r="2"></circle>
                            </g>
                            <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                              <circle cx="49.999" cy="65.498" r="2"></circle>
                            </g>
                            <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                              <circle cx="57.998" cy="65.498" r="2"></circle>
                            </g>
                        </g>
                        <g class="climacon_componentWrap climacon_componentWrap_cloud">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                            <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                        </g>
                      </g>
                  </svg>
                </div>
                <div class="bottom-whetherinfo">
                  <div class="row">
                      <div class="col-6"><i data-feather="cloud-drizzle"></i></div>
                      <div class="col-6">
                        <div class="whether-content">
                            <span>India, Surat</span>
                            <h4 class="num mb-0">36°F                                    </h4>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="col-xl-12 recent-order-sec">
      <div class="card">
         <div class="card-body">
            <div class="table-responsive">
               <h5>Recent Orders</h5>
               <table class="table table-bordernone">
                  <thead>
                     <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>City</th>
                        <th>Status</th>
                        <th>
                           <div class="setting-list">
                              <ul class="list-unstyled setting-option">
                                 <li>
                                    <div class="setting-primary"><i class="fa fa-cog">                                      </i></div>
                                 </li>
                                 <li><i class="view-html fa fa-code font-primary"></i></li>
                                 <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                 <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                                 <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                                 <li><i class="icofont icofont-error close-card font-primary"></i></li>
                              </ul>
                           </div>
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($orderdata as $row)
                     <tr>
                        <td>
                           <div class="media-body"><a href="product-page.html"><span>{{ $row->name }}</span></a></div>
                        </td>
                        <td>
                           <p>{{ $row->orderdatetime }}</p>
                        </td>
                        <td>
                           <p>{{ $row->amount }}</p>
                        </td>
                        <td>
                           <p>{{ $row->city_name }}</p>
                        </td>
                        <td>
                           <p>{{ $row->status }}</p>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
            <div class="code-box-copy">
               <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#recent-order" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            </div>
         </div>
      </div>
   </div> 
</div>
@endsection