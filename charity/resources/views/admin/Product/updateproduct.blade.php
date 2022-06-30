@extends('admin.master.master')

@section("title")
Update-Product
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
          $("#form1").validate({
            rules:
            {
              prodname:
              {
                required:true
              },
              subcat:
              {
                required:true
              },
              
              proddecs:
              {
                required:true
              },
              img1:
              {
               
                accept: "image/jpg,image/jpeg,image/png,image/gif"
              },
              img2:
              {
                
                accept: "image/jpg,image/jpeg,image/png,image/gif"
              },
              img3:
              {
                
                accept: "image/jpg,image/jpeg,image/png,image/gif"
              },
              videourl:
              {
                required:true
              },
              price:
              {
                required:true,
                number:true,
                min:1
              }
             
            },
            messages:
            {
              prodname:
              {
                required:"Please Enter Product Name"
              },
              subcat:
              {
                required:"Please Select Sub category"
              },
              proddecs:
              {
                required:"Please Enter Description"
              },
              img1:
              
                accept: "Only Images Allowed"
              },
              img2:
              {
                
                accept: "Only Images Allowed"
              },
              img3:
              {
                
                accept: "Only Images Allowed"
              },
              videourl:
              {
                required:"Please Enter Url Name"
              },
              price:
              {
                required:"Please Enter Price",
                number:"Only numbers allowed",
                min:"Please Enter value > 1"
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
                  <h3>Manage Product</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage Product</li>
                    <li class="breadcrumb-item">Update Product</li>
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
            <div class="col-sm-12 col-xl-3"></div>
              <div class="col-sm-12 col-xl-6">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h5>Update Product</h5>
                      </div>
                      <div class="card-body">
                      @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message }}</p>
                        </div>
                      @endif
                        <form id="form1" enctype="multipart/form-data" method="post" action="/admin/product/editproduct"class="theme-form">
                          @csrf
                          <input type="hidden" name="updateid" value="{{ $singledata->product_id }}"/>
                          <input type="hidden" name="oldimage1" value="{{ $singledata->img1 }}"/>
                          <input type="hidden" name="oldimage2" value="{{ $singledata->img2 }}"/>
                          <input type="hidden" name="oldimage3" value="{{ $singledata->img3 }}"/>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="subcat">Select SubCategory</label>
                            <select class="form-control" id="subcat" name="subcat">
                              <option value="">Please Select SubCategory</option>
                              @foreach($subcatdata as $row)
                                <option @if($singledata->subcat_id==$row->subcat_id) selected @endif value="{{ $row->subcat_id }}">{{ $row->subcat_name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="prodname">Product Name</label>
                            <input class="form-control" value="{{ $singledata->p_name }}" id="prodname" name="prodname" type="text" aria-describedby="prodname" placeholder="Enter ProductName">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="proddecs">Product Description</label>
                            <textarea id="proddecs" value="" class="form-control" name="proddecs" rows="4" cols="50">{{ $singledata->description }}</textarea>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="img1">Image-1</label>
                            <input class="form-control" id="img1" name="img1" type="file">
                            <img src="{{ URL::to('/') }}/uploads/product/{{ $singledata->img1 }}" width="100" height="100" />
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="img2">Image-2</label>
                            <input class="form-control" id="img2" name="img2" type="file">
                            <img src="{{ URL::to('/') }}/uploads/product/{{ $singledata->img2 }}" width="100" height="100" />
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="img3">Image-3</label>
                            <input class="form-control" id="img3" name="img3" type="file">
                            <img src="{{ URL::to('/') }}/uploads/product/{{ $singledata->img3 }}" width="100" height="100" />
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="videourl">Video-Url</label>
                            <input class="form-control" value="{{ $singledata->video_url }}" id="videourl" name="videourl" type="text">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Base-Price</label>
                            <input class="form-control" id="price" name="price" value="{{ $singledata->price }}" type="text">
                          </div>
                          
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Is-Active</label>
                            <div class="radio radio-primary">
                            <input id="radioinline1" type="radio" checked name="radio1" value="Yes" @if($singledata->isactive=="Yes") checked @endif>
                            <label class="mb-0" for="radioinline1">Yes</label>
                            <input id="radioinline2" type="radio" name="radio1" value="No" @if($singledata->isactive=="No") checked @endif>
                            <label class="mb-0" for="radioinline2">No</label>
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