@extends('admin.master.master')

@section("title")
Details-Test
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
                  <h3>Manage Test</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage Test</li>
                    <li class="breadcrumb-item">View Test</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="/admin/product/viewproduct" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="eye"></i></a></li>
                     
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
            <div class="col-sm-6 col-xl-6"></div>
              <div class="col-sm-6 col-xl-12">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h5>View Test</h5>
                      </div>
                      <div class="card-body">
                      @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message }}</p>
                        </div>
                      @endif
                      <form action="/admin/test/inserttest" method="post">
                                @csrf
                            <table class="table">
                            <input type="hidden" name="testid" value="{{ $singledata->test_id }}"/>
                            <input type="hidden" name="type" value="{{ $singledata->type }}"/>
                            <tbody>
                                <tr>
                                <th scope="row">User Name</th>
                                <td>{{ $singledata->name }}</td>
                                </tr>
                                <tr>
                                <th scope="row">Employee Name</th>
                                <td>{{ $singledata->e_name }}</td>
                                </tr>
                                <tr>
                                <th scope="row">Test-Start</th>
                                <td>{{ $singledata->test_start }}</td>
                                </tr>
                                <tr>
                                <th scope="row">Test-End</th>
                                <td>{{ $singledata->test_end }}</td>
                                </tr>
                                <tr>
                                <th scope="row">Type</th>
                                <td>{{ $singledata->type }}</td>
                                </tr>
                                <tr>
                                <th scope="row">Status</th>
                                <td>{{ $singledata->status }}</td>
                                </tr>
                                <tr>
                                <th scope="row">Band</th>
                                <td>{{ $singledata->band }}</td>
                                </tr>
                                @if($singledata->status == "Pending")
                                <tr>
                                <th scope="row">Select Employee</th>
                                <td> <div class="mb-3">
                                
                                    <select class="form-control" id="emp" name="emp">
                                    <option value="">Please Select Employee</option>
                                    @foreach($empdata as $row)
                                        @if($row->isactive=="Yes")
                                        <option value="{{ $row->emp_id }}">{{ $row->e_name }}</option>
                                        @endif
                                    @endforeach
                                    </select>
                                </div></td>
                                </tr>
                               
                                <tr>
                                    <th>
                                        Action
                                    </th>
                                    <td>
                                       <button class="btn btn-success btn-sm"  type="submit">Click To Assign</button>
                                        <button class="btn btn-danger btn-sm"  type="button">Cancle</button>
                                    </td>
                                </tr>
                                @endif
                                
                            </tbody>
                            </table>
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