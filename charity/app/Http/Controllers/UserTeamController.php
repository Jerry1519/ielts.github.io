<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Userm;
use App\Models\Package;
use App\Models\Article;
use App\Models\Ufeedback;
use Illuminate\Http\Request;

class UserTeamController extends Controller
{
    public function viewteam()
    {
        $teamdata = Employee::all();
        $articledata = Article::all();
        $pkgdata = Package::all();
        $teamdata = Employee::all();
        $singledata = Userm::all();
        $result = Ufeedback::all();
        return View('clientside.team',compact('teamdata','articledata','pkgdata','teamdata','singledata','result'));
    }
    public function teamdetail($id)
    {
        $teamdata = Employee::where("emp_id",$id)->first();
        return View('clientside.teamdetails',compact('teamdata'));
    }
}
