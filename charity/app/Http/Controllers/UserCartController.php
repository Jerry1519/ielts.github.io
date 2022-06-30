<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class UserCartController extends Controller
{
    public function viewcart()
    {
        $singledata = Cart::select("*")->leftjoin("user","user.user_id","=","cart.user_id")->leftjoin("product","product.product_id","=","cart.product_id")->get();
        return View('clientside.usercart',compact('singledata'));
    }
    public function delete(Request $request)
    {
        $id = $request->deleteid;
        Cart::where("cart_id",$id)->delete();
        return redirect('/client/usercart')->with("message","Item Deleted Successfully");
    }
    public function cartupdateplus($id)
    {
        $cartdata = Cart::select("*")->where("cart_id",$id)->first();
        $qty = $cartdata->qty;
        $obj =  Cart::where("cart_id",$id)->first();
        $obj->qty = $qty+1;
        $obj->save();
        return redirect('/client/usercart');
        
    }
    public function cartupdateminus($id)
    {
        $cartdata = Cart::select("*")->where("cart_id",$id)->first();
        $qty = $cartdata->qty;
        $obj = Cart::where("cart_id",$id)->first();
        $obj->qty = $qty-1;
        $obj->save();
        return redirect('/client/usercart');

    }

}
