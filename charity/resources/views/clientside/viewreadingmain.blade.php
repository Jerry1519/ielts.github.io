<?php $page="nofooter"; ?>
@extends('clientside.usermaster')
@section("title")
Reading Main
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
<style>
    .my-scroll
    {
        height:500px;
        overflow-y:scroll;
    }
    .bottom-bar
    {
        z-index: 9999;
        width:100%;
        background-color:blue;
        position:fixed;
        bottom:0;
        margin-bottom:0;
    }
     .panel-group.toggle.transparent .panel-title a.active
    {
        color:white;
    }
    .yes
    {
        height: 50px;
        width: 50px;
        background: green;
        padding: 7px;
        color: white;
        border-radius: 50%;
    }
    .fullscreen-div
    {
       
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 999;
    }
    </style>
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
<script>
   $(document).ready(function(){
      $("#my-exam").addClass("fullscreen-div");
      $("#header").hide();

      
    $(".txt").keyup(function() {
        var val = $(this).val();
        if(val.length>=1)
        {
            var id = $(this).attr("data-id");
            console.log(id);
            $("span.c"+id).addClass("yes");
        }
        else
        {
            var id = $(this).attr("data-id");
            $("span.c"+id).removeClass("yes");
        }
    });


    $(".myselect").change(function(){
       var v = $(this).val();
       var id = $('option:selected', this).attr('data-id');
       if(v=="0")
       {
         $("span.c"+id).removeClass("yes");
       }
       else
       {
         $("span.c"+id).addClass("yes");
       }
    });

   });
</script>
<script>
    // Cookies
function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";               

    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}
    if(readCookie("timer")==null)
    {
        var timer2 = "60:00";
    }
    else
    {
        var timer2=readCookie("timer");
    }
   
var interval = setInterval(function() {


  var timer = timer2.split(':');
  //by parsing integer, I avoid all extra string processing
  var minutes = parseInt(timer[0], 10);
  var seconds = parseInt(timer[1], 10);
  --seconds;
  minutes = (seconds < 0) ? --minutes : minutes;
  if (minutes < 0) clearInterval(interval);
  seconds = (seconds < 0) ? 59 : seconds;
  seconds = (seconds < 10) ? '0' + seconds : seconds;
  //minutes = (minutes < 10) ?  minutes : minutes;
  $('.timer').html(minutes + ':' + seconds);
  $('#mytime').val(minutes + ':' + seconds);
  createCookie("timer",minutes + ':' + seconds,1);
  if(minutes<0)
  {
      eraseCookie("name"); 
      $(".btn-exam-done").click();
  }
  timer2 = minutes + ':' + seconds;

}, 1000);
function newTabaction() {
   alert("You Opend New Tab!!!");
   eraseCookie("name"); 
      $(".btn-exam-done").click();
}
window.onblur = newTabaction;
</script>
@endsection
@section("main")
<!-- Start main-content -->
<div class="main-content" id="my-exam">
  <form action="/client/insertreadingans" method="post" enctype="multipart/form-data">
                        @csrf
   <!-- Section: inner-header -->
   <!-- Section: News & Blog -->
   <input type="hidden" name="testid" value="{{$testid}}"/>
                           
                           <input type="hidden" name="ltestid" value="{{$ltestid}}"/>
   <section id="news">
      <div class="container">
         {{ $singledata->description }}
         <div class="section-content">
            <div class="row">
               <div class="col-12">
                  <ul id="myTab" class="nav nav-tabs boot-tabs">
                     <li class="active">
                        <a href="#main1" data-toggle="tab">
                           <h5>Reading Passage 1</h5>
                        </a>
                     </li>
                     <li>
                        <a href="#main2" data-toggle="tab">
                           <h5>Reading Passage 2</h5>
                        </a>
                     </li>
                     <li>
                        <a href="#main3" data-toggle="tab">
                           <h5>Reading Passage 3</h5>
                        </a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div class="tab-pane fade in active p-5" id="main1">
                        <div class="row">
                           <div class="col-sm-6 col-md-6 my-scroll">
                              <p>{!! $singledata->paragraph1 !!}</p>
                           </div>
                           <div class="col-sm-4 col-md-4 my-scroll">
                              @foreach($quedata1 as $row)
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>{!! $row->question !!}</th>
                                    </tr>
                                 </thead>
                              </table>
                              @endforeach
                           </div>
                           <div class="col-sm-2 col-md-2 my-scroll">
                              <?php $count=1; ?>
                              <?php
                                 $alpha = ['A','B','C','D','E','F','G','H','I','J','K']
                                 ?>
                              @foreach($listeningdata1 as $row)
                              @if($row->type=="simple")
                              <p><b><?php echo $count; $count++; ?></b><input type="text" class="txt" data-id="{{$row->lq_id}}" name="txt{{$row->lq_id}}"/></p>
                              @endif
                              @if($row->type=="radio")
                              <p>
                                 <b><?php echo $count; $count++; ?></b>
                                 <select name="txt{{$row->lq_id}}" class="myselect">
                                    <option value="0" data-id="{{$row->lq_id}}">Please Select Value</option>
                                    <?php for($i=0;$i<$row["opt_limit"];$i++) { ?>
                                    <option data-id="{{$row->lq_id}}" value="<?php echo $alpha[$i]; ?>"><?php echo $alpha[$i]; ?></option>
                                    <?php } ?>
                                 </select>
                              </p>
                              @endif
                              @endforeach
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="main2">
                        <div class="row">
                           <div class="col-sm-6 col-md-6 my-scroll">
                              <p>{!! $singledata->paragraph2 !!}</p>
                           </div>
                           <div class="col-sm-4 col-md-4 my-scroll">
                              @foreach($quedata2 as $row)
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>{!! $row->question !!}</th>
                                    </tr>
                                 </thead>
                              </table>
                              @endforeach
                           </div>
                           <div class="col-sm-2 col-md-2 my-scroll">
                              <?php $count=1; ?>
                              <?php
                                 $alpha = ['A','B','C','D','E','F','G','H','I','J','K']
                                 ?>
                              @foreach($listeningdata2 as $row)
                              @if($row->type=="simple")
                              <p><b><?php echo $count; $count++; ?></b><input type="text" class="txt" data-id="{{$row->lq_id}}" name="txt{{$row->lq_id}}"/></p>
                              @endif
                              @if($row->type=="radio")
                              <p>
                                 <b><?php echo $count; $count++; ?></b>
                                 <select name="txt{{$row->lq_id}}" class="myselect">
                                    <option value="0" data-id="0">Please Select Value</option>
                                    <?php for($i=0;$i<$row["opt_limit"];$i++) { ?>
                                    <option data-id="{{$row->lq_id}}" value="<?php echo $alpha[$i]; ?>"><?php echo $alpha[$i]; ?></option>
                                    <?php } ?>
                                 </select>
                              </p>
                              @endif
                              @endforeach
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="main3">
                        <div class="row">
                           <div class="col-sm-6 col-md-6 my-scroll">
                              <p>{!! $singledata->paragraph3 !!}</p>
                           </div>
                           <div class="col-sm-4 col-md-4 my-scroll">
                              @foreach($quedata3 as $row)
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>{!! $row->question !!}</th>
                                    </tr>
                                 </thead>
                              </table>
                              @endforeach
                           </div>
                           <div class="col-sm-2 col-md-2 my-scroll">
                              <?php $count=1; ?>
                              <?php
                                 $alpha = ['A','B','C','D','E','F','G','H','I','J','K']
                                 ?>
                              @foreach($listeningdata3 as $row)
                              @if($row->type=="simple")
                              <p><b><?php echo $count; $count++; ?></b><input type="text" class="txt" data-id="{{$row->lq_id}}" name="txt{{$row->lq_id}}"/></p>
                              @endif
                              @if($row->type=="radio")
                              <p>
                                 <b><?php echo $count; $count++; ?></b>
                                 <select name="txt{{$row->lq_id}}" class="myselect">
                                    <option value="0" data-id="0">Please Select Value</option>
                                    <?php for($i=0;$i<$row["opt_limit"];$i++) { ?>
                                    <option data-id="{{$row->lq_id}}" value="<?php echo $alpha[$i]; ?>"><?php echo $alpha[$i]; ?></option>
                                    <?php } ?>
                                 </select>
                              </p>
                              @endif
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="accordion1" class="panel-group accordion transparent bottom-bar">
         <div class="panel">
            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion11" class="" aria-expanded="true"> <span class="open-sub"></span>Question Palate</a> </div>
            <div id="accordion11" class="panel-collapse collapse" role="tablist" aria-expanded="true">
               <div class="panel-content">
                  <div class="row">
                     <div class="col-xs-12 col-sm-5 col-md-5">
                     <?php $count=1; ?>
                        @foreach($listeningdata as $row)
                           <span class="c{{$row->lq_id}}"><?php echo ($count<=9)?"0".$count:$count; $count++; ?></span>
                        @endforeach
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-4">
                     <center>
                        <div class="timer text-top font-25 pt-10 pb-10"></div>
                        <input type="hidden" id="mytime"/>  
                     </center>
                     </div>
                     <div class="col-xs-12 col-sm-3 col-md-3">
                        <center>
                           <button type="submit" class="btn btn-default btn-theme-colored btn-lg btn-exam-done">Submit</button>
                        </center>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</form>
</div>
<!-- end main-content -->
@endsection