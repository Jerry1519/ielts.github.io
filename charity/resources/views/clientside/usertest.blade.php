@extends('clientside.usermaster')

@section("title")
MY Test
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
          <h2 class="title text-white">My Test</h2>
          <ol class="breadcrumb text-left text-black mt-10">
            <li><a href="/client/index">Home</a></li>
            <li><a href="#">My Profile</a></li>
            <li class="active text-gray-silver">MY TEST</li>
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

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">My Test <span class="badge"></span></a></li>
              
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="orders">
                <div class="table-responsive">
                <div data-example-id="striped-table" class="bs-example"> 
                    <table class="table table-striped"> 
                        <thead>
                            <tr>
                                <th>No.</th> 
                                <th>Status</th>
                                <th>User Name</th> 
                                <th>Start Time</th> 
                                <th>End Time</th> 
                                <th>Teacher Name</th> 
                                <th>Type</th> 
                                <th>Band</th> 
                                <th>Action</th> 
                               

                            </tr>
                        </thead>
                        <tbody>   
                        @foreach($singledata as $row)       
                            <tr>
                                <th>{{ $loop->index+1 }}</th>
                                <td>{{ $row->status }}</td> 
                                <td>{{ $row->name }}</td> 
                                <td>{{ $row->test_start }}</td> 
                                <td>{{ $row->test_end }}</td>
                                <td>{{ $row->e_name }}</td> 
                                <td>{{ $row->type }}</td> 
                                <td>{{ $row->band }}</td>
                                <td>
                                  @if($row->type=="Writting")
                
                                  <div class="btn-group btn-group-square" role="group" aria-label="Basic example">
                                    <a href="/client/usertest/viewusertest/{{ $row->test_id }}"><button class="btn btn-success btn-sm" type="button">View Writting Test</button></a>
                                  </div>
                                  @elseif($row->type=="Speaking")
                                  <div class="btn-group btn-group-square" role="group" aria-label="Basic example">
                                    <a href="/client/usertest/viewusertestspeaking/{{ $row->test_id }}"><button class="btn btn-success btn-sm" type="button">View Speaking Test</button></a>
                                  </div>
                                  @elseif($row->type=="Reading")
                                  <div class="btn-group btn-group-square" role="group" aria-label="Basic example">
                                    <a href="/client/usertest/viewusertestreading/{{ $row->test_id }}"><button class="btn btn-success btn-sm" type="button">View Reading Test</button></a>
                                  </div>
                                  @else
                                  <div class="btn-group btn-group-square" role="group" aria-label="Basic example">
                                    <a href="/client/usertest/viewusertestlistening/{{ $row->test_id }}"><button class="btn btn-success btn-sm" type="button">View Listening Test</button></a>
                                  </div>
                                  @endif

                                </td>
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
  </div>
</section>

</div>
<!-- end main-content -->
@endsection

