<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ListeningQue;
use App\Models\ListeningTest;

class ListeningQueController extends Controller
{
    public function addlisteningque()
    {
        $listestdata = ListeningTest::select("*")->leftjoin("writting_test","writting_test.u_test_id","=","listening_test.u_test_id")->get();
        return View('admin.listeningque.addlisteningque',compact('listestdata'));
    }
    public function deletelisteningque(Request $request)
        {
            $id = $request->deleteid;
            ListeningQue::where("lq_id",$id)->delete();
            return redirect('/admin/listeningque/viewlisteningque')->with("message","Listening Question Deleted Successfully");
        }
    public function detaillistningque($id)
    {
        $listestdata1 = ListeningTest::select("*")->leftjoin("writting_test","writting_test.u_test_id","=","listening_test.u_test_id")->first();
        $listestdata = ListeningQue::where("lq_id",$id)->first();
        return View('admin.listeningque.detaillistningque',compact('listestdata','listestdata1'));
    }
    public function viewlisteningque()
    {
        // $lisquedata = DB::table("listening_que")
        // ->leftjoin("listening_test","listening_test.l_test_id","=","listening_que.l_test_id")
        // ->select("listening_que.*","listening_test.title")
        // ->get();
        $lisquedata = ListeningQue::select("*")->leftjoin("listening_test","listening_test.l_test_id","=","listening_que.l_test_id")->leftjoin("writting_test","writting_test.u_test_id","=","listening_test.u_test_id")->get();
    
       // $lisquedata = DB::table('listening_que')->leftjoin("listening_test","listening_test.l_test_id","=","listening_que.l_test_id")->select("'listening_que.*','listening_que.description as l_desc'")->get();
        return View('admin.listeningque.viewlisteningque',compact('lisquedata'));
    }
    public function updatelisteningque($id)
    {
            
        $singledata = ListeningQue::where("lq_id",$id)->first();
        
        $listestdata = ListeningTest::select("*")->leftjoin("writting_test","writting_test.u_test_id","=","listening_test.u_test_id")->get();
        
        return View('admin.listeningque.updatelisteningque',compact("singledata","listestdata"));
    }
    public function editlisteningque(Request $request)
    {
        $id=$request->updateid;

        if($request->has("question"))
        {
            $question = $request->question;
        }
        else
        {
            $question = $request->question;
            $type = $request->radio1;
            $paragraph = $request->paragraph;
            $option1 = $request->op1;
            $option2 = $request->op2;
            $option3 = $request->op3;
            $option4 = $request->op4;
            $cans = $request->cans;
            $desc = $request->desc;
            $l_test_id = $request->title;
        }
        $question = $request->question;
        $type = $request->radio1;
        $paragraph = $request->paragraph;
        $option1 = $request->op1;
        $option2 = $request->op2;
        $option3 = $request->op3;
        $option4 = $request->op4;
        $cans = $request->cans;
        $desc = $request->desc;
        $l_test_id = $request->title;
        //insert
        $obj = ListeningQue::where("lq_id",$id)->first();
        $obj->question = $question;
        $obj->paragraph = $paragraph;
        $obj->type = $type;
        $obj->option_1 = $option1;
        $obj->option_2 = $option2;
        $obj->option_3 = $option3;
        $obj->option_4 = $option4;
        $obj->correct_ans = $cans;
        $obj->description = $desc;
        $obj->l_test_id = $l_test_id;
        $obj->save();
        return redirect('admin/listeningque/viewlisteningque')->with("message","Listening Question Updated Successfully");
    }
    public function insertlisteningque(Request $request)
    {

        $result = ListeningQue::select("*")->where("question",$request->question)->get();
        if(count($result)<=0)
        {
            $question = $request->question;
            $type = $request->radio;
            $opt_limit = $request->opt;
            $paragraph = $request->paragraph;
            $option1 = $request->op1;
            $option2 = $request->op2;
            $option3 = $request->op3;
            $option4 = $request->op4;
            $cans = $request->cans;
            $desc = $request->desc;
            $l_test_id = $request->title;
            //insert
            $obj = new ListeningQue();
            $obj->question = $question;
            $obj->type = $type;
            $obj->opt_limit = $opt_limit;
            $obj->paragraph = $paragraph;
            $obj->option_1 = $option1;
            $obj->option_2 = $option2;
            $obj->option_3 = $option3;
            $obj->option_4 = $option4;
            $obj->correct_ans = $cans;
            $obj->description = $desc;
            $obj->l_test_id = $l_test_id;
            $obj->save();
            return redirect('admin/listeningque/addlisteningque')->with("message","Listening Question Inserted Successfully");
        }
        else
        {
            return redirect('admin/listeningque/addlisteningque')->with("message","Listening Question Already Exist!");
        }

    }
}
