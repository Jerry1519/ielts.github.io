<?php

namespace App\Http\Controllers;
use App\Models\Test;
use App\Models\Writting;
use App\Models\Answer;
use App\Models\ListeningQue;
use App\Models\ListeningResult;
use App\Models\Speaking;
use App\Models\WrittingAns;
use session;
use Illuminate\Http\Request;

class UserMyTestController extends Controller
{
    public function viewmytest()
    {
        
        $singledata = Test::select("*")->leftjoin("user","user.user_id","=","test.user_id")->leftjoin("employee","employee.emp_id","=","test.emp_id")->where("test.user_id",Session::get("id"))->get();
        return View('clientside.usertest',compact('singledata'));
    }
    public function viewusertest($id)
    {
        $singledata = Test::select("*")->where("test_id",$id)->first();
        $u_test_id=$singledata->u_test_id;

        $writtingdata = Writting::select("*")->where("u_test_id",$u_test_id)->get();

        $writtingans = WrittingAns::select("*")->where("test_id",$id)->get();
        return View('clientside.usertestdetails',compact('writtingdata','writtingans'));
    }
    public function viewusertestspeaking($id)
    {
        $singledata = Test::select("*")->where("test_id",$id)->first();
        $u_test_id=$singledata->u_test_id;
        $speakingdata = Speaking::select("*")->where("u_test_id",$u_test_id)->get();
        $speakingans = Answer::select("*")->where("test_id",$id)->get();
        return View('clientside.usertestdetailspeaking',compact('speakingdata','speakingans'));
        
        
    }
    public function viewusertestreading($id)
    {
        $singledata = Test::select("*")->where("test_id",$id)->first();
        $l_test_id=$singledata->l_test_id;
       // dd($l_test_id);
       
        $readingdata = ListeningQue::select("*")->where("l_test_id",$l_test_id)->get();
        $readingans = ListeningResult::select("*")->leftjoin('listening_que','listening_que.lq_id','=','listening_result.lq_id')->where("test_id",$id)->get();
        if($singledata->status=="Pending")
        {
        $correct=0;
        $wrong=0;
        foreach($readingans as $row)
        {
            if($row->answer==$row->correct_ans)
            {
                $correct++;
            }
            else
            {
                $wrong++;
            }
        }
       
        $band=0;
        if($correct>=11 && $correct<=12)
        {
            $band=4;
        }
        else if($correct>=13 && $correct<=15)
        {
            $band=4.5;
        }
        else if($correct>=16 && $correct<=17)
        {
            $band=5;
        }
        else if($correct>=18 && $correct<=22)
        {
            $band=5.5;
        }
        else if($correct>=23 && $correct<=25)
        {
            $band=6;
        }
        else if($correct>=26 && $correct<=29)
        {
            $band=6.5;
        }
        else if($correct>=30 && $correct<=31)
        {
            $band=7;
        }
        else if($correct>=32 && $correct<=34)
        {
            $band=7.5;
        }
        else if($correct>=35 && $correct<=36)
        {
            $band=8;
        }
        else if($correct>=37 && $correct<=38)
        {
            $band=8.5;
        }
        else if($correct>=39 && $correct<=40)
        {
            $band=9;
        }

        
        $obj = Test::where("test_id",$id)->first();
        $obj->band=$band;
        $obj->status="complete";
        $obj->save();
        }
        else
        {
            $band=$singledata->band;
        }
        return View('clientside.usertestdetailreading',compact('readingdata','readingans','band'));
       
    }
    public function viewusertestlistening($id)
    {
        $singledata = Test::select("*")->where("test_id",$id)->first();
        $l_test_id=$singledata->l_test_id;
       ($l_test_id);
       
        $listeningdata = ListeningQue::select("*")->where("l_test_id",$l_test_id)->get();
        $listeningans = ListeningResult::select("*")->leftjoin('listening_que','listening_que.lq_id','=','listening_result.lq_id')->where("test_id",$id)->get();
        if($singledata->status=="Pending")
        {
        $correct=0;
        $wrong=0;
        foreach($listeningans as $row)
        {
           
            if($row->answer==$row->correct_ans)
            {
                $correct++;
            }
            else
            {
                $wrong++;
            }
           
        }
      //  dd($correct);
        $band=0;
        if($correct>=11 && $correct<=12)
        {
            $band=4;
        }
        else if($correct>=13 && $correct<=15)
        {
            $band=4.5;
        }
        else if($correct>=16 && $correct<=17)
        {
            $band=5;
        }
        else if($correct>=18 && $correct<=22)
        {
            $band=5.5;
        }
        else if($correct>=23 && $correct<=25)
        {
            $band=6;
        }
        else if($correct>=26 && $correct<=29)
        {
            $band=6.5;
        }
        else if($correct>=30 && $correct<=31)
        {
            $band=7;
        }
        else if($correct>=32 && $correct<=34)
        {
            $band=7.5;
        }
        else if($correct>=35 && $correct<=36)
        {
            $band=8;
        }
        else if($correct>=37 && $correct<=38)
        {
            $band=8.5;
        }
        else if($correct>=39 && $correct<=40)
        {
            $band=9;
        }
        
        
        $obj = Test::where("test_id",$id)->first();
        $obj->band=$band;
        $obj->status="complete";
        $obj->save();
        }
        else
        {
            $band=$singledata->band;
        }

        return View('clientside.usertestdetaillistening',compact('listeningdata','listeningans','band'));
        
    }
    
}
