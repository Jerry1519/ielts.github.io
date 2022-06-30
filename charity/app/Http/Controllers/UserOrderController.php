<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Log;
use App\Models\Items;
use Session;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    public function vieworder()
    {
        $orderdata = Order::select("*")->leftjoin("user","user.user_id","=","orders.user_id")->where("orders.user_id",session::get("id"))->get();
        return View('clientside.myorder',compact('orderdata'));
    }
    public function vieworderdetail($id)
    {
        $singledata = Order::select("*")->leftjoin("user","user.user_id","=","orders.user_id")->leftjoin("city","city.city_id","=","orders.city_id")->where("orders.order_id",$id)->first();
        $logdata = Log::select("*")->leftjoin("orders","orders.order_id","=","log.order_id")->where("log.order_id",$id)->get();
        $itemdata = Items::select("*")->leftjoin("orders","orders.order_id","=","items.order_id")->leftjoin("product","product.product_id","=","items.product_id")->where("items.order_id",$id)->get();
        return View('clientside.userorderdetails',compact("singledata","logdata","itemdata"));
    }
  
}
