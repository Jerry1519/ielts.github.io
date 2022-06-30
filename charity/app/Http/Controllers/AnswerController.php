<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class AnswerController extends Controller
{
   public function viewanswer()
   {
       $ansdata = Answer::select("*")->leftjoin("test","test.test_id","=","answer.test_id")->leftjoin("speaking","speaking.que_id","=","answer.que_id")->get();
       return View('admin.answer.viewanswer',compact('ansdata'));
   }
}
