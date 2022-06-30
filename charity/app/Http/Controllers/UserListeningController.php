<?php

namespace App\Http\Controllers;
use App\Models\WrittingTest;
use session;
use App\Models\ListeningTest;
use App\Models\Test;
use App\Models\ListeningQue;
use App\Models\ListeningResult;
use Illuminate\Http\Request;

class UserListeningController extends Controller
{
    public function viewlistening()
    {
        return View('clientside.listening');

    }
    public function viewlisteningtest()
    {
        $singledata = WrittingTest::select("*")->where("type","listening")->get();
        // $singledata1 = ListeningTest::select("*")->leftjoin("writting_test","writting_test.u_test_id","=","listening_test.u_test_id")->get();
        // dd($singledata1);

        return View('clientside.listeningtest',compact('singledata'));
        
    }
    public function viewlisteningmain($id)
    {
        $userid = session()->get('id'); 
        Session::get("id");
        $test_start = date('Y-m-d H:i:s');
        $status = "Pending";
        $type = "Listening";

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

       
        $listeningdata = ListeningQue::select("*")->where("l_test_id",$ltestid)->get();
        //dd($listeningdata);
        return View('clientside.viewlisteningmain',compact('singledata','listeningdata','testid','ltestid'));
        
    }
    public function insertlisteningans(Request $request)
    {
        $testid=$request->testid;
        $ltestid=$request->ltestid;

        $ltestid2 = Test::select("*")->where("test_id",$testid)->first();
        $ltestid2->test_end = date('Y-m-d H:i:s');
        $ltestid2->save();
        
      

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
