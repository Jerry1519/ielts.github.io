<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPackage;

class UserPackageController extends Controller
{
    public function viewuserpackage()
    {
        $userpkgdata = UserPackage::select("*")->leftjoin("user","user.user_id","=","user_pkg.user_id")->leftjoin("package","package.pkg_id","=","user_pkg.pkg_id")->get();
        return View('admin.user_pkg.viewuserpkg',compact('userpkgdata'));
    }
    
}
