<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likes;

class LikesController extends Controller
{
    public function viewlikes($likeid=null)
    {   
        if($likeid==null)
        {
            $likedata = Likes::select("*")->leftjoin("article","article.article_id","=","likes.article_id")->leftjoin("user","user.user_id","=","likes.user_id")->get();
        }
        else
        {
            $likedata = Likes::select("*")->leftjoin("article","article.article_id","=","likes.article_id")->leftjoin("user","user.user_id","=","likes.user_id")->where("article.article_id",$likeid)->get();
        }
        return View('admin.likes.viewlikes',compact('likedata'));
    }
}
