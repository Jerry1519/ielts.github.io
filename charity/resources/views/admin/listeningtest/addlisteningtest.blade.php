@extends('admin.master.master')

@section("title")
Add-ListeningTest
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
          $("#listeningtestform").validate({
            rules:
            {
              
              title:
              {
                required:true
              },
              section:
              {
                required:true
              },
              time:
              {
                required:true
              },
              paragraph:
              {
                required:true
              },
              type:
              {
                required:true
              },
            },
            messages:
            {
              
              title:
              {
                required:"Please Enter title"
              },
              section:
              {
                required:"Please Select section"
              },
              desc:
              {
                required:"Please Enter description"
              }, 
              time:
              {
                required:"Please Enter time"
              },
              paragraph:
              {
                required:"Please Enter paragraph"
              }, 
              type:
              {
                required:"Please Enter type"
              }
            }
          });
      });
      </script>
    <!-- login js-->
    <!-- Plugin used-->
    <script src="//cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>  
    <script>
      CKEDITOR.replace( 'paragraph1' );
      CKEDITOR.replace( 'paragraph2' );
      CKEDITOR.replace( 'paragraph3' );
      </script>
@endsection


@section("main")
<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Manage ListeningTest</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage ListeningTest</li>
                    <li class="breadcrumb-item">Add ListeningTest</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="/admin/listeningtest/viewlisteningtest" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="eye"></i></a></li>
                     
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
            <div class="col-sm-12 col-xl-12"></div>
              <div class="col-sm-12 col-xl-12">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h5>Add ListeningTest</h5>
                      </div>
                      <div class="card-body">
                      @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message}}</p>
                        </div>
                        @endif
                        <form id="listeningtestform" enctype="multipart/form-data" method="post" action="/admin/listeningtest/insertlisteningtest" class="theme-form">
                        @csrf
                        <div class="mb-3">
                            <label class="col-form-label pt-0" for="u_title">Select Listening Test</label>
                            <select class="form-control" id="title" name="title">
                              <option value="">Please Select Listening Test</option>
                              @foreach($writtingtestdata as $row)
                                <option value="{{ $row->u_test_id }}">{{ $row->u_title }}</option>
                              @endforeach
                            </select>
                          </div>
                        <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">AudioFile</label>
                            <input class="form-control" id="audio" name="audio" type="file" aria-describedby="emailHelp">
                          </div>
                          <!-- <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">Title</label>
                            <input class="form-control" id="title" name="title" type="text" aria-describedby="emailHelp" placeholder="Enter Title">
                          </div> -->
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">Description</label>
                            <input class="form-control" id="desc" name="desc" type="text" aria-describedby="emailHelp" placeholder="Enter Description">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">Time</label>
                            <input class="form-control" id="time" name="time" type="datetime-local" aria-describedby="emailHelp" placeholder="Enter Date-Time">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Is-Active</label>
                            <div class="radio radio-primary">
                            <input id="radioinline1" type="radio" Checked name="radio1" value="Yes">
                            <label class="mb-0" for="radioinline1">Yes</label>
                            <input id="radioinline2" type="radio" name="radio1" value="No">
                            <label class="mb-0" for="radioinline2">No</label>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">Paragraph 1</label>
                            <textarea id="paragraph1" class="form-control" name="paragraph1" value="" rows="4" cols="50"></textarea>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">Paragraph 2</label>
                            <textarea id="paragraph2" class="form-control" name="paragraph2" value="" rows="4" cols="50"></textarea>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">Paragraph 3</label>
                            <textarea id="paragraph3" class="form-control" name="paragraph3" value="" rows="4" cols="50"></textarea>
                          </div>
                          <div class="mb-3">
                            <div class="mb-2 form-control col-form-label pt-0">
                                <label class="col-form-label">Select Type</label>
                                    <select name="type" class="js-example-basic-single col-sm-12 form-control">
                                        <option selected disabled>Type</option>
                                        <option value="listening">Listening</option>
                                        <option value="reading">Reading</option>
                                    </select>
                            </div>
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
