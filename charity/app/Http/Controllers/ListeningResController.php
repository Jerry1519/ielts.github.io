<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListeningResult;

class ListeningResController extends Controller
{
   
    public function viewlisteningres()
    {
        $lisresdata = ListeningResult::select("*")->leftjoin("test","test.test_id","=","listening_result.test_id")->leftjoin("listening_que","listening_que.lq_id","=","listening_result.lq_id")->get();
        return View('admin.listeningres.viewlisteningres',compact('lisresdata'));
    }
   
}
