@extends('admin.master.master')

@section("title")
Add-Employee
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
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");

      $(document).ready(function(){
          $("#empform").validate({
            rules:
            {
              empname:
              {
                required:true,
                lettersonly:true
              },
              contact:
              {
                required:true,
                number:true,
                phoneUs:true,
                rangelength:[10,10]
              },
              
              email:
              {
                required:true,
                email:true
              },
              img:
              {
                required:true,
                accept: "image/jpg,image/jpeg,image/png,image/gif"
              },
              qualification:
              {
                required:true
              },
              about:
              {
                required:true
              },
              experiance:
              {
                required:true
              },

              username:
              {
                required:true
              },
              password:
              {
                required:true
              }
             
            },
            messages:
            {
              empname:
              {
                required:"Please Enter Employee Name",
                lettersonly:"Please enter Only Word"
                
              },
              contact:
              {
                required:"Please Enter Contact",
                number:"Only numbers allowed",
                phoneUs:"Only Specifice Number Allowed",
                rangelength:"Must Enter 10 digits only!!"
              },
              email:
              {
                required:"Please Enter email",
                email:"Please Enter valid Email!!"
              },
              img:
              {
                required:"Please Select Image",
                accept: "Only Images Allowed"
              },
              qualification:
              {
                required:"Please Enter qualification"
              },
              about:
              {
                required:"Please Enter Your Details"
              },
              experiance:
              {
                required:"Please Enter Your Experiance"
              },
              username:
              {
                required:"Please Enter Your username"
              },
              password:
              {
                required:"Please Enter Your Password"
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
                  <h3>Manage Employee</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage Employee</li>
                    <li class="breadcrumb-item">Add Employee</li>
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
                        <h5>Add Employee</h5>
                      </div>
                      <div class="card-body">
                      @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message}}</p>
                        </div>
                        @endif
                        <form id="empform" enctype="multipart/form-data" method="post" action="/admin/employee/insertemp" class="theme-form">
                          @csrf
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">Employee Name</label>
                            <input class="form-control" id="empname" name="empname" type="text" aria-describedby="emailHelp" placeholder="Enter Employee Name">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Contact</label>
                            <input class="form-control" id="contact" name="contact" type="text" placeholder="Enter Your PhNo">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Email</label>
                            <input class="form-control" id="email" name="email" type="mail" placeholder="Enter Your Email">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Gender</label>
                            <div class="radio radio-primary">
                            <input id="radioinline1" type="radio" Checked name="gender" value="Male">
                            <label class="mb-0" for="radioinline1">Male</label>
                            <input id="radioinline2" type="radio" name="gender" value="Female">
                            <label class="mb-0" for="radioinline2">Female</label>
                            <input id="radioinline3" type="radio" name="gender" value="Other">
                            <label class="mb-0" for="radioinline3">Other</label>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Photo</label>
                            <input class="form-control" id="img" name="img" type="file">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Qualification</label>
                            <input class="form-control" id="qualification" name="qualification" type="text" placeholder="Enter Your Qualification">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">About Employee</label>
                            <textarea id="about" class="form-control" name="about" rows="4" cols="50">About You....</textarea>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Experiance</label>
                            <input class="form-control" id="experiance" name="experiance" type="text" placeholder="Enter Your Experiance">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Is-Active</label>
                            <div class="radio radio-primary">
                            <input id="radioinline4" type="radio" Checked name="radio2" value="Yes">
                            <label class="mb-0" for="radioinline4">Yes</label>
                            <input id="radioinline5" type="radio" name="radio2" value="No">
                            <label class="mb-0" for="radioinline5">No</label>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">UserName</label>
                            <input class="form-control" id="username" name="username" type="text" placeholder="Enter Your UserName">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Password</label>
                            <input class="form-control" id="password" name="password" type="password" placeholder="Enter Your Password">
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
