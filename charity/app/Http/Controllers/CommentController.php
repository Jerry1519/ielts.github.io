<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function viewcomment($articleid=NULL)
    {
        if($articleid==NULL)
        {
            $comdata = Comment::select("*")->leftjoin("article","article.article_id","=","comments.article_id")->leftjoin("user","user.user_id","=","comments.user_id")->get();
        }
        else
        {
            $comdata = Comment::select("*")->leftjoin("article","article.article_id","=","comments.article_id")->leftjoin("user","user.user_id","=","comments.user_id")->where("article.article_id",$articleid)->get();
            
        }
        return View('admin.comment.viewcomment',compact('comdata'));
    }
}
