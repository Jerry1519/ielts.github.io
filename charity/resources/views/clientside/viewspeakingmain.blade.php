<?php $page="nofooter"; ?>
@extends('clientside.usermaster')
@section("title")
Speaking Main
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
<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
<script>
   $(document).ready(function(){
      $("#my-exam").addClass("fullscreen-div");
      $("#header").hide();
   });
</script>

<script>
   URL = window.URL || window.webkitURL;
      var gumStream;
   //stream from getUserMedia() 
   var rec;
   //Recorder.js object 
   var input;
   var td;
      var qid;
   //MediaStreamAudioSourceNode we'll be recording 
   // shim for AudioContext when it's not avb. 
   var AudioContext = window.AudioContext || window.webkitAudioContext;
   var audioContext = new AudioContext;
   $(document).ready(function(){
      $("#my-exam").addClass("fullscreen-div");
      $("#header").hide();
   
   
   
      $(".recordButton").click(function(){
       qid = $(this).attr("data-id");
       var btn=$(this);
          var ctext = $(this).text();
          $(this).text("Stop");
          if(ctext=="Record")
          {
              var constraints = {
              audio: true,
              video: false
              } 
              navigator.mediaDevices.getUserMedia(constraints).then(function(stream) {
                  console.log("getUserMedia() success, stream created, initializing Recorder.js ..."); 
                  /* assign to gumStream for later use */
                  gumStream = stream;
                  /* use the stream */
                  input = audioContext.createMediaStreamSource(stream);
                  /* Create the Recorder object and configure to record mono sound (1 channel) Recording 2 channels will double the file size */
                  rec = new Recorder(input, {
                      numChannels: 1,
                  }) 
                  //start the recording process 
                  rec.record()
                  console.log("Recording started");


                  


                  if(btn.hasClass("qcard"))
                  {
                    
                     var count=1;
                     var interval = setInterval(function() {
                        if(count>=120)
                        {
                           
                           btn.text("Record");
                           console.log(qid);
                           rec.stop(); //stop microphone access 
                           gumStream.getAudioTracks()[0].stop();
                           console.log("stopButton clicked");
                           $("span.c"+qid).addClass("yes");
                           td = btn.closest("tr").find("td:eq(2)");
                           rec.exportWAV(createDownloadLink);
                           clearInterval(interval);
                        }
                        count++;
                        }, 1000);  
                  }
                  



              }).catch(function(err) {
                  //enable the record button if getUserMedia() fails 
                  console.log("Error")
              });
          }
          else
          {
              $(this).text("Record");
              console.log(qid);
              rec.stop(); //stop microphone access 
              gumStream.getAudioTracks()[0].stop();
              console.log("stopButton clicked");
              $("span.c"+qid).addClass("yes");
              td = $(this).closest("tr").find("td:eq(2)");
              rec.exportWAV(createDownloadLink);
          }
       
      });
   
   });
   
   function createDownloadLink(blob) {
      var reader = new FileReader();
      reader.readAsDataURL(blob); 
      reader.onloadend = function() {
      var base64data = reader.result;                
      $("#qfile"+qid).val(base64data);
   }
   
   var url = URL.createObjectURL(blob);
   var au = document.createElement('audio');
   var li = document.createElement('span');
   var link = document.createElement('a');
   //add controls to the <audio> element 
   au.controls = true;
   au.src = url;
   //link the a element to the blob 
   link.href = url;
   link.download = qid + '.wav';
   link.innerHTML = link.download;
   //add the new audio and a elements to the li element 
   li.appendChild(au);
   li.appendChild(link);
   //add the li element to the ordered list 
   td.html(li);
   }
//    function newTabaction() {
//    alert("You Opend New Tab!!!");
//    eraseCookie("name"); 
//       $(".btn-exam-done").click();
// }
// window.onblur = newTabaction;
</script>
@endsection
@section("main")
<!-- Start main-content -->
<div class="main-content">
    <form action="/client/insertspeakingans" method="post" enctype="multipart/form-data">       
    @csrf
   <section id="news">
      <div class="container" id="my-exam">
         <div class="section-content">
           
            <input type="hidden" name="testid" value="{{ $testid }}" />
            <div class="row">
               <div class="col-12">
                  <ul id="myTab" class="nav nav-tabs boot-tabs">
                     <li class="active">
                        <a href="#main1" data-toggle="tab">
                           <h5>Speaking(Introductory)</h5>
                        </a>
                     </li>
                     <li>
                        <a href="#main2" data-toggle="tab">
                           <h5>Speaking(Que-Card)</h5>
                        </a>
                     </li>
                     <li>
                        <a href="#main3" data-toggle="tab">
                           <h5>Speaking(Followup-Queation)</h5>
                        </a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div class="tab-pane fade in active p-5" id="main1">
                        <div class="row">
                           <div class="col-sm-6 col-md-6 my-scroll">
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>NO</th>
                                       <th>Question</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($que1 as $row)
                                    <tr>
                                       <td>{{ $loop->index+1 }}</td>
                                       <td>{!! $row->question !!}</td>
                                    </tr>
                                    @endforeach   
                                 </tbody>
                              </table>
                           </div>
                           <div class="col-sm-6 col-md-6 my-scroll">
                              <ol id="recordingsList"></ol>
                              @foreach($que1 as $row)
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>NO</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>{{ $row->que_id }}</td>
                                       <td>
                                          <input type="hidden"  id="qfile{{ $row->que_id }}" name="qfile{{ $row->que_id }}"/>
                                          <input type="hidden" id="qid{{ $row->que_id }}" name="qid{{ $row->que_id }}" value="{{ $row->que_id }}"/>
                                          <div id="controls">
                                            
                                             <button class="txt btn btn-default btn-theme-colored btn-lg recordButton" type="button" data-id="{{ $row->que_id }}">Record</button>
                                          </div>
                                       </td>
                                       <td class="recording"></td>
                                    </tr>
                                 </tbody>
                              </table>
                              @endforeach
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="main2">
                        <div class="row">
                           <div class="col-sm-6 col-md-6 my-scroll">
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>NO</th>
                                       <th>Question</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($que2 as $row)
                                    <tr>
                                       <td>{{ $loop->index+1 }}</td>
                                       <td>{!! $row->question !!}</td>
                                    </tr>
                                    @endforeach   
                                 </tbody>
                              </table>
                           </div>
                           <div class="col-sm-6 col-md-6 my-scroll">
                              @foreach($que2 as $row)
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>NO</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>{{ $row->que_id }}</td>
                                       <td>
                                          <input type="hidden" id="qfile{{ $row->que_id }}" name="qfile{{ $row->que_id }}"/>
                                          <input type="hidden" id="qid{{ $row->que_id }}" name="qid{{ $row->que_id }}" value="{{ $row->que_id }}"/>
                                          <div id="controls">
                                             <button class="btn btn-default btn-theme-colored btn-lg recordButton qcard" type="button" data-id="{{ $row->que_id }}">Record</button>
                                          </div>
                                       </td>
                                       <td class="recording"></td>
                                    </tr>
                                 </tbody>
                              </table>
                              @endforeach
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="main3">
                        <div class="row">
                           <div class="col-sm-6 col-md-6 my-scroll">
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>NO</th>
                                       <th>Question</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($que3 as $row)
                                    <tr>
                                       <td>{{ $loop->index+1 }}</td>
                                       <td>{!! $row->question !!}</td>
                                    </tr>
                                    @endforeach   
                                 </tbody>
                              </table>
                           </div>
                           <div class="col-sm-6 col-md-6 my-scroll">
                              @foreach($que3 as $row)
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>NO</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>{{ $row->que_id }}</td>
                                       <td>
                                          <input type="hidden" id="qfile{{ $row->que_id }}" name="qfile{{ $row->que_id }}"/>
                                          <input type="hidden" id="qid{{ $row->que_id }}" name="qid{{ $row->que_id }}" value="{{ $row->que_id }}"/>
                                          <div id="controls">
                                             <button class="btn btn-default btn-theme-colored btn-lg recordButton" type="button" data-id="{{ $row->que_id }}">Record</button>
                                          </div>
                                       </td>
                                       <td class="recording"></td>
                                    </tr>
                                 </tbody>
                              </table>
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
                        @foreach($speakingdata as $row)
                           <span class="c{{$row->que_id}}"><?php echo ($count<=9)?"0".$count:$count; $count++; ?></span>
                        @endforeach
                     </div>
                     
                     
                     <div class="col-xs-12 col-sm-7 col-md-7">
                        <center>
                           <button type="submit" class="btn btn-default btn-theme-colored btn-lg">Submit</button>
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