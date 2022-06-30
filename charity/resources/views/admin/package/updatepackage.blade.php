@extends('admin.master.master')

@section("title")
Update-Package
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
          $("#packform").validate({
            rules:
            {
              pkgname:
              {
                required:true
              },
              pkgdesc:
              {
                required:true
              },
              spkdesc:
              {
                required:true
              },
              lisdesc:
              {
                required:true
              },
              wrtdesc:
              {
                required:true
              },
              reddesc:
              {
                required:true
              },
              price:
              {
                required:true
              },
              days:
              {
                required:true
              }
              
            },
            messages:
            {
              pkgname:
              {
                required:"Please Select Package"
              },
              pkgdesc:
              {
                required:"Please Enter pkgdesc"
              },
              spkdesc:
              {
                required:"Please Enter spkdesc"
              }, 
              lisdesc:
              {
                required:"Please Enter lisdesc"
              },
              wrtdesc:
              {
                required:"Please Enter wrtdesc"
              },
              reddesc:
              {
                required:"Please Enter reddesc"
              },
              price:
              {
                required:"Please Enter price"
              },
              days:
              {
                required:"Please Enter days"
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
                  <h3>Manage Package</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage Package</li>
                    <li class="breadcrumb-item">Update Package</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="/admin/package/viewpackage" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="eye"></i></a></li>
                     
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
                        <h5>Update Package</h5>
                      </div>
                      <div class="card-body">
                      @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message}}</p>
                        </div>
                        @endif
                        <form id="packform" method="post" action="/admin/package/editpackage" class="theme-form">
                          @csrf
                          <input type="hidden" name="updateid" value="{{ $singledata->pkg_id }}"/>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="pkgname">Package Name</label>
                            <input class="form-control" value="{{ $singledata->pkg_name }}" id="pkgname" name="pkgname" type="text" aria-describedby="emailHelp" placeholder="Enter Package Name">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="pkgdesc">Package Description</label>
                            <textarea id="pkgdesc" class="form-control" name="pkgdesc" value="" rows="4" cols="50" >{{ $singledata->pkg_des}}</textarea>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="spkdesc">Speaking Description</label>
                            <textarea id="spkdesc" class="form-control" name="spkdesc" value="" rows="4" cols="50">{{ $singledata->speaking_des}}</textarea>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="lisdesc">Listening Description</label>
                            <textarea id="lisdesc" class="form-control" name="lisdesc" value="" rows="4" cols="50">{{ $singledata->listening_des}}</textarea>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="wrtdesc">Writting Description</label>
                            <textarea id="wrtdesc" class="form-control" name="wrtdesc" value="" rows="4" cols="50">{{ $singledata->writting_des}}</textarea>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="reddesc">Reading Description</label>
                            <textarea id="reddesc" class="form-control" name="reddesc" value="" rows="4" cols="50">{{ $singledata->reading_des}}</textarea>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">Price</label>
                            <input class="form-control" value="{{ $singledata->price}}" id="price" name="price" type="text" aria-describedby="emailHelp" placeholder="Enter Price">
                          </div>
                          <div class="mb-3">
                            
                            <div class="mb-2 form-control col-form-label pt-0">
                                <label class="col-form-label">Select Days</label>
                                    <select name="days" class="js-example-basic-single col-sm-12 form-control">
                                        <option value="" selected disabled>Days</option>
                                    <optgroup label="Premium">
                                        <option  value="90" @if($singledata->days=="90") selected @endif>90Days</option>
                                        <option value="120" @if($singledata->days=="120") selected @endif>120Days</option>
                                    </optgroup>
                                    <optgroup label="Gold">
                                        <option  value="60" @if($singledata->days=="60") selected @endif>60Days</option>
                                        <option  value="30" @if($singledata->days=="30") selected @endif>30Days</option>
                                    </optgroup>
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
