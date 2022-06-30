<?php

namespace App\Http\Controllers;
use App\Models\Login;
use App\Models\Userm;
use App\Models\Order;
use App\Models\Employee;
use Illuminate\Http\Request;
use Session;
use App\Models\Article;
class AdminLoginController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function createaccount()
    {
        return view('admin.auth.createaccount');
    }
    
    public function changepassword(Request $request)
    {
        return view('admin.auth.changepassword');
    }
    public function changepasswordins(Request $request)
    {
        $olpassword = $request->oldpass;
        $newpassword = $request->newpass;
        $id= Session::get("id");

        $result = Login::select("*")->where("login_id",$id)->where("pass",$olpassword)->get();

        if(count($result)<=0)
        {
            return redirect('/admin/changepassword')->with("message","Password not match");
        }
        else
        {
            $obj = Login::select("*")->where("login_id",$id)->first();
            $obj->pass = $newpassword;
            $obj->save();
            return redirect('/login')->with("message","Password Updated! Please Relogin!!");
        }
    }
    public function checkloginadmin(Request $request)
    {
        $username = $request->txtusername;
        $password = $request->txtpassword;
         
        $result = Login::select("*")->where("username",$username)->where("pass",$password)->get();

        $num = count($result);

        if($num<=0)
        {
            return redirect('/login')->with("message","Username or Paaword not match");
        }
        else
        {
            Session::put("isadminlogin","yes");
            foreach($result as $row)
            {
                Session::put("name",$row->name);
                Session::put("img",$row->img);
                Session::put("id",$row->login_id);
                Session::put("email",$row->email);
                
            }
            return redirect('/admin/dashboard');
        }
    }
    public function logout()
    {
        Session::forget("name");
        Session::forget("id");
        Session::forget("img");
        Session::forget("email");
        return redirect('/login');
    }
    public function dashboard()
    {
        $orderdata = Order::select("*")->leftjoin("user","user.user_id","=","orders.user_id")->leftjoin("city","city.city_id","=","orders.city_id")->get();
        $order = Order::all();
        $userdata = Userm::all();
        $empdata = Employee::all();
        $articledata = Article::all();
        return view('admin.auth.dashboard',compact('userdata','orderdata','order','empdata','articledata'));
    }
    public function forgetpassword()
    {
        return view('admin.auth.forgetpassword');
    }
    public function checkpassword(Request $request)
    {
        $email = $request->email;
        $result = Login::select("*")->where("email",$email)->get();
        $num = count($result);

        if($num<=0)
        {
            return redirect('/admin/forgetpassword')->with("message","Email not match");
        }
        else
        {
            //Email Password
            foreach($result as $row)
            {
                $rand=rand(1111,9999);
                //update
                $password = $row->pass;
                //
                //
                $details = [
                    'password' => $password,
                ];
                \Mail::to($email)->send(new \App\Mail\MyPasswordMail($details));
                //email
    
    
                Session::put("email",$email);
            }
            //Email Password
            return redirect('/admin/forgetpassword')->with("message","Email send to Your Registred Email");
        }

    }
}
