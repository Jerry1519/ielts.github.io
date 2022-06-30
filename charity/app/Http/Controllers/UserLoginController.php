<?php

namespace App\Http\Controllers;
use App\Models\Userm;
use App\Models\UserPackage;
use Illuminate\Http\Request;
use Session;


class UserLoginController extends Controller
{
    public function login()
    {
        return View('clientside.userlogin');
    }
    public function logout()
    {
        Session::forget("isuserlogin");
        Session::forget("uname");
        Session::forget("email");
        Session::forget("cno");
        return redirect('/client/login');
    }
    public function checklogin(Request $request)
    {
        $username = $request->email;
        $password =  ($request->password);
         
        $result = Userm::select("*")->where("email",$username)->where("password",$password)->get();

        $num = count($result);

        if($num<=0)
        {
            return redirect('/client/login')->with("message","Username or Password not match");
        }
        else
        {
            Session::put("isuserlogin","yes");
            foreach($result as $row)
            {
                Session::put("uname",$row->name);
                Session::put("id",$row->user_id);
                Session::put("email",$row->email);
                Session::put("cno",$row->contact);

                $pkgdata = UserPackage::where("user_id",$row->user_id)->orderBy('user_pkg_id', 'DESC')->take(1)->get();
                if(count($pkgdata)<=0)
                {
                    Session::put("validtest","no");   
                }
                else
                {
                    foreach($pkgdata as $i)
                    {
                        $cdate=date('Y-m-d');
                        $edate=$i->end_date;
                        if(strtotime($edate)>=strtotime($cdate))
                        {
                            Session::put("validtest","yes");   
                        }
                        else
                        {
                            Session::put("validtest","no");   
                        }
                    }
                }


            }

            return redirect('/client/index');
        }
    }
    public function registration()
    {
        return View('clientside.userregistration');
    }
    public function otp()
    {
        return View('clientside.otppopup');
    }
    public function checkotp(Request $request)
    {
        $otp = $request->txtotp;
        $sql = Userm::select("*")->where("email",Session::get("email"))->where("otp",$otp)->get();
        if(count($sql)<=0)
        {
            return redirect("/client/otp")->with("message","OTP not match");
        }
        else
        {
            $obj = Userm::select("*")->where("email",Session::get("email"))->first();
            $obj->isvalid="yes";
            $obj->save();
            return redirect("/client/login");
        }
    }
    public function forgetpassword()
    {
        return View('clientside.userforgetpassword');
    }
    public function insertuser(Request $request)
    {  

        $result = Userm::select("*")->where("email",$request->form_email)->get();
        if(count($result)<=0)
        {
            //imginsert
            $image = $request->img;
            $ext = $image->extension();
            $filename = time().rand(1111,9999).".".$ext;
            $image->move(public_path('/uploads/user/'),$filename);
            //otpinsert
             
             $otp = rand(111111,999999);
           

            $name = $request->username;
            $contact = $request->cno;
            $email = $request->email;
            $profile_pic = $filename;
            $Address = $request->add;
           // $otp = $request->otp;
            $dob = $request->dob;
            $password = ($request->password);
            //insert
            $obj = new Userm();
            $obj->name = $name;
            $obj->contact = $contact;
            $obj->email = $email;
            
            $obj->profile_pic = $profile_pic;
            $obj->Address = $Address;
            $obj->otp = $otp;
            $obj->dob = $dob;
            $obj->password = $password;
            $obj->save();

            //email
            //uybgfndzalseszns
            $details = [
                'otp' => $otp,
            ];
            \Mail::to($email)->send(new \App\Mail\MyOtpMail($details));
            //email


            Session::put("email",$email);
            return redirect('client/otp');
        }
        else
        {
            return redirect('client/registration');
        }
        
    }
}
