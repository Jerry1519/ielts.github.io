<?php

namespace App\Http\Controllers;
use App\Models\WrittingTest;
use App\Models\Writting;
use App\Models\WrittingAns;
use App\Models\Test;
use session;
use Illuminate\Http\Request;

class UserWrittingController extends Controller
{
    public function viewwritting()
    {
        return View('clientside.writting');
    }
    public function viewwrittingtest()
    {
        $singledata = WrittingTest::where("type","Writting")->get();
        return View('clientside.writtingtest',compact('singledata'));
    }
    public function insertwrittingans(Request $request)
    {
        
        
         $writtingtestid=$request->writtingtestid;
        //dd($writtingtestid);
         $obj = Test::where("test_id",$writtingtestid)->first();
        //dd($obj->test_end);
         $obj->test_end = date('Y-m-d H:i:s');
         $obj->save();

         
        
        
        if($request->has("task1fans"))
        {
         
          $answerfile1 = $request->task1fans;
          $ext = $answerfile1->extension();//jpg
          $filename1 = time().rand(1111,9999).".".$ext;//53615611425.jpg
          $answerfile1->move(public_path('/uploads/userwrittingansfile/'),$filename1);
        }
        else
        {
            $filename1 = "NULL";
        }

        $writtingid = $request->writtingid;
        $answertext1 = $request->task1ans;
        $answerfile1 = $filename1;
        // $test_id = $request->writtingtestid;
        $test_id = $request->writtingtestid;

        if($request->has("task2fans"))
        {
         
          $answerfile2 = $request->task2fans;
          $ext2 = $answerfile2->extension();//jpg
          $filename2 = time().rand(1111,9999).".".$ext2;//53615611425.jpg
          $answerfile2->move(public_path('/uploads/userwrittingansfile/'),$filename2);
        }
        else
        {
            $filename2 = "NULL";
        }

        $writtingid = $request->writtingid;
        $answertext2 = $request->task2ans;
        $answerfile2 = $filename2;
        // $test_id = $request->writtingtestid;
        $test_id = $request->writtingtestid;


        $obj = new WrittingAns();
        $obj->writting_id = $writtingid;
        $obj->test_id = $test_id;
        $obj->answer_text = $answertext1;
        $obj->answer_file = $answerfile1;
        $obj->save();

        $obj = new WrittingAns();
        $obj->writting_id = $writtingid;
        $obj->test_id = $test_id;
        $obj->answer_text = $answertext2;
        $obj->answer_file = $answerfile2;
        $obj->save();
        return redirect("/client/thankyou");    

    }
    public function viewwrittingmain(Request $request,$id)
    {
        $userid = session()->get('id'); 
        Session::get("id");
        $test_start = date('Y-m-d H:i:s');
        $status = "Pending";
        $type = "Writting";
        $singledata = WrittingTest::select("*")->where("u_test_id",$id)->first();
        $writtingtestid=$singledata->u_test_id;

        $obj = new Test();
        $obj->user_id = $userid; 
        $obj->u_test_id = $writtingtestid;
        $obj->test_start = $test_start;
        $obj->status = $status;
        $obj->type = $type;
        $obj->save();
        $testid=$obj->test_id;

        $singledata = WrittingTest::select("*")->where("u_test_id",$id)->first();
        $writtingdata = Writting::select("*")->where("u_test_id",$id)->get();
        $part1 = Writting::select("*")->where("u_test_id",$id)->where("type","task1")->get();
        $part2 = Writting::select("*")->where("u_test_id",$id)->where("type","task2")->get();
        return View('clientside.viewwrittingmain',compact('singledata','part1','part2','id','testid','writtingdata'));
        
    }
}
