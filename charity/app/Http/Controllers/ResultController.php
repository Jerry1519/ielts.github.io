<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Answer;

class ResultController extends Controller
{
    public function addresult()
    {
        $ansdata = Answer::all();
        return View('admin.result.addresult',compact('ansdata'));
    }
    public function viewresult()
    {
        $resdata = Result::select("*")->leftjoin("answer","answer.answer_id","=","result.answer_id")->get();
        return View('admin.result.viewresult',compact('resdata'));
    }
    public function updateresult($id)
    {
        $singledata = Result::where("result_id",$id)->first();
        $ansdata = Answer::all();
        return View('admin.result.updateresult',compact("singledata","ansdata"));
    }
    public function detailresult($id)
    {
        $singledata = Result::where("result_id",$id)->first();
        $ansdata = Answer::where("answer_id",$id)->first();
        return View('admin.result.detailresult',compact("singledata","ansdata"));
    }
    public function deleteresult(Request $request)
    {
        $id = $request->deleteid;
        Result::where("result_id",$id)->delete();
        return redirect('/admin/result/viewresult')->with("message","Results Deleted Successfully");
    }
    public function editresult(Request $request)
    {
        $id=$request->updateid;

        if($request->has("remarks"))
        {
            $remarks = $request->remarks;
        }
        else
        {
            $remarks = $request->remarks;
            $answer_id = $request->ansname;
            $rating = $request->rating;
            $adddatetime = $request->datetime;
        }
        $remarks = $request->remarks;
        $answer_id = $request->ansname;
        $rating = $request->rating;
        $adddatetime = $request->datetime;
        //insert
        $obj =  Result::where("result_id",$id)->first();
        $obj->answer_id = $answer_id;
        $obj->remarks = $remarks;
        $obj->rating = $rating;
        $obj->added_datetime = $adddatetime;
        $obj->save();
        return redirect('admin/result/viewresult')->with("message","Results Updated Successfully");
    }
    public function insertresult(Request $request)
    {

        $result = Result::select("*")->where("answer_id",$request->ansname)->get();
        if(count($result)<=0)
        {
            
        $remarks = $request->remarks;
        $answer_id = $request->ansname;
        $rating = $request->rating;
        $adddatetime = $request->datetime;
        //insert
        $obj = new Result();
        $obj->answer_id = $answer_id;
        $obj->remarks = $remarks;
        $obj->rating = $rating;
        $obj->added_datetime = $adddatetime;
        $obj->save();
        return redirect('admin/result/addresult')->with("message","Results Inserted Successfully");
        }
        else
        {
            return redirect('admin/result/addresult')->with("message","Result Already Exist!");
        }
    }
    
}
