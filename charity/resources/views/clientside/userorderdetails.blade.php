@extends('clientside.usermaster')
@section("title")
My-Orders Details
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
               <h2 class="title text-white">My Orders</h2>
               <ol class="breadcrumb text-left text-black mt-10">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Pages</a></li>
                  <li class="active text-gray-silver">Page Title</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Section: Doctor Details -->
<section class="">
   <div class="container">
   <div class="section-content">
   <div class="row">
      <!-- <div class="col-sx-12 col-sm-4 col-md-4">
         <div class="doctor-thumb">
           <img src="{{ URL::to('/') }}/user/images/about/profile1.jpg" alt="">
         </div>
         <div class="info p-20 bg-black-333">
           <h4 class="text-uppercase text-white">Jacob Smith</h4>
           <p class="text-gray-silver">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus.</p>
           <ul class="list angle-double-right m-0">
             <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">Email</strong><br> smith@yourdomain.com</li>
             <li class="text-gray-silver"><strong class="text-gray-lighter">Web</strong><br> www.yourdomain.com</li>
           </ul>
           <ul class="styled-icons icon-gray icon-circled icon-sm mt-15 mb-15">
             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#"><i class="fa fa-skype"></i></a></li>
             <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
           </ul>
           <a class="btn btn-info btn-flat mt-10 mb-sm-30" href="#">Edit Profile</a>
           <a class="btn btn-danger btn-flat mt-10 mb-sm-30" href="#">Logout</a>
         </div>
         </div> -->
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
               <li role="presentation" class="active"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Orders-Details <span class="badge"></span></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane active" id="orders">
                  <div class="table-responsive">
                     <div data-example-id="striped-table" class="bs-example">
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th>Order-Id</th>
                                 <th>User Name</th>
                                 <th>Address</th>
                                 <th>Landmark</th>
                                 <th>Pincode</th>
                                 <th>City</th>
                                 <th>Price</th>
                                 <th>Status</th>
                                 <th>Date-Time</th>
                                 <th>Is Pay</th>
                                 <th>Paymode</th>
                                 <th>Transection No</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">{{ $singledata->order_id  }}</th>
                                 <td>{{ $singledata->name }}</td>
                                 <td>{{ $singledata->address }}</td>
                                 <td>{{ $singledata->landmark }}</td>
                                 <td>{{ $singledata->pincode }}</td>
                                 <td>{{ $singledata->city_name }}</td>
                                 <td>{{ $singledata->amount }}</td>
                                 <td>{{ $singledata->status }}</td>
                                 <td>{{ $singledata->orderdatetime }}</td>
                                 <td>{{ $singledata->ispay }}</td>
                                 <td>{{ $singledata->paymode }}</td>
                                 <td>{{ $singledata->transaction_no }}</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <ul id="myTab" class="nav nav-tabs boot-tabs">
                     <li class="active"><a href="#home" class="font-15 text-uppercase" data-toggle="tab"><b>Product Info</b></a></li>
                     <li><a href="#profile" class="font-15 text-uppercase"  data-toggle="tab"><b>Status</b></a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div class="tab-pane fade in active" id="home">
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th>Qty</th>
                                 <th>Price</th>
                                 <th>ProductName</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($itemdata as $row)
                              <tr>
                                 <td>{{ $row->qty }}</td>
                                 <td>{{ $row->price }}</td>
                                 <td>{{ $row->p_name }}</td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                     <div class="tab-pane fade" id="profile">
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th>Status</th>
                                 <th>Remarks</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($logdata as $row)
                              <tr>
                                 <td>{{ $row->status }}</td>
                                 <td>{{ $row->remarks }}</td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>
</div>
<!-- end main-content -->
@endsection