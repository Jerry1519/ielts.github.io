<?php

namespace App\Http\Controllers;
use App\Models\Package;
use App\Models\UserPackage;
use Session;
use Illuminate\Http\Request;

class ClientPackageController extends Controller
{
    public function viewpackage()
    {
        $pkgdata = Package::all();
        return View('clientside.userpackage',compact('pkgdata'));
    }
    public function viewpackagedetail($id)
    {
        $pkgdata = Package::select("*")->where("pkg_id",$id)->first();
        return View('clientside.packagedetails',compact('pkgdata'));
    }
    public function insertdata(Request $request)
    {
        $pkgid = $request->pkgid;
        $totalpay = $request->totalpay;
        $userid = $request->userid;
        $pkgdays = $request->pkgdays;
        $startdate = date('Y-m-d');
        $enddate =  date('Y-m-d', strtotime($startdate. ' + '.$pkgdays.' days'));
        $bookdatetime = date('Y-m-d H:i:s');
        $ispay = "yes";
        $trno = $request->paymentid;

        $obj = new UserPackage();
        $obj->user_id = $userid;
        $obj->pkg_id=$pkgid;
        $obj->start_date=$startdate;
        $obj->end_date=$enddate;
        $obj->price=$totalpay;
        $obj->booking_datetime=$bookdatetime;
        $obj->ispay=$ispay;  
        $obj->transaction_no=$trno;
        $obj->save();  
        return redirect('/client/thankyou');
    }
    public function thankyou()
    {
        
        return View('clientside.thankyoumess');
    }
}
