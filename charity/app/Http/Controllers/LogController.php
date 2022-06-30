<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\Order;

class LogController extends Controller
{
    public function addlog()
    {
        $orderdata = Order::all();
        return View('admin.log.addlog',compact('orderdata'));
    }
    public function deletelog(Request $request)
    {
        $id = $request->deleteid;
        Log::where("log_id",$id)->delete();
        return redirect('/admin/log/viewlog')->with("message","Log Deleted Successfully");
    }
    public function viewlog()
    {
        $logdata = Log::all();
        return View('admin.log.viewlog',compact('logdata'));
    }
    public function updatelog($id)
    {
        $singledata = Log::where("log_id",$id)->first();
        $orderdata = Order::all();
        return View('admin.log.updatelog',compact("singledata","orderdata"));
    }
    public function editlog(Request $request)
    {
        $id=$request->updateid;

        if($request->has("Status"))
        {
            $status = $request->Status;
        }
        else
        {
            $status = $request->Status;
            $order_id = $request->ordername;
            $remarks = $request->Remarks;
            $log_datetime = $request->logdatedime;
        }
            $status = $request->Status;
            $order_id = $request->ordername;
            $remarks = $request->Remarks;
            $log_datetime = $request->logdatedime;
            //insert
            $obj = Log::where("log_id",$id)->first();
            $obj->status = $status;
            $obj->remarks = $remarks;
            $obj->order_id = $order_id;
            $obj->log_datetime = $log_datetime;
            $obj->save();
            return redirect('admin/log/viewlog')->with("message","Log Updated Successfully");
    }
    public function insertlog(Request $request)
    {
        $result = Log::select("*")->where("order_id",$request->ordername)->get();
        if(count($result)<=0)
        {
            $status = $request->Status;
            $order_id = $request->ordername;
           
            $remarks = $request->Remarks;
            $log_datetime = $request->logdatedime;
            //insert
            $obj = new Log();
            $obj->status = $status;
            $obj->remarks = $remarks;
            $obj->order_id = $order_id;
            
            $obj->log_datetime = $log_datetime;
            $obj->save();
            return redirect('admin/log/addlog')->with("message","Log Inserted Successfully");
        }
        else
        {
            return redirect('admin/log/addlog')->with("message","Log Already Exist!");
        }

        
    }
}
