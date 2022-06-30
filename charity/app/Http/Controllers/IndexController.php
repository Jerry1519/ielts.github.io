<?php

namespace App\Http\Controllers;
use session;
use App\Models\Userm;
use App\Models\Employee;
use App\Models\Article;
use App\Models\Ufeedback;
use Illuminate\Http\Request;
use App\Models\Package;

class IndexController extends Controller
{
    public function viewindex()
    {
        $articledata = Article::all();
        $pkgdata = Package::all();
        $teamdata = Employee::all();
        $singledata = Userm::all();
        $result = Ufeedback::all();
        return View('clientside.index',compact('singledata','teamdata','articledata','pkgdata','result'));
    }
}