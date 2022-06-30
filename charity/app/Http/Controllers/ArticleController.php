<?php

namespace App\Http\Controllers;
use session;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Likes;

class ArticleController extends Controller
{
  public function addarticle()
  {
      return View('admin.article.addarticle');
  }
  public function deletearticle(Request $request)
   {
       $id = $request->deleteid;
       $image = $request->deleteimage;

       unlink(public_path('/uploads/article/').$image);

       Article::where("article_id",$id)->delete();
       return redirect('/admin/article/viewarticle')->with("message","Artical Deleted Successfully");
   }
  public function viewarticle()
  {
      $articledata = Article::all();
      return View('admin.article.viewarticle',compact('articledata'));
  }
  public function detailarticle($id)
  {
      $articledata = Article::where("article_id",$id)->first();
      return View('admin.article.detailarticle',compact('articledata'));
  }
  public function updatearticle($id)
  { 
      $singledata = Article::where("article_id",$id)->first();
      return View('admin.article.updatearticle',compact('singledata'));
  }
  public function editarticle(Request $request)
  {
    $id=$request->updateid;
    $oldimage=$request->oldimage;

    if($request->has("img1"))
    {
      unlink(public_path('/uploads/article/').$oldimage);
      $image = $request->img1;
      $ext = $image->extension();//jpg
      $filename = time().rand(1111,9999).".".$ext;//53615611425.jpg
      $image->move(public_path('/uploads/article/'),$filename);
    }
    else
    {
      $filename=$oldimage;
    }
    $articletitle = $request->artitle;
    $description = $request->desc;
    $image = $filename;
    $source = $request->src;
    $ref = $request->rlink;
    $datetime = $request->datetime;
    $userid = $request->Session::get("id");
    dd($userid);
    
    //insert
    $obj = Article::where("article_id",$id)->first();
    $obj->article_title = $articletitle;
    $obj->description = $description;
    $obj->img1 = $image;
    $obj->video_url = $source;
    $obj->ref_link = $ref;
    $obj->article_datetime = $datetime;
    $obj->save();
    return redirect('admin/article/viewarticle')->with("message","Artical Updated Successfully");

  }

  public function insertarticle(Request $request)
  {
     
    $result = Article::select("*")->where("article_title",$request->artitle)->get();
    if(count($result)<=0)
    {
      $image = $request->img1;
      $ext = $image->extension();//jpg
      $filename = time().rand(1111,9999).".".$ext;//53615611425.jpg
      $image->move(public_path('/uploads/article/'),$filename);

      $articletitle = $request->artitle;
      $description = $request->desc;
      $image = $filename;
      $source = $request->src;
      $ref = $request->rlink;
      $datetime = $request->datetime;
      $loginid = Session::get("id");
      
      

      
      //insert
      $obj = new Article();
      $obj->article_title = $articletitle;
      $obj->login_id = $loginid;
      $obj->description = $description;
      $obj->img1 = $image;
      $obj->video_url = $source;
      $obj->ref_link = $ref;
      $obj->article_datetime = $datetime;
      $obj->save();
      return redirect('admin/article/addarticle')->with("message","Artical Inserted Successfully");
    }
    else
    {
        return redirect('admin/article/addarticle')->with("message","Artical already exist!");
    }
  }
  // public function detailcomment($id)
  // {
  //   $comdata = Comment::select("*")->leftjoin("article","article.article_id","=","comments.article_id")->leftjoin("user","user.user_id","=","comments.user_id")->where("comments.user_id",$id)->first();
  //   return View('admin.article.detailcomment',compact('comdata'));
  // }
  // public function detaillike($id)
  // {
  //   $likedata = Likes::select("*")->leftjoin("article","article.article_id","=","likes.article_id")->leftjoin("user","user.user_id","=","likes.user_id")->where("likes.user_id",$id)->first();
  //   return View('admin.article.detaillike',compact('likedata'));
  // }

}
