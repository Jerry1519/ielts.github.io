<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WrittingAns;

class WrittingAnswerController extends Controller
{
    public function viewwrittingans()
    {
        $wriansdata = WrittingAns::select("*")->leftjoin("writting","writting.writting_id","=","writting_answer.writting_id")->leftjoin("test","test.test_id","=","writting_answer.test_id")->get();
        return View('admin.writting_ans.viewwrittingans',compact('wriansdata'));
    }
}
