<?php

namespace App\Http\Controllers;
use App\Models\Speaking;
use App\Models\Answer;
use session;
use App\Models\WrittingTest;
use App\Models\Test;
use Illuminate\Http\Request;

class UserSpeakingController extends Controller
{
    public function viewspeaking()
    {
        return View('clientside.speaking');

    }
    public function viewspeakingtest()
    {
        $singledata = WrittingTest::all()->where("type","Speaking");
        return View('clientside.speakingtest',compact('singledata'));
        
    }
    public function viewspeakingmain($id)
    {

        $userid = session()->get('id'); 
        Session::get("id");
        $test_start = date('Y-m-d H:i:s');
        $status = "Pending";
        $type = "Speaking";
        $singledata = WrittingTest::select("*")->where("u_test_id",$id)->first();
        $speakingtestid=$singledata->u_test_id;


        $obj = new Test();
        $obj->user_id = $userid; 
        $obj->test_start = $test_start;
        $obj->status = $status;
        $obj->u_test_id = $speakingtestid;
        $obj->type = $type;
        $obj->save();
        $testid=$obj->test_id;

    
        $singledata = WrittingTest::select("*")->where("u_test_id",$id)->first();
        $que1 = Speaking::select("*")->where("u_test_id",$id)->where("section","intro")->get();
        $que2 = Speaking::select("*")->where("u_test_id",$id)->where("section","que-card")->get();
        $que3 = Speaking::select("*")->where("u_test_id",$id)->where("section","followup")->get();
        $speakingdata = Speaking::select("*")->where("u_test_id",$id)->get();
        return View('clientside.viewspeakingmain',compact('singledata','que1','que2','que3','testid','speakingdata'));
        
    }
    public function insertspeakingans(Request $request)
    {
        //$userid = session()->get('id');
        $id = $request->testid;   
       
        $utestid = Test::select("*")->where("test_id",$id)->first();
        $utestid->test_end = date('Y-m-d H:i:s');
        $utestid->save();

       // $utestid = Test::select("*")->where("test_id",$id)->first();
       // dd($utestid->u_test_id);  
        $question = Speaking::where("u_test_id",$utestid->u_test_id)->get();
        foreach($question as $row)
        {
            $file=$request->input("qfile".$row->que_id);
            $filename="";
            if($file!="")
            {
                $filename = time().$row->que_id.".mp3";
                $file = str_replace('data:audio/wav;base64,', '', $file); 
                file_put_contents(public_path("uploads/answer/").$filename,base64_decode($file));
            }
          
            $obj = new Answer();
            $obj->test_id=$id;
            $obj->que_id=$row->que_id;
            $obj->answer=$filename;
            $obj->remark="Null";
            $obj->answer_time = date('H:i:s');
            $obj->save();
        }
        return redirect("/client/thankyou");
    }
}
