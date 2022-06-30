<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Likes;
use Session;
use Illuminate\Http\Request;
use DB;

class UserArticleController extends Controller
{
    public function viewarticle()
    {
        $articledata = DB::select("select *,(select count(*) from comments where article_id=article.article_id) as totalcomments,(select count(*) from likes where article_id=article.article_id and status='like') as totallikes from article");
        
        return View('clientside.article',compact('articledata'));
    }
    public function viewarticledetails($id)
    {
        $articledata = DB::select("select *,(select count(*) from comments where article_id=article.article_id) as totalcomments,(select count(*) from likes where article_id=article.article_id and status='like') as totallikes from article");
        $singledata = Article::select("*")->where("article_id",$id)->first();
        $comment = Comment::select("*")->where("article_id",$id)->get();
        $like = Likes::select("*")->where("article_id",$id)->get();
        $commentdata = Comment::select("*")->leftjoin("user","user.user_id","=","comments.user_id")->where("article_id",$id)->get();
        return View('clientside.articledetail',compact('singledata','articledata','commentdata','comment','like'));
    }
    public function insertarticle(Request $request)
    {
        $id  = Session::get("id");
        $articleid = $request->articleid;
        $comment = $request->comment;
        $isdisplay = "Yes";
        $comdatetime = date('Y-m-d H:i:s');

        $obj = new Comment();
        $obj->article_id = $articleid;
        $obj->user_id = $id;
        $obj->comment_text = $comment; 
        $obj->is_display = $isdisplay;
        $obj->com_datetime =  $comdatetime;
        $obj->save();
        return redirect('client/article');
    }
    public function addlikes($id)
    {
        if(Session::has("id"))
        {
            $obj = Likes::where("user_id",Session::get("id"))->where("article_id",$id)->get();
            if(count($obj)<=0)
            {
                $obj = new Likes();
                $obj->article_id=$id;
                $obj->status="Like";
                $obj->user_id=Session::get("id");
                $obj->save();
                return redirect('client/article')->with("message","Article Liked Successfully");
            }
            else
            {
                return redirect('client/article')->with("message","You Liked This Article Already");
            }
        }
        else
        {
            return redirect('client/article')->with("message","Login Please");
        }
    }
}
