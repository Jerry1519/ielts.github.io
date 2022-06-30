<?php

namespace App\Http\Controllers;
use App\Models\Test;
use App\Models\Speaking;
use App\Models\Answer;
use Session;
use Illuminate\Http\Request;

class EmployeeSpeakingController extends Controller
{
    public function viewspeakingtest($type)
    {   
        // dd(Session::get('empid'));
        
        $testdata = Test::select("*")->leftjoin("user","user.user_id","=","test.user_id")->leftjoin("employee","employee.emp_id","=","test.emp_id")->where("employee.emp_id",Session::get('empid'))->orwhere("status","Assigned")->where("type",$type)->get();
        // dd($testdata);
        return View('employee.speaking.speakingtest',compact('testdata'));

    }
    public  function viewspeakingdetail($id)
    {
        $singledata = Test::select("*")->leftjoin("user","user.user_id","=","test.user_id")->leftjoin("employee","employee.emp_id","=","test.emp_id")->where("test.test_id",$id)->first();
        $utestid = $singledata->u_test_id;
        //dd($utestid);
        $speakingque = Speaking::where("u_test_id",$utestid)->get();
        $speakingans = Answer::where("test_id",$id)->get();
        return View('employee.speaking.speakingtestdetails',compact('singledata','id','speakingque','speakingans'));
    }
    public  function storespeakingdata(Request $request)
    {
        $sql = Answer::where("test_id",$request->testid)->get();
        foreach($sql as $row)
        {
            $obj=Answer::where("answer_id",$row->answer_id)->first();
            $obj->remark = $request->input("txtans".$row->answer_id);
            $obj->save();
        }
        $type = $request->type;
        $obj=Test::where("test_id",$request->testid)->first();
        $obj->band=$request->txtband;
        $obj->status="complete";
        $obj->save();

        return redirect("/employee/speaking/speakingtest/".$type);
    }
}
