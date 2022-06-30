<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Userm;
use App\Models\Test;
use App\Models\Article;
use Illuminate\Http\Request;
use Session;

class EmployeeLoginController extends Controller
{
    public function emplogin()
    {
        return view('employee.auth.login');
    }
    public function empdashboard()
    {
        
        $testdata = Test::all();
        $userdata = Userm::all();
        $empdata = Employee::all();
        $articledata = Article::all();
        
        return View('employee.auth.empdashboard',compact('userdata','testdata','empdata','articledata'));
    }
    public function empforgetpassword()
    {
        return View('employee.auth.empforgetpassword');
    }
    public function emplogout()
    {
        Session::forget("ename");
        Session::forget("empid");
        Session::forget("e-email");
        Session::forget("empimage");
        return redirect('employee/emplogin');
    }
    public function empchecklogin(Request $request)
    {
        $username = $request->txtusername;
        $password = $request->txtpassword;
         
        $result = Employee::select("*")->where("username",$username)->where("password",$password)->get();

        $num = count($result);

        if($num<=0)
        {
            return redirect('employee/emplogin')->with("message","Username or Password not match");
        }
        else
        {
            Session::put("isemplogin","yes");
            foreach($result as $row)
            {
                Session::put("ename",$row->e_name);
                Session::put("empid",$row->emp_id);
                Session::put("e-email",$row->email);
                Session::put("empimage",$row->empimg);
            }
            return redirect('/employee/empdashboard');
        }
        
    }
}
