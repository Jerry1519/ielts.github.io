<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Employee;

class TestController extends Controller
{
  public function viewtest($type)
  {
    $testdata = Test::select("*")->leftjoin("user","user.user_id","=","test.user_id")->leftjoin("employee","employee.emp_id","=","test.emp_id")->where("type",$type)->get();
    return View('admin.test.viewtest',compact('testdata'));
  }
  public function detailtest($id)
  {
    $empdata = Employee::all();
    $singledata = Test::select("*")->where("test_id",$id)->leftjoin("user","user.user_id","=","test.user_id")->leftjoin("employee","employee.emp_id","=","test.emp_id")->first();
    return View('admin.test.detailtest',compact('singledata','empdata'));
  }
  public function inserttest(Request $request)
  {
        $test_id = $request->testid;
        $type = $request->type;
        //dd($type);
        $status = "Assigned";
        $emp = $request->emp;
        $obj = Test::where("test_id",$test_id)->first();
        $obj->test_id = $test_id; 
        $obj->status = $status;
        $obj->emp_id = $emp;
        $obj->save();
        return redirect('admin/test/viewtest/'.$type);
  }
}
