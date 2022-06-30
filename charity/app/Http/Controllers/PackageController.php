<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function addpackage()
    {
        return View('admin.package.addpackage');
    }
    public function deletepackage(Request $request)
    {
        $id = $request->deleteid;
        Package::where("pkg_id",$id)->delete();
        return redirect('admin/package/viewpackage')->with("message","Package Deleted Successfully");
    }
    public function viewpackage()
    {
        $pkgdata = Package::all();
        return View('admin.package.viewpackage',compact('pkgdata'));
    }
    public function updatepackage($id)
    {
        $singledata = Package::where("pkg_id",$id)->first();
        return View('admin.package.updatepackage',compact("singledata"));
    }
    public function detailpackage($id)
    {
        $singledata = Package::where("pkg_id",$id)->first();
        return View('admin.package.detailpkg',compact("singledata"));
    }
    public function editpackage(Request $request)
    {
        $id=$request->updateid;

        if($request->has("pkgname"))
        {
            $pkgname = $request->pkgname;
        }
        else
        {
            $pkgname = $request->pkgname;
            $pkgdesc = $request->pkgdesc;
            $spkdesc = $request->spkdesc;
            $wrtdesc = $request->wrtdesc;
            $lisdesc = $request->lisdesc;
            $reddesc = $request->reddesc;
            $price = $request->price;
            $days = $request->days;
        }
        $pkgname = $request->pkgname;
        $pkgdesc = $request->pkgdesc;
        $spkdesc = $request->spkdesc;
        $wrtdesc = $request->wrtdesc;
        $lisdesc = $request->lisdesc;
        $reddesc = $request->reddesc;
        $price = $request->price;
        $days = $request->days;
        //insert
        $obj = Package::where("pkg_id",$id)->first();
        $obj->pkg_name = $pkgname;
        $obj->pkg_des = $pkgdesc;
        $obj->speaking_des = $spkdesc;
        $obj->reading_des = $reddesc;
        $obj->writting_des = $wrtdesc;
        $obj->listening_des = $lisdesc;
        $obj->price = $price;
        $obj->days = $days;
        $obj->save();
        return redirect('admin/package/viewpackage')->with("message","Package Updated Successfully");

    }
    public function insertpackage(Request $request)
    {
        $result = Package::select("*")->where("pkg_name",$request->pkgname)->get();
        if(count($result)<=0)
        {
            $pkgname = $request->pkgname;
            $pkgdesc = $request->pkgdesc;
            $spkdesc = $request->spkdesc;
            $wrtdesc = $request->wrtdesc;
            $lisdesc = $request->lisdesc;
            $reddesc = $request->reddesc;
            $price = $request->price;
            $days = $request->days;
            //insert
            $obj = new Package();
            $obj->pkg_name = $pkgname;
            $obj->pkg_des = $pkgdesc;
            $obj->speaking_des = $spkdesc;
            $obj->reading_des = $reddesc;
            $obj->writting_des = $wrtdesc;
            $obj->listening_des = $lisdesc;
            $obj->price = $price;
            $obj->days = $days;
            $obj->save();
            return redirect('admin/package/addpackage')->with("message","Package Inserted Successfully");

        }
        else
        {
            return redirect('admin/package/addpackage')->with("message","Package Already Exist!");
        }


        
    }
}
