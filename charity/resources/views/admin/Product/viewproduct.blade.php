@extends('admin.master.master')

@section("title")
View-Product
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
      $(document).on('click','.btn-delete',function(){
        var id = $(this).attr("data-id");
        $("#deleteid").val(id);
        var image1 = $(this).attr("data-image1");
        $("#deleteimage1").val(image1);
        var image2 = $(this).attr("data-image2");
        $("#deleteimage2").val(image2);
        var image3 = $(this).attr("data-image3");
        $("#deleteimage3").val(image3);
      });
      
    });
    </script>
    <!-- <script>
    $(document).ready(function(){
      $(".btn-delete").click(function(){
        var id = $(this).attr("data-id");
        $("#deleteid").val(id);
        var image1 = $(this).attr("data-image1");
        $("#deleteimage1").val(image1);
        var image2 = $(this).attr("data-image2");
        $("#deleteimage2").val(image2);
        var image3 = $(this).attr("data-image3");
        $("#deleteimage3").val(image3);
      });
    });
    </script> -->
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
                          <form method="post" action="/admin/product/deletepro">
                              @csrf
                            <input type="hidden" id="deleteid" name="deleteid"/>
                            <input type="hidden" id="deleteimage1" name="deleteimage1"/>
                            <input type="hidden" id="deleteimage2" name="deleteimage2"/>
                            <input type="hidden" id="deleteimage3" name="deleteimage3"/>
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
                  <h3>Manage Category</h3>
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage Product</li>
                    <li class="breadcrumb-item">View Product</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                    <li><a href="/admin/product/addproduct" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="plus"></i></a></li>
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
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>All Product</h5>
                  </div>
                  <div class="card-body">
                  @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message}}</p>
                        </div>
                        @endif
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <!-- <th>Product Description</th> -->
                            <th>Image-1</th>
                            <th>Image-2</th>
                            <th>Image-3</th>
                            <!-- <th>Video URL</th> -->
                            <th>Price</th>
                            <!-- <th>Is Active</th>
                            <th>sub-Category Name</th> -->
                            <th>Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($productdata as $row)
                          <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $row->p_name }}</td>
                            <!-- <td>{{ $row->description }}</td> -->
                            <td><a href="{{ URL::to('/') }}/uploads/product/{{ $row->img1 }}" target="_blank"><img src="{{ URL::to('/') }}/uploads/product/{{ $row->img1 }}" width="100" height="100" /></a></td>
                            <td><a href="{{ URL::to('/') }}/uploads/product/{{ $row->img2 }}" target="_blank"><img src="{{ URL::to('/') }}/uploads/product/{{ $row->img2 }}" width="100" height="100" /></a></td>
                            <td><a href="{{ URL::to('/') }}/uploads/product/{{ $row->img3 }}" target="_blank"><img src="{{ URL::to('/') }}/uploads/product/{{ $row->img3 }}" width="100" height="100" /></a></td>
                            <!-- <td>{{ $row->video_url }}</td> -->
                            <td>{{ $row->price }}</td>
                            <!-- <td>{{ $row->isactive }}</td>
                            <td>{{ $row->subcat_name }}</td> -->
                            <td>
                              <form action="/admin/product/deletepro" method="post">
                                @csrf
                              <div class="btn-group btn-group-square" role="group" aria-label="Basic example">
                                <a href="/admin/product/updateproduct/{{ $row->product_id }}"><button class="btn btn-success btn-sm" type="button">Edit</button></a>
                                <button data-id="{{ $row->product_id }}" data-image1="{{ $row->img1 }}" data-image2="{{ $row->img2 }}" data-image3="{{ $row->img3 }}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" class="btn btn-danger btn-sm btn-delete" type="button">Delete</button>
                                
                                <a href="/admin/product/detailproduct/{{ $row->product_id }}"><button class="btn btn-secondary btn-sm" type="button">View</button></a>
                              </div>
                              </form>
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