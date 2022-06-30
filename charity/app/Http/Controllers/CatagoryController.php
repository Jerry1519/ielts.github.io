<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CatagoryController extends Controller
{
    public function add()
    {
        return View('admin.catagory.addcatagory');
    }
    public function view()
    {
        $catdata = Category::all();
        return View('admin.catagory.viewcatagory',compact('catdata'));
    }
    public function update($id)
    {
        $singledata = Category::where("cat_id",$id)->first();
        return View('admin.catagory.updatecatagory',compact("singledata"));
       // return redirect('/admin/catagory/add')->with("message","Category Updated Successfully");
    }
    public function edit(Request $request)
    {
        $id=$request->updateid;
        $oldimage=$request->oldimage;

        if($request->has("txtcatimage"))
        {
            unlink(public_path('/uploads/category/').$oldimage);
            //abc.jpg
            $image = $request->txtcatimage;
            $ext = $image->extension();//jpg
            $filename = time().rand(1111,9999).".".$ext;//53615611425.jpg
            $image->move(public_path('/uploads/category/'),$filename);
        }
        else
        {
            $filename=$oldimage;
        }
        $catname = $request->txtcatname;
        $catimage=$filename;

        //insert
        $obj =  Category::where("cat_id",$id)->first();
        $obj->cat_name = $catname;
        $obj->cat_image=$catimage;
        $obj->save();

        return redirect('/admin/catagory/view')->with("message","Category Updated Successfully");
  
    }

    public function insert(Request $request)
    {
        $result = Category::select("*")->where("cat_name",$request->txtcatname)->get();
        if(count($result)<=0)
        {
           
        //upload
        //abc.jpg
        $image = $request->txtcatimage;
        $ext = $image->extension();//jpg
        $filename = time().rand(1111,9999).".".$ext;//53615611425.jpg
        $image->move(public_path('/uploads/category/'),$filename);


        $catname = $request->txtcatname;
        $catimage=$filename;

        //insert
        $obj = new Category();
        $obj->cat_name = $catname;
        $obj->cat_image=$catimage;
        $obj->save();

        return redirect('/admin/catagory/add')->with("message","Category Inserted Successfully");
 
        }
        else
        {
            return redirect('/admin/catagory/add')->with("message","Category Allready Exist!"); 
        }

        
    }
   public function delete(Request $request)
   {
       $id = $request->deleteid;
       $image = $request->deleteimage;

       unlink(public_path('/uploads/category/').$image);

       Category::where("cat_id",$id)->delete();
       return redirect('/admin/catagory/view')->with("message","Category Deleted Successfully");
   }
}
