@extends('admin.master.master')

@section("title")
invoice-Order
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
                    <li class="breadcrumb-item">View Order</li>
                  </ol>
                </div>
                
              </div>
            </div>
          </div>
          <form>
          <div class="container invoice" >
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-body">                            
                      <div>
                        <div>
                          <div class="row invo-header">
                            <div class="col-sm-6">
                              <div class="media">
                                <div class="media-left"><img class="media-object img-60" src="{{ URL::to('/') }}/assets/images/logo/logo123.png" alt=""></div>
                                <div class="media-body m-l-20">
                                  <h4> </h4>
                                  <h4> </h4>
                                  <p>Studyforest@gmail.com<br><span class="digits">289-335-6503</span></p>
                                </div>
                              </div>
                              <!-- End Info-->
                            </div>
                            <div class="col-sm-6">
                              <div class="text-md-end text-xs-center">
                                <h3>Invoice  @foreach($orderdata as $row)  <span class="digits counter">{{ $row->order_id }}</span></h3>
                                <p>Issued: <span class="digits">{{ $row->orderdatetime }} </span> @endforeach<br>   
                              </div>
                              <!-- End Title  -->
                            </div>
                          </div>
                        </div>
                        <!-- End InvoiceTop-->
                        <div class="row invo-profile">
                          <div class="col-xl-4">
                            <div class="media">
                              <div class="media-left"><img class="media-object rounded-circle img-60" src="../assets/images/user/1.jpg" alt=""></div>
                              <div class="media-body m-l-20">
                              @foreach($orderdata as $row)
                                <h4 class="media-heading f-w-600">{{ $row->name }}</h4>
                                <span class="digits">{{ $row->address }}</span>
                                @endforeach
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-8">
                            <div class="text-xl-end" id="project">
                              <h6>Sold By: StudyForest Private Limited,</h6>
                              <p> Ship-from Address: Sy no 18/2,18/3, Taverekere venkatapura,
                                  hosakote taluk, nadagudi hobli,bangalore 562122, Bangalore, KARNATAKA, India - 562122, IN-KA</p>
                              <p>  GSTIN - 29AAICA4872D1ZK</p>
                            </div>
                          </div>
                        </div>
                        <!-- End Invoice Mid-->
                        <div>
                          <div class="table-responsive invoice-table" id="table">
                            <table class="table table-bordered table-striped">
                              <tbody>
                                <tr>
                                  <td class="item">
                                    <h6 >Item Description</h6>
                                  </td>
                                  <td >
                                    <h6 class="p-2 mb-0">QTY</h6>
                                  </td>
                                  <td>
                                    <h6 class="p-2 mb-0">Gross amount ₹</h6>
                                  </td>
                                  <td>
                                    <h6 class="p-2 mb-0">Taxable value ₹</h6>
                                  </td>
                                  <td >
                                    <h6 class="p-2 mb-0">IGST</h6>
                                  </td>
                                  <td class="total">
                                    <h6 class="p-2 mb-0">Total ₹</h6>
                                  </td>
                                </tr>
                                <?php $total=0; ?>
                                @foreach($itemdata as $row)
                                  <?php $total=$total + $row->qty * $row->price +  ($row->price * 5 / 100) ; ?>
                                 <tr>
                                  <td>
                                    <label>{{ $row->p_name }}</label>
                                    <p class="m-0"></p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">{{ $row->qty }}</p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">{{ $row->price }}</p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">{{  $row->qty * $row->price - ($row->price * 5 / 100) }}</p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">{{ ( $row->qty * $row->price * 5 / 100) }}</p>  
                                  </td>
                                  <td>
                                    <p class="itemtext digits">{{  $row->qty * $row->price +  ($row->price * 5 / 100)  }}</p>
                                  </td>
                                 
                                </tr>
                                @endforeach                      
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td class="total"> <h6 class="mb-0 p-2">Total</h6>
                                  </td>
                                  
                                  <td class="payment digits">
                                    <h6 class="mb-0 p-2"><?php echo $total; ?></h6>                                 
                                  </td>
                                
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <!-- End Table-->
                          <div class="row mt-3">
                            <div class="col-md-8">
                              <div>
                              <p>Returns Policy: At studyforest we try to deliver perfectly each and every time. But in the off-chance that you need to return the item, please do so with the original Brand box/price 
tag, original packing and invoice without which it will be really difficult for us to act on your request.</p> <p>Please help us in helping you. Terms and conditions apply.
The goods sold as are intended for end user consumption and not for re-sale.</p>
                              </div>
                            </div>
                           
                          </div>
                        </div>
                        <!-- End InvoiceBot-->
                      </div>
                      <div class="col-sm-12 text-center mt-3">
                        <a href="/admin/generatePDF/{{ $row->order_id }}" ><button class="btn btn btn-primary me-2" type="button" onclick="myFunction()">generate invoice</button> </a>
                        <button class="btn btn-secondary" type="button">Cancel</button>
                        
                      </div>
                      <!-- End Invoice-->
                      <!-- End Invoice Holder-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid Ends-->  </div>
</form>
@endsection