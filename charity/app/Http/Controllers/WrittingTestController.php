<?php

namespace App\Http\Controllers;
use App\Models\WrittingTest;
use Illuminate\Http\Request;

class WrittingTestController extends Controller
{
    public function addwrittingtest()
    {   
        return View('admin.writtingtest.addwrittingtest');
    }
    public function viewwrittingtest($type)
    {
        $writtingtestdata = WrittingTest::where("type",$type)->get();
        return View('admin.writtingtest.viewwrittingtest',compact('writtingtestdata'));
    }
    public function updatewrittingtest($id)
    {
        $writtingtestdata = WrittingTest::all();
        $singledata = WrittingTest::where("u_test_id",$id)->first();
        // $writtingtestdata = WrittingTest::where("type","Witting")->get();
        return View('admin.writtingtest.updatewrittingtest',compact("singledata","writtingtestdata"));
    }
    public function deletewrittingtest(Request $request)
    {
        $id = $request->deleteid;
        $image = $request->deleteimage;
        unlink(public_path('/uploads/writting/').$image);
        WrittingTest::where("u_test_id",$id)->delete();
        return redirect('/admin/writtingtest/viewwrittingtest')->with("message","Writting Deleted Successfully");
    }
    public function editwrittingtest(Request $request)
    {
        $id=$request->updateid;
        $oldimage=$request->oldimage;
       
        if($request->has("img"))
        {
            unlink(public_path('/uploads/writting/').$oldimage);
            $img = $request->img;
            $ext = $img->extension();
            $filename = time().rand(1111,9999).".".$ext;
            $img->move(public_path('/uploads/writting/'),$filename);
        }
        else
        {
            $filename=$oldimage;
        }
            $type = $request->type;
            $title = $request->u_title;
            $description = $request->description;
            $img = $filename;
            

            //insert
            $obj = Writtingtest::where("u_test_id",$id)->first();
            $obj->type=$type;
            $obj->u_title=$title;
            $obj->description = $description;
            $obj->img=$img;
            $obj->save();
            return redirect('admin/writtingtest/viewwrittingtest')->with("message","WrittingTest Updated!!");


            // $obj = WrittingTest::where("u_test_id",$id)->first();
            // $obj->type = $type;
            // $obj->u_title = $title;
            // $obj->description = $description;
            // $obj->img = $img;
            // $obj->save();
            // return redirect('admin/writtingtest/viewwrittingtest')->with("message","Writting Test Updated Successfully");
    }
    public function insertwrittingtest(Request $request)
    {

        $result = WrittingTest::select("*")->where("u_title",$request->title)->get();
        if(count($result)<=0)
        {
            if($request->has("img"))
            {
                $img = $request->img;
                $ext = $img->extension();
                $filename = time().rand(1111,9999).".".$ext;
                $img->move(public_path('/uploads/writting/'),$filename);
            }
            else
            {
                $img = null;
            }
            $type = $request->type;
            $u_title = $request->u_title;
            $description = $request->description;
            $img = $filename;
            //insert
            $obj = new WrittingTest();
            $obj->type = $type;
            $obj->u_title = $u_title;
            $obj->description = $description;
            $obj->img = $img;
            $obj->save();
            return redirect('admin/writtingtest/addwrittingtest')->with("message","Writting test Inserted Successfully");
        }
        else
        {
            return redirect('admin/writtingtest/addwrittingtest')->with("message","Writting test  Already Exist!");
        }

        
    }
}
