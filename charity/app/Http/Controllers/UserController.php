<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userm;

class UserController extends Controller
{
    public function viewuser()
    {   
        $userdata = Userm::all();
        return View('user.viewuser',compact('userdata'));
    }
    public function deleteuser(Request $request)
    {
        $id = $request->deleteid;
        Userm::where("user_id",$id)->delete();
        return redirect('/user/viewuser')->with("message","Artserical Deleted Successfully");
    }
    public function detailuser($id)
    {   
        $userdata = Userm::where("user_id",$id)->first();
        return View('user.detailuser',compact('userdata'));
    }
}
