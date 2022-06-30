@extends('admin.master.master')

@section("title")
Detail-Employee
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
   
    
    <!-- login js-->
    <!-- Plugin used-->
@endsection


@section("main")
<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Manage Employee</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage Employee</li>
                    <li class="breadcrumb-item">Detail Employee</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="/admin/employee/viewemp" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="eye"></i></a></li>
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
                        <h5>Detail Employee</h5>
                      </div>
                      <div class="card-body">
                      @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message }}</p>
                        </div>
                      @endif
                      <table class="table">
                      
                      <tbody>
                        <tr>
                          <th scope="row">Employee Name</th>
                          <td>{{ $singledata->e_name }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Contact</th>
                          <td>{{ $singledata->contact }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Email</th>
                          <td>{{ $singledata->email }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Gender</th>
                          <td>{{ $singledata->gender }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Image</th>
                          <td><a href="{{ URL::to('/') }}/uploads/employee/{{ $singledata->empimg }}" target="_blank"><img src="{{ URL::to('/') }}/uploads/employee/{{ $singledata->empimg }}" width="100" height="100" /></a></td>
                        </tr>
                        
                        <tr>
                          <th scope="row">Qualification</th>
                          <td>{{ $singledata->qualification }}</td>
                        </tr>
                        <tr>
                          <th scope="row">About employee</th>
                          <td>{{ $singledata->about_emp }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Experience</th>
                          <td>{{ $singledata->exp }}</td>
                        </tr>
                        <tr>
                        <th scope="row">isactive</th>
                          <td>{{ $singledata->isactive }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Username</th>
                          <td>{{ $singledata->username }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Password</th>
                          <td>{{ $singledata->password }}</td>
                        </tr>
                        
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