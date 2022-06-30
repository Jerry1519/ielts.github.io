<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Items;
use App\Models\Product;
use App\Models\Log;
use PDF;

use Mail;

class OrderController extends Controller
{
    public function viewporder()
    {
        $orderdata = Order::select("*")->where("status","pending")->leftjoin("user","user.user_id","=","orders.user_id")->leftjoin("city","city.city_id","=","orders.city_id")->get();
        return View('admin.order.vieworder',compact('orderdata'));
    }
    public function viewaorder()
    {
        $orderdata = Order::select("*")->where("status","approved")->leftjoin("user","user.user_id","=","orders.user_id")->leftjoin("city","city.city_id","=","orders.city_id")->get();
        return View('admin.order.vieworder',compact('orderdata'));
    }
    public function viewcomporder()
    {
        $orderdata = Order::select("*")->where("status","completed")->leftjoin("user","user.user_id","=","orders.user_id")->leftjoin("city","city.city_id","=","orders.city_id")->get();
        return View('admin.order.vieworder',compact('orderdata'));
    }
    public function viewcorder()
    {
        $orderdata = Order::select("*")->where("status","cancle")->leftjoin("user","user.user_id","=","orders.user_id")->leftjoin("city","city.city_id","=","orders.city_id")->get();
        return View('admin.order.vieworder',compact('orderdata'));
    }
    public function detailorder($id)
    {

        $singledata = Order::select("*")->where("order_id",$id)->leftjoin("user","user.user_id","=","orders.user_id")->leftjoin("city","city.city_id","=","orders.city_id")->first();
        return View('admin.order.detailorder',compact('singledata'));
    }
   
    public function status_change_approved($id)
    {
        
        
        $obj = Order::where("order_id",$id)->first();
        $obj->status = "approved";
        $obj->save();
        $obj = new Log();
        $obj->status = "approved";
        $obj->remarks = "Order status changed to approved";
        $obj->order_id = $id;
        $obj->save();
        return redirect('/admin/order/viewaorder');
       
    }
    public function status_change_completed($id)
    {
        $obj = Order::where("order_id",$id)->first();
        $obj->status = "completed";
        $obj->save();
        
        $obj = new Log();
        $obj->status = "completed";
        $obj->remarks = "Order status changed to completed";
        $obj->order_id = $id;
        $obj->save();
        return redirect('/admin/order/viewcomporder');
        
    }
    public function status_change_cancle($id)
    {
        $obj = Order::where("order_id",$id)->first();
        $obj->status = "cancle";
        $obj->save();
        
        $obj = new Log();
        $obj->status = "cancle";
        $obj->remarks = "Order status changed to cancle";
        $obj->order_id = $id;
        $obj->save();
        return redirect('/admin/order/viewcorder');
        
    }
    public function generatebill($id)
    {
        $orderdata = Order::select("*")->leftjoin("user","user.user_id","=","orders.user_id")->where("order_id",$id)->get();
        $itemdata = Items::select("*")->leftjoin("product","product.product_id","=","items.product_id")->where("order_id",$id)->get();
        $data = Order::all();
        return View('admin.order.generatebill',compact('orderdata','itemdata','data'));
        
    }

    public function generatePDF($id)
    {
        
        $orderdata = Order::select("*")->leftjoin("city","city.city_id","=","orders.city_id")->leftjoin("user","user.user_id","=","orders.user_id")->where("order_id",$id)->get();
        $paydata = Order::select("*")->leftjoin("city","city.city_id","=","orders.city_id")->leftjoin("user","user.user_id","=","orders.user_id")->where("order_id",$id)->first();
        $itemdata = Items::select("*")->leftjoin("product","product.product_id","=","items.product_id")->where("order_id",$id)->get();
       // return View('admin.order.gpdf',compact('orderdata','itemdata','data'));
       $odata = Order::select("*")->leftjoin("city","city.city_id","=","orders.city_id")->leftjoin("user","user.user_id","=","orders.user_id")->where("order_id",$id)->first();
        

       $emailid="";
       $emailid=$odata->email;
        $data = [
            'orderdata' => $orderdata,
            'paydata' => $paydata,
            'itemdata' => $itemdata,
            'emailid' => $emailid,
        ];
     
        //dd($emailid);
          
        $pdf = PDF::loadView('admin.order.gpdf', $data);
        try{
            Mail::send('admin.order.gpdf', $data, function($message)use($data,$pdf) {
            $message->to($data["emailid"], "Administrator")
            ->subject("Invoice")
            ->attachData($pdf->output(), "invoice.pdf");
            });
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
             $this->statusdesc  =   "Error sending mail";
             $this->statuscode  =   "0";

        }else{
            return redirect('/admin/order/viewcomporder')->with("message","Email Sent Successfully");
           
        }
       // return response()->json(compact('this'));
        
      //  return $pdf->download('itsolutionstuff.pdf');
    }
    
    
}
