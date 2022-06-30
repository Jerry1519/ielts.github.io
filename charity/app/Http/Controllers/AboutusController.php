<?php

namespace App\Http\Controllers;
use App\Models\Userm;
use App\Models\Package;
use App\Models\Employee;


use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function viewaboutus()
    {
        $userdata = Userm::all();
        $pkgdata = Package::all();
        $teacherdata = Employee::all();
        return View('clientside.aboutus',compact('userdata','pkgdata','teacherdata'));
    }
}