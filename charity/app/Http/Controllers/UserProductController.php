<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function viewproduct()
    {
        $productdata = Product::all();
        return View('clientside.productlist',compact('productdata'));
    }
   public function productdetails($id)
   {
    
    $productdata = Product::select("*")->leftjoin("subcategory","subcategory.subcat_id","=","product.subcat_id")->where("product_id",$id)->first();
      // $productdata = Product::select("*")->leftjoin("subcategory","subcategory.subcat_id","=","product.subcat_id")->first();
       return View('clientside.productdetails',compact('productdata'));
   }
   
   public function insertproduct(Request $request)
   {
        if($request->session()->has('id'))
        {
            $userid = $request->session()->get('id');
        }
        else
        {
            echo 'No data in the session';
        }



        $productid = $request->productid;
        $quantity = $request->quantity;
        $price = $request->amount;
        
       // dd(Session::get("id"));

        //
       
        $sql = Cart::select("*")->where("user_id",Session::get("id"))->where("product_id",$productid)->get();
        if(count($sql)>0)
        {
           
            $obj = Cart::select("*")->where("user_id",Session::get("id"))->where("product_id",$productid)->first();
            $obj->qty = $quantity + $obj->qty;
            $obj->save();
            return redirect("/client/viewproduct");
            
        }
        else
        {
           
            $obj = new Cart();
            $obj->product_id = $productid;
            $obj->qty = $quantity;
            $obj->user_id = $userid;
            $obj->price = $price;
            $obj->save();
            return redirect('client/viewproduct');
        }


        
        //insert
        $obj = new Cart();
        $obj->product_id = $productid;
        $obj->qty = $quantity;
        $obj->user_id = $userid;
        $obj->price = $price;
        $obj->save();
        return redirect('client/viewproduct');
    }
}
