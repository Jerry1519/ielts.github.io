@extends('clientside.usermaster')

@section("title")
Checkout
@endsection


@section("css")
<!-- Page Title -->
<title>@yield("title")</title>
<!-- Stylesheet -->
 
<link href="{{ URL::to('/') }}/user/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{{ URL::to('/') }}/user/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="{{ URL::to('/') }}/user/css/animate.css" rel="stylesheet" type="text/css">
<link href="{{ URL::to('/') }}/user/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ URL::to('/') }}/user/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ URL::to('/') }}/user/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ URL::to('/') }}/user/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ URL::to('/') }}/user/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ URL::to('/') }}/user/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ URL::to('/') }}/user/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="{{ URL::to('/') }}/user/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="{{ URL::to('/') }}/user/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ URL::to('/') }}/user/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">
@endsection

@section("js")
<!-- external javascripts -->
<script src="{{ URL::to('/') }}/user/js/jquery-2.2.4.min.js"></script>
<script src="{{ URL::to('/') }}/user/js/jquery-ui.min.js"></script>
<script src="{{ URL::to('/') }}/user/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ URL::to('/') }}/user/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ URL::to('/') }}/user/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ URL::to('/') }}/user/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ URL::to('/') }}/user/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/user/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
  $(document).ready(function(){
    $.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
}); 
    $("#checkout-form").submit(function(e){
     

      var selectedVal="";
      var selected = $("input[type='radio'][name='optionsRadios']:checked");
      if (selected.length > 0) {
          selectedVal = selected.val();
      }
      if(selectedVal=="COD")
      {
        $("#checkout-form").attr("method","POST");
        $("#checkout-form").attr("action","/client/checkout2");
        $("#btnorder").trigger("click")
      }
      else
      {
            e.preventDefault();
            var totalAmount = $("#totalpay").val();
            var product_id =  "1";
            var options = {
            "key": "rzp_test_wLBpSsZqZwWIXn",
            "amount": (totalAmount*100), // 2000 paise = INR 20
            "name": "Jerry's Payment",
            "description": "Payment",
            "handler": function (response){
              window.location.href = "/client/userorder/insertuserorder?address="+$("#address").val()+"&landmark="+$("#landmark").val()+"&city="+$("#city").val()+"&pincode="+$("#pincode").val()+"&price="+$("#totalpay").val()+"&type=online&paymentid="+response.razorpay_payment_id;
            },
            "prefill": {
            "contact": $("#cno").val(),//'9904869939'
            "email":   $("#email").val()//'tutsmake@gmail.com',
            },
            "theme": {
            "color": "#528FF0"
            }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
      }



     
    });
  });
  </script>

@endsection
 
@section("main")
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ URL::to('/') }}/user/images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Shop Checkout</h3>
              <ul class="list-inline text-white">
                <li>Home /</li>
                <li><span class="text-gray">Shop Checkout</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="section-content">
          <div class="row mt-30">
            <form id="checkout-form" action="/client/userorder/insertusercodorder" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" id="email" name="email" value="{{ Session::get('email') }}" />
              <input type="hidden" id="cno" name="cno" value="{{ Session::get('cno') }}" />
              <div class="col-md-6">
                <div class="billing-details">
                  <h3 class="mb-30">Billing Details</h3>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="checkuot-form-fname">Name</label>
                      <input id="uname" name="uname" type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-12">
                      
                      <div class="form-group">
                        <label for="checkuot-form-address">Address</label>
                        <input id="address" name="address" type="text" class="form-control" placeholder="Street address">
                      </div>
                      
                    </div>
                    <div class="form-group col-md-6">
                      <label for="checkuot-form-city">Landmark</label>
                      <input id="landmark" name="landmark" type="text" class="form-control" placeholder="Landmark">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="checkuot-form-city">Select City</label>
                      <select class="form-control" value="" id="city" name="city">
                                <option value="">Please Select City</option>
                                @foreach($citydata as $row)
                                  <option value="{{ $row->city_id }}">{{ $row->city_name }}</option>
                                @endforeach
                      </select>
                    </div>

                    
                    <div class="form-group col-md-6">
                      <label for="checkuot-form-zip">Zip/Postal Code</label>
                      <input id="pincode" type="text" name="pincode" class="form-control" placeholder="Zip/Postal Code">
                    </div>
                    
                  </div>
                </div>
              </div>
              
              <div class="col-md-12">
                <h3>Your order</h3>
                <table class="table table-striped table-bordered tbl-shopping-cart">
                  <thead>
                    <tr>
                      <th>Photo</th>
                      <th>Product Name</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $total=0; ?>
                  @foreach($singledata as $row)
                  <?php $total=$total + $row["qty"] * $row["price"]; ?>
                    <tr>
                    <td class="product-thumbnail"><a href="#"><img alt="member" src="{{ URL::to('/') }}/uploads/product/{{ $row->img1 }}"></a></td>
                    <td class="product-name"><a href="#">{{ $row->p_name }}</a> x {{ $row->qty }} </td>
                    <td class="product-subtotal" name="price"><span class="amount" ><span>&#x20B9</span>{{$row->price * $row->qty }}</span></td>
                    </tr>
                    @endforeach
                   
                    
                    <tr>
                      <td>Cart Subtotal</td>
                      <td>&nbsp;</td>
                      <td><span>&#x20B9</span>{{$row->price * $row->qty }}</span></td>
                    </tr>
                    
                    <tr>
                      <td>Order Total</td>
                      <td>&nbsp;</td>
                      <input type="hidden" id="totalpay" name="totalpay" value="<?php echo $total; ?>"/>
                      <td><span>&#x20B9</span><?php echo $total; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-12">
                <h3>Payment Information</h3>
                <div class="payment-method">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" value="Online" checked>
                      PayPal Payment</label>
                    <p>Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" value="COD" checked>
                       Cash On Delivary</label>
                    <p>Please give your Money to Delivary Boy when your Order is arrived.</p>
                  </div>
                  
                </div>
              </div>
              <div class="col-md-12">
                <div class="text-center"> <button type="submit" id="btnorder">Place Order</button> </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  <!-- end main-content -->

  </div>

@endsection
