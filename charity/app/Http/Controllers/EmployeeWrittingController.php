<?php

namespace App\Http\Controllers;
use App\Models\Test;
use App\Models\WrittingAns;
use Illuminate\Http\Request;
use Session;

class EmployeeWrittingController extends Controller
{
    public function storwritingdata(Request $request)
    {
        $type = $request->type;
        //dd($type);
        $obj = WrittingAns::where("w_ans_id",$request->tans1)->first();
        $obj->employee_comment = $request->input("txtans".$request->tans1);
        $obj->save();

        
        $obj = WrittingAns::where("w_ans_id",$request->tans2)->first();
        $obj->employee_comment = $request->input("txtans".$request->tans2);
        $obj->save();

    
        $obj=Test::where("test_id",$request->testid)->first();
        $obj->status="complete";
        $obj->band=$request->txtband;
        $obj->save();

        return redirect("/employee/writing/viewwritingtest/".$type);

    }
    public function viewwrittingtest($type)
    {   
        // dd(Session::get('empid'));
        $testdata = Test::select("*")->leftjoin("user","user.user_id","=","test.user_id")->leftjoin("employee","employee.emp_id","=","test.emp_id")->where("employee.emp_id",Session::get('empid'))->orwhere("status","Assigned")->where("type",$type)->get();
        return View('employee.writing.writingtest',compact('testdata'));
    }
    public function detailtest($id)
    {   
        $singledata = Test::select("*")->leftjoin("user","user.user_id","=","test.user_id")->leftjoin("employee","employee.emp_id","=","test.emp_id")->where("test.test_id",$id)->first();
        $answerdata = WrittingAns::select("*")->leftjoin("test","test.user_id","=","writting_answer.test_id")->where("writting_answer.test_id",$id)->get();
        return View('employee.writing.writtingtestdetail',compact('singledata','answerdata','id'));
       
    }

}
