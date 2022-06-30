<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writting;
use App\Models\WrittingTest;

class WrittingController extends Controller
{
    public function addwritting()
    {
        $writtingtestdata = WrittingTest::where("type","Writting")->get();
        return View('admin.writting.addwritting',compact('writtingtestdata'));
    }
    public function viewwritting()
    {
        $writtingdata = Writting::select("*")->leftjoin("writting_test","writting_test.u_test_id","=","writting.u_test_id")->get();
        return View('admin.writting.viewwritting',compact('writtingdata'));
    }
    public function detailwriting($id)
    {
        $singledata = Writting::select("*")->leftjoin("writting_test","writting_test.u_test_id","=","writting.u_test_id")->where("writting_id",$id)->first();
        return View('admin.writting.detailwriting',compact("singledata"));
    }
    public function updatewritting($id)
    {
        $singledata = Writting::where("writting_id",$id)->first();
        $writtingtestdata = WrittingTest::all();
        return View('admin.writting.updatewritting',compact("singledata","writtingtestdata"));
    }
    public function deletewritting(Request $request)
    {
       
        $id = $request->deleteid;
        $image = $request->deleteimage;
        unlink(public_path('/uploads/writtingquestion/').$image);
        Writting::where("writting_id",$id)->delete();
        return redirect('/admin/writting/viewwritting')->with("message","Writting Deleted Successfully");
    }
    public function editwritting(Request $request)
    {
        $id=$request->updateid;
        $oldimage=$request->oldimage;

        if($request->has("image"))
        {
            unlink(public_path('/uploads/writtingquestion/').$oldimage);
            $img = $request->img;
            $ext = $img->extension();
            $filename = time().rand(1111,9999).".".$ext;
            $img->move(public_path('/uploads/writtingquestion/'),$filename);
        }
        else
        {
            $filename=$oldimage;
        }
            $name = $request->name;
            $time = $request->time;
            $description = $request->desc;
            $type = $request->radio1;
            $u_test_id = $request->title;
            $img = $filename;
            //insert
            $obj = Writting::where("writting_id",$id)->first();
            $obj->topic_name = $name;
            $obj->time = $time;
            $obj->description = $description;
            $obj->type = $type;
            $obj->u_test_id = $u_test_id;
            $obj->image = $img;
            $obj->save();
            return redirect('admin/writting/viewwritting')->with("message","Writting Updated Successfully");
    }
    public function insertwritting(Request $request)
    {

        $result = Writting::select("*")->where("topic_name",$request->name)->where("type",$request->type)->get();
        if(count($result)<=0)
        {
            $image = $request->img;
            $ext = $image->extension();
            $filename = time().rand(1111,9999).".".$ext;
            $image->move(public_path('/uploads/writtingquestion/'),$filename);
            $name = $request->name;
            $time = $request->time;
            $description = $request->desc;
            $type = $request->radio1;
            $u_test_id = $request->title;
            $image = $filename;
            //insert
            $obj = new Writting();
            $obj->topic_name = $name;
            $obj->time = $time;
            $obj->description = $description;
            $obj->type = $type;
            $obj->u_test_id = $u_test_id;
            $obj->image = $image;
            $obj->save();
            return redirect('admin/writting/addwritting')->with("message","Writting Inserted Successfully");
        }
        else
        {
            return redirect('admin/writting/addwritting')->with("message","Writting Name Already Exist!");
        }

        
    }
}
