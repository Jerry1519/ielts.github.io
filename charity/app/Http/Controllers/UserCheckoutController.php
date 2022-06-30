<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\City;
use App\Models\Order;

use App\Models\Items;
use Session;
use Illuminate\Http\Request;

class UserCheckoutController extends Controller
{
    public function viewcheckout()
    {
        $singledata = Cart::select("*")->leftjoin("user","user.user_id","=","cart.user_id")->leftjoin("product","product.product_id","=","cart.product_id")->get();
        $citydata = City::all();
        return View('clientside.checkout',compact('singledata','citydata'));
    
    }
    public function insertorder(Request $request)
    {
        $singledata = Cart::select("*")->leftjoin("user","user.user_id","=","cart.user_id")->leftjoin("product","product.product_id","=","cart.product_id")->first();
        $id = Session::get("id");
        // $username = $request->uname;
        $address = $request->address;
        $landmark = $request->landmark;
        $city = $request->city;
        $pincode = $request->pincode;
        $amount = $request->price;
        $status = "pending";
        $ispay = "yes";
        $orderdateandtime = date('Y-m-d H:i:s');
        $trno = $request->paymentid;
        $paymode = $request->type;

        $obj = new Order();
        $obj->user_id = $id; 
        $obj->address = $address;
        $obj->landmark = $landmark;
        $obj->amount = $amount;
        $obj->pincode = $pincode;
        $obj->city_id = $city;
        $obj->status = $status;
        $obj->orderdatetime = $orderdateandtime;
        $obj->ispay = $ispay;
        $obj->paymode = $paymode;
        $obj->transaction_no = $trno;
        $obj->save();

        $oid=$obj->order_id;

        $userid=Session::get("id");

        $cartdata = Cart::select("*")->leftjoin("user","user.user_id","=","cart.user_id")->leftjoin("product","product.product_id","=","cart.product_id")->where('cart.user_id',$userid)->get();

        foreach($cartdata as $row)
        {
            $i = new Items;
            $i->order_id=$oid;
            $i->qty=$row->qty;
            $i->price=$row->price;
            $i->product_id=$row->product_id;
            $i->save();
        }

        Cart::select("*")->where('cart.user_id',$userid)->delete();


        return redirect('/client/thankyou');

    }
    public function viewcheckout2(Request $request)
    {
        $singledata = Cart::select("*")->leftjoin("user","user.user_id","=","cart.user_id")->leftjoin("product","product.product_id","=","cart.product_id")->first();
        $id = Session::get("id");
        // $username = $request->uname;
        $address = $request->address;
        $landmark = $request->landmark;
        $city = $request->city;
        $pincode = $request->pincode;
        $amount = $request->totalpay;
        $status = "pending";
        $ispay = "yes";
        $orderdateandtime = date('Y-m-d H:i:s');
        $trno = $request->paymentid;
        $paymode = "COD";

        $obj = new Order();
        $obj->user_id = $id; 
        $obj->address = $address;
        $obj->landmark = $landmark;
        $obj->amount = $amount;
        $obj->pincode = $pincode;
        $obj->city_id = $city;
        $obj->status = $status;
        $obj->orderdatetime = $orderdateandtime;
        $obj->ispay = $ispay;
        $obj->paymode = $paymode;
       
        $obj->save();

        $oid=$obj->order_id;

        $userid=Session::get("id");

        $cartdata = Cart::select("*")->leftjoin("user","user.user_id","=","cart.user_id")->leftjoin("product","product.product_id","=","cart.product_id")->where('cart.user_id',$userid)->get();

        foreach($cartdata as $row)
        {
            $i = new Items;
            $i->order_id=$oid;
            $i->qty=$row->qty;
            $i->price=$row->price;
            $i->product_id=$row->product_id;
            $i->save();
        }

        Cart::select("*")->where('cart.user_id',$userid)->delete();


        return redirect('/client/thankyou');


    }
    public function thankyou()
    {
        
        return View('clientside.thankyoumess');
    }
}
