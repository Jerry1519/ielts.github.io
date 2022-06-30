<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speaking;
use App\Models\WrittingTest;

class SpeakingController extends Controller
{
    public function viewspeaking()
    {
        $speakingdata = Speaking::select("*")->leftjoin("writting_test","writting_test.u_test_id","=","speaking.u_test_id")->where("type","Speaking")->get();
        return View('admin.speaking.viewspeaking',compact('speakingdata'));
    }
    public function deletespeaking(Request $request)
    {
        $id = $request->deleteid;
        Speaking::where("que_id",$id)->delete();
        return redirect('/admin/speaking/viewspeaking')->with("message","Speaking Deleted Successfully");
    }
    public function addspeaking()
    {
        $speakingtestdata = WrittingTest::all();
        return View('admin.speaking.addspeaking',compact('speakingtestdata'));
    }
    public function updatespeaking($id)
    {
        $singledata = Speaking::where("que_id",$id)->first();
        $speakingtestdata = WrittingTest::all();
        return View('admin.speaking.updatespeaking',compact("singledata","speakingtestdata"));
    }
    public function editspeaking(Request $request)
    {
        $id=$request->updateid;

        if($request->has("question"))
        {
            $que = $request->question;
        }
        else
        {
            $que = $request->question;
            $title = $request->title;
            $remarks = $request->remarks;
            $section = $request->section;
            $time = $request->time;
            $isactive = $request->radio1;
        }
            $que = $request->question;
            $title = $request->title;
            $remarks = $request->remarks;
            $section = $request->section;
            $time = $request->time;
            $isactive = $request->radio1;
            //insert
            $obj = Speaking::where("que_id",$id)->first();
            $obj->question = $que;
            $obj->title = $title;
            $obj->remarks = $remarks;
            $obj->section = $section;
            $obj->time = $time;
            $obj->isactive = $isactive;
            $obj->save();
            return redirect('admin/speaking/viewspeaking')->with("message","Speaking Updated Successfully");
    }
    public function insertspeaking(Request $request)
    {

        $result = Speaking::select("*")->where("question",$request->question)->get();
        if(count($result)<=0)
        {
            $que = $request->question;
            $u_test_id = $request->title;
            $remarks = $request->remarks;
            $section = $request->section;
            $time = $request->time;
            $isactive = $request->radio1;
            //insert
            $obj = new Speaking();
            $obj->question = $que;
            $obj->u_test_id = $u_test_id;
            $obj->remarks = $remarks;
            $obj->section = $section;
            $obj->time = $time;
            $obj->isactive = $isactive;
            $obj->save();
            return redirect('admin/speaking/addspeaking')->with("message","Speaking Inserted Successfully");
        }
        else
        {
            return redirect('admin/speaking/addspeaking')->with("message","Question Already Exist!");
        }
        
    }
}
