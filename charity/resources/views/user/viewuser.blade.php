@extends('admin.master.master')

@section("title")
View-User
@endsection

@section("css")
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
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/css/datatables.css">
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
    <script src="{{ URL::to('/') }}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ URL::to('/') }}/assets/js/script.js"></script>
   
    <!-- login js-->
    <!-- Plugin used-->
    <script>
    $(document).ready(function(){
      $(".btn-delete").click(function(){
        var id = $(this).attr("data-id");
        $("#deleteid").val(id);
      });
    });
    </script>
@endsection

@section("main")
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Are you sure you want to delete?
                          </div>
                          <div class="modal-footer">
                          <form method="post" action="/user/deleteuser">
                              @csrf
                            <input type="hidden" id="deleteid" name="deleteid"/>
                            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">No</button>
                            <button class="btn btn-secondary" type="submit">Yes</button>
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>
<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Manage User</h3>
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage User</li>
                    <li class="breadcrumb-item">View Users</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  
                  <!-- Bookmark Ends-->
                </div>
              </div>  
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>All User-List</h5>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>User-id</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <!-- <th>Address</th> -->
                            <!-- <th>Date Of Birth</th> -->
                            <th>Email(Username)</th>
                            <!-- <th>Password</th>
                            <th>Otp</th>
                            <th>Is valid</th>
                            <th>Registred Date-Time</th> -->
                            <th>Profile-Pic</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($userdata as $row)
                          <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->contact }}</td>
                            <!-- <td>{{ $row->Address }}</td> -->
                            <!-- <td>{{ $row->dob }}</td> -->
                            <td>{{ $row->email }}</td>
                            <!-- <td>{{ $row->password }}</td>
                            <td>{{ $row->otp }}</td>
                            <td>{{ $row->isvalid }}</td>
                            <td>{{ $row->regi_datetime }}</td> -->
                            <td><a href="{{ URL::to('/') }}/uploads/user/{{ $row->profile_pic }}" target="
                            _blank"><img src="{{ URL::to('/') }}/uploads/user/{{ $row->profile_pic }}" width="100"/></a></td>
                            
                            <td>
                                <div class="card-footer text-center">
                                <button data-id="{{ $row->user_id }}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" class="btn btn-danger btn-sm btn-delete" type="button">Delete</button>
                                <a href="/user/detailuser/{{ $row->user_id }}"><button class="btn btn-secondary btn-sm" type="button">View</button></a>
                                </div>
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
          <!-- Container-fluid Ends-->
        </div>
@endsection