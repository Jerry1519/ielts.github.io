<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
class SubCatagoryController extends Controller
{
    public function subadd()
    {
        $catdata = Category::all();
        return View('admin.subcatagory.addsubcatagory',compact('catdata'));
    }
    public function subview()
    {
        $subcatdata = SubCategory::select("*")->leftjoin("category","category.cat_id","=","subcategory.cat_id")->get();
        return View('admin.subcatagory.viewsubcatagory',compact('subcatdata'));
    }
    public function subupdate($id)
    {
        $singledata = SubCategory::where("subcat_id",$id)->first();
        $catdata = Category::all();
        return View('admin.subcatagory.updatesubcatagory',compact("singledata","catdata"));
    }
    public function edit(Request $request)
    {
        $id=$request->updateid;

        if($request->has("txtsubcatname"))
        {
            $catid=$request->categoryname;
        }
        else
        {
            $subcatname = $request->txtsubcatname;
            $subcatimg = "abc.jpg";
            $catid= $request->categoryname;
        }
        $subcatname = $request->txtsubcatname;
        $subcatimg = "abc.jpg";
        $catid= $request->categoryname;
        //insert
        $obj =  SubCategory::where("subcat_id",$id)->first();
        $obj->subcat_name = $subcatname; 
        $obj->cat_id = $catid;
        $obj->save();
        return redirect('admin/subcatagory/subview')->with("message","SubCategory Updated Successfully");     

    }
    
  
    public function subinsert(Request $request)
    {
        $result = SubCategory::select("*")->where("subcat_name",$request->txtsubcatname)->get();
        if(count($result)<=0)
        {
            $subcatname = $request->txtsubcatname;
            $subcatimg = "abc.jpg";
            $catid= $request->categoryname;
            //insert
            $obj = new SubCategory();
            $obj->subcat_name = $subcatname; 
            $obj->cat_id = $catid;
            $obj->save();
            return redirect('admin/subcatagory/subadd')->with("message","SubCategory Inserted Successfully");
    
        }
        else
        {
            return redirect('admin/subcatagory/subadd')->with("message","SubCategory Already Exist!");
        }

       
    }
    public function subdelete(Request $request)
    {
        $id = $request->deleteid;
        SubCategory::where("subcat_id",$id)->delete();
        return redirect('admin/subcatagory/subview')->with("message","Subcategory Deleted Successfully");
        
    }
}
