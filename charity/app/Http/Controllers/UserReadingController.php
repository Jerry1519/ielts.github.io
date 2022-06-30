<?php

namespace App\Http\Controllers;
use App\Models\ListeningTest;
use App\Models\WrittingTest;
use App\Models\ListeningQue;
use App\Models\Test;
use Session;
use App\Models\ListeningResult;
use Illuminate\Http\Request;

class UserReadingController extends Controller
{
    public function viewreading()
    {
        return View('clientside.reading');
    }
    public function viewreadingtest()
    {
        $singledata = WrittingTest::select("*")->where("type","reading")->get();
        // $singledata = ListeningTest::select("*")->leftjoin("","","","")->where("type","reading")->get();
        return View('clientside.readingtest',compact('singledata'));
    }
    public function viewreadingmain($id)
    {
        $userid = session()->get('id'); 
        Session::get("id");
        $test_start = date('Y-m-d H:i:s');
        $status = "Pending";
        $type = "Reading";

        $singledata = ListeningTest::select("*")->where("u_test_id",$id)->first();
        $ltestid=$singledata->l_test_id;
        

        $obj = new Test();
        $obj->user_id = $userid; 
        $obj->test_start = $test_start;
        $obj->status = $status;
        $obj->type = $type;
        $obj->l_test_id  = $ltestid;
        $obj->save();
        $testid=$obj->test_id;

       // $listeningdata = ListeningQue::select("*")->where("l_test_id",$ltestid)->get();
        $quedata1 = ListeningQue::select("*")->where("l_test_id",$id)->orwhere("paragraph","paragraph1")->get();
        $quedata2 = ListeningQue::select("*")->where("l_test_id",$id)->orwhere("paragraph","paragraph2")->get();
        $quedata3 = ListeningQue::select("*")->where("l_test_id",$id)->orwhere("paragraph","paragraph3")->get();

        $listeningdata = ListeningQue::select("*")->where("l_test_id",$ltestid)->get();

        $listeningdata1 = ListeningQue::select("*")->where("l_test_id",$ltestid)->where("paragraph","paragraph1")->get();
        $listeningdata2 = ListeningQue::select("*")->where("l_test_id",$ltestid)->where("paragraph","paragraph2")->get();
        $listeningdata3 = ListeningQue::select("*")->where("l_test_id",$ltestid)->where("paragraph","paragraph3")->get();
        return View('clientside.viewreadingmain',compact('singledata','quedata1','quedata2','quedata3','listeningdata1','listeningdata2','listeningdata3','listeningdata','testid','ltestid'));
    }
    public function insertreadingans(Request $request)
    {
        $testid=$request->testid;
        $ltestid=$request->ltestid;
        //dd($testid);
        $ltestid1 = Test::select("*")->where("test_id",$testid)->first();
        $ltestid1->test_end = date('Y-m-d H:i:s');
        $ltestid1->save();
      

        $listeningdata = ListeningQue::select("*")->where("l_test_id",$ltestid)->get();
        foreach($listeningdata as $row)
        {
            $obj = new ListeningResult();
            $obj->test_id=$testid;
            $obj->lq_id=$row->lq_id;
            if($row->type=="simple")
            {
                $obj->answer = $request->input('txt'.$row->lq_id);
                if($row->correct_ans==$request->input('txt'.$row->lq_id))
                {
                    $obj->Status="correct";
                }
            }
            else if($row->type=="radio")
            {
                $obj->answer = $request->input('txt'.$row->lq_id);
                if($row->correct_ans==$request->input('txt'.$row->lq_id))
                {
                    $obj->Status="correct";
                }
            }
        
            $obj->save();
            
            
        }
        return redirect("/client/thankyou");
    }
}
