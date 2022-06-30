<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
// use App\Models\Userm;

class CartController extends Controller
{
    public function viewcart()
    {
       // $cartdata = Cart::all();
        $cartdata = Cart::select("*")->leftjoin("user","user.user_id","=","cart.user_id")->leftjoin("product","product.product_id","=","cart.product_id")->get();
        return View('admin.cart.viewcart',compact('cartdata'));
    }
}
