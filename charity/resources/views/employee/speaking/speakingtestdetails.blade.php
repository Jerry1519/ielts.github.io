@extends('employee.master.empmaster')

@section("title")
detail-SpeakingTest
@endsection

@section("css")
 <!-- Google font-->
 <link rel="icon" href="{{ URL::to('/') }}/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ URL::to('/') }}/assets/images/favicon.png" type="image/x-icon">
    <title>@yield('title')</title>
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
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ URL::to('/') }}/assets/js/script.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>
    
@endsection


@section("main")
<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>View WrittingTest</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/employee/empdashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage Speakingtest</li>
                    <li class="breadcrumb-item">View Speakingtest</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="/employee/speaking/speakingtest/{type}" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="eye"></i></a></li>
                     
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
            <!-- <div class="col-sm-6 col-xl-6"></div> -->
              <div class="col-sm-12 col-xl-12">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h5>View SpeakingTest</h5>
                      </div>
                      <div class="card-body">
                      @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message}}</p>
                        </div>
                        @endif
                        <table class="table">
                      
                      <tbody>
                          
                        <tr>
                          <th scope="row">User Name</th>
                          <td>{{ $singledata->name }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Test Start</th>
                          <td>{{ $singledata->test_start }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Test End</th>
                          <td>{{ $singledata->test_end }}</td>
                        </tr>
                       
                        <tr>
                          <th scope="row">Status </th>
                          <td>{{ $singledata->status }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Employee Name</th>
                          <td>{{ $singledata->e_name }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Type</th>
                          <td>{{ $singledata->type }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Band</th>
                          <td>{{ $singledata->band }}</td>
                        </tr>
                        
                      </tbody>
                    </table>

                        
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="col-sm-6 col-xl-6">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h5>View All Speaking Question</h5>
                      </div>
                      <div class="card-body">
                      @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message}}</p>
                        </div>
                        @endif
                        <table class="table">
                      
                      <tbody>
                      @foreach($speakingque as $row)
                        <tr>
                           
                          <td>{!! $row->question !!}</td>
                         
                        </tr>
                        @endforeach
                       
                        
                      </tbody>
                    </table>

                        
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="col-sm-6 col-xl-6">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h5>View All Speaking Answer</h5>
                      </div>
                      <div class="card-body">
                      @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message}}</p>
                        </div>
                        @endif

                        <form method="post" action="/storespeakingdata">
                            @csrf
                            <input type="hidden" name="testid" value="{{$id}}"/>
                            <input type="text" name="type" value="{{ $singledata->type }}"/>
                        <table class="table">
                      
                      <tbody>
                          
                      @foreach($speakingans as $row)
                        <tr>
                           
                          <td>{{ $row->answer }} 
                            <audio controls>
                              <source src="{{ URL::to('/') }}/uploads/answer/{{ $row->answer }}" type="audio/mpeg">
                            </audio></td>
                         
                        </tr>
                        <tr>
                           
                           <td>
                               <textarea class="form-control"  name="txtans{{$row->answer_id}}">{{ $row->remark }}</textarea>
                           </td>
                          
                         </tr>
                        @endforeach

                        <tr>
                          
                           

                           <td>
                          
                           <lable>Band</lable>
                               <input type="text" value="{{ $singledata->band }}" class="form-control" name="txtband" />
                           </td>
                          
                          
                         </tr>
                        
                      </tbody>
                    </table>
                    @if($singledata->status == "Assigned" )
                    <button type="submit" class="btn btn-primary">Submit</button>
                    @endif
</form>

                        
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
              </div>

</div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
@endsection