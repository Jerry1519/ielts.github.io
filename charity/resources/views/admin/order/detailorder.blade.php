@extends('admin.master.master')

@section("title")
Details-Order
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
                  <h3>Manage Order</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage Order</li>
                    <li class="breadcrumb-item">Details Order</li>
                  </ol>
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
                        <h5>Deails Order</h5>
                      </div>
                      <div class="card-body">
                      @if ($message = Session::get('message'))
                        <div class="alert alert-success dark" role="alert">
                          <p>{{ $message}}</p>
                        </div>
                        @endif
                        <!-- <form action="/admin/order/changeorder/{{ $singledata->order_id }}"  enctype="multipart/form-data"  method="post" >
                          @csrf -->
                        <table class="table">
                      
                          <tbody>
                            <tr>
                              <th scope="row">User Name</th>
                              <td>{{ $singledata->name }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Address</th>
                              <td>{{ $singledata->address }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Landmark</th>
                              <td>{{ $singledata->landmark }}</td>
                            </tr>
                            <tr>
                              <th scope="row">pincode</th>
                              <td>{{ $singledata->pincode }}</td>
                            </tr>
                            <tr>
                              <th scope="row">city</th>
                              <td>{{ $singledata->city_name }}</td>
                            </tr>
                            
                            <tr>
                              <th scope="row">Amount</th>
                              <td>{{ $singledata->amount }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Status</th>
                              <td>{{ $singledata->status }}</td>
                            </tr>
                            <tr>
                            <th scope="row">Order Date-Time</th>
                              <td>{{ $singledata->orderdatetime }}</td>
                            </tr>
                            <tr>
                            <th scope="row">Is Pay</th>
                              <td>{{ $singledata->ispay }}</td>
                            </tr>
                            <tr>
                            <th scope="row">Paymode</th>
                              <td>{{ $singledata->paymode }}</td>
                            </tr>
                            <tr>
                            <th scope="row">Transaction_No</th>
                              <td>{{ $singledata->transaction_no }}</td>
                            </tr>
                            <tr>
                            <th scope="row">Action</th>
                            @if($singledata->status == "pending")
                            <td><a href="/admin/order/changeorder/{{ $singledata->order_id }}" ><button class="btn btn-primary btn-sm" type="submit"> Aprrove</button></a>
                            <a href="/admin/order/viewporder" ><button class="btn btn-danger btn-sm"  type="button">Cancle</button></td></a>
                            @elseif($singledata->status == "approved")
                            <td><a href="/admin/order/changeordercom/{{ $singledata->order_id }}" ><button class="btn btn-primary btn-sm" type="submit"> complete</button></a>
                            <a href="/admin/order/viewaorder" ><button class="btn btn-danger btn-sm"  type="button">Cancle</button></td></a>
                            @else
                            <td><a href="/admin/order/cancleorder/{{ $singledata->order_id }}" ><button class="btn btn-primary btn-sm" type="submit">Cancle</button></a>
                            <a href="/admin/order/viewcomporder" ><button class="btn btn-danger btn-sm"  type="button">Back</button></td></a>
                            @endif
                            

                            </tr>
                            
                          </tbody>
                        </table>
                     <!-- </form> -->
                        
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