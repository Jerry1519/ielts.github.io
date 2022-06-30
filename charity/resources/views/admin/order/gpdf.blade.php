<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabcart</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">STUDYFOREST</h1>
                        <p class="text-white">Studyforest</p>
                        <p class="text-white">StudyForest@gmail.com</p>
                        <p class="text-white">+91 999 888 7777</p>
                </div>
                
               
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    @foreach($orderdata as $row)
                    <h2 class="heading">Invoice No: {{ $row->order_id }}</h2>
                    <p class="sub-heading">Transaction No. {{ $row->transaction_no	 }}</p>
                    <p class="sub-heading">Order Date: {{ $row->orderdatetime }} </p>
                    @endforeach
                    @foreach($orderdata as $row)
                    <p class="sub-heading">Email Address: {{ $row->email }} </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name: {{ $row->name }} </p>
                    <p class="sub-heading">Address: {{ $row->address }}  </p>
                    <p class="sub-heading">Phone Number: {{ $row->contact }} </p>
                    <p class="sub-heading">City, Pincode:  {{ $row->city_name }}   , {{ $row->pincode }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Grandtotal</th>
                    </tr>
                </thead>
                <?php $total=0; ?>
                <?php $IGST=0; ?>
                @foreach($itemdata as $row)
                <?php $total=$total + $row->qty * $row->price  ; ?>
                <?php  $IGST=$IGST +  $row->qty * $row->price * 5 / 100;  ?>
                <tbody>
                    <tr>
                        <td>{{ $row->p_name }}</td>
                        <td>{{ $row->price }}</td>
                        <td>{{ $row->qty }}</td>
                        <td>{{  $row->qty * $row->price }} </td>
                    @endforeach
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td><?php echo $total; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">IGST</td>
                        <td> <?php echo $IGST; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td><?php echo $total +  $IGST ; ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <div class="row">
                @if($paydata->paymode == "online")
                <h3 class="heading">Payment Status: Paid</h3>
                @else
                <h3 class="heading">Payment Status: Unpaid</h3>
                @endif
        </div>
            <!--  -->
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2021 - Studyforest. All rights reserved. 
                <a href="https://www.Studyforest.com/" class="float-right">www.studyforest.com</a>
            </p>
        </div>      
    </div>      

</body>
</html>