@extends('admin.master.master')

@section("title")
View-ListeningQuestion
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
    <script>
      $(document).ready(function(){
          $("#lisqueform").validate({
            rules:
            {
              title:
              {
                required:true
              },
              question:
              {
                required:true
              },
              rating:
              {
                required:true
              },
              op1:
              {
                required:true
              },
              op2:
              {
                required:true
              },
              op3:
              {
                required:true
              },
              op4:
              {
                required:true
              },
              cans:
              {
                required:true
              },       
              desc:
              {
                required:true
              }
              
            },
            messages:
            {
              title:
              {
                required:"Please Select title"
              },
              question:
              {
                required:"Please Enter question"
              },
              rating:
              {
                required:"Please Enter rating"
              }, 
              op1:
              {
                required:"Please Enter option1"
              },
              op2:
              {
                required:"Please Enter option2"
              },
              op3:
              {
                required:"Please Enter option3"
              },
              op4:
              {
                required:"Please Enter option4"
              },
              cans:
              {
                required:"Please Enter CorrectAnswer"
              },   
              desc:
              {
                required:"Please Enter Description"
              }     
            }
          });
      });
      </script>
    <!-- login js-->
    <!-- Plugin used-->
@endsection


@section("main")
<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Manage ListeningQuestion</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage ListeningQuestion</li>
                    <li class="breadcrumb-item">Update ListeningQuestion</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="/admin/listeningque/viewlisteningque" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="eye"></i></a></li>
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
            <div class="col-sm-12 col-xl-3"></div>
              <div class="col-sm-12 col-xl-6">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h5>View ListeningQuestion</h5>
                      </div>
                      <div class="card-body">
                      @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message}}</p>
                        </div>
                        @endif
                        <table class="table">
                      
                      <tbody>
                          <th scope="row">Title</th>
                          <td>{{ $listestdata1->u_title }}</td>
                        </tr>
                        <tr>
                          <th scope="row"> Question</th>
                          <td>{!! $listestdata->question !!}</td>
                        </tr>
                        <tr>
                          <th scope="row"> Type</th>
                          <td>{{ $listestdata->type }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Option 1</th>
                          <td>{{ $listestdata->option_1 }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Option 2</th>
                          <td>{{ $listestdata->option_2 }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Option 3</th>
                          <td>{{ $listestdata->option_3 }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Option 4</th>
                          <td>{{ $listestdata->option_4 }}</td>
                        </tr>
                        
                        <tr>
                          <th scope="row">Correct Answer</th>
                          <td>{{ $listestdata->correct_ans }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Description</th>
                          <td>{{ $listestdata->description }}</td>
                        </tr>
                        <tr>
                       
                        
                      </tbody>
                    </table>
                                
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