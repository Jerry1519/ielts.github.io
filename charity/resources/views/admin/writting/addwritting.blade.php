@extends('admin.master.master')

@section("title")
Add-Writting
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
          $("#writtingform").validate({
            rules:
            {
              name:
              {
                required:true
              },
              time:
              {
                required:true
              },
              type:
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
              name:
              {
                required:"Please Enter Name"
              },
              time:
              {
                required:"Please Enter Time"
              },
              type:
              {
                required:"Please Select Type"
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
                  <h3>Manage Writting</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage Writting</li>
                    <li class="breadcrumb-item">Add Writting</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="/admin/writting/viewwritting" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="eye"></i></a></li>
                     
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
                        <h5>Add Writting</h5>
                      </div>
                      <div class="card-body">
                      @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message}}</p>
                        </div>
                        @endif
                        <form id="writtingform" enctype="multipart/form-data" method="post" action="/admin/writting/insertwritting" class="theme-form">
                          @csrf
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="u_title">Select Writting Test</label>
                            <select class="form-control" id="title" name="title">
                              <option value="">Please Select Writting Test</option>
                              @foreach($writtingtestdata as $row)
                                <option value="{{ $row->u_test_id }}">{{ $row->u_title }}</option>
                              @endforeach
                            </select>
                          </div>
                        <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">Topic Name</label>
                            <input class="form-control" id="name" name="name" type="text" aria-describedby="emailHelp" placeholder="Enter Topic">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">Time</label>
                            <input class="form-control" id="time" name="time" type="time" aria-describedby="emailHelp" placeholder="Enter time">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Type</label>
                            <div class="radio radio-primary">
                            <input id="radioinline1" type="radio" checked name="radio1" value="task1">
                            <label class="mb-0" for="radioinline1">Task1</label>
                            <input id="radioinline2" type="radio" name="radio1" value="task2">
                            <label class="mb-0" for="radioinline2">Task2</label>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">Description</label>
                            <textarea id="desc" class="form-control" name="desc" value="" rows="4" cols="50"></textarea>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="img1">Image</label>
                            <input class="form-control" id="img" name="img" type="file">
                          </div>
                          <div class="mb-3">
                          </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </div>
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