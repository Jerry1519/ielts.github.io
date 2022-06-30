<?php

namespace App\Http\Controllers;
use DB;
use session;
use Illuminate\Http\Request;

class UserProgressController extends Controller
{
    public function viewprogress()
    {
        $id = Session::get("id");
        
        $result = DB::select("select avg(`band`) as totalband,`type` from `test` where `user_id` = $id and `band`!='' group by `type`");
        return view('clientside.userprogress',compact('result'));
    }
}
