<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListeningTest;
use App\Models\WrittingTest;

class ListeningTestController extends Controller
{
    public function addlisteningtest()
    {
        $writtingtestdata = WrittingTest::select("*")->where("type","Reading")->orwhere("type","Listening")->get();
        return View('admin.listeningtest.addlisteningtest',compact('writtingtestdata'));
    }
    public function viewlisteningtest()
    {
        $listestdata = ListeningTest::select("*")->leftjoin("writting_test","writting_test.u_test_id","=","listening_test.u_test_id")->get();
        return View('admin.listeningtest.viewlisteningtest',compact('listestdata'));
    }
    public function detaillistning($id)
    {

        $listestdata = ListeningTest::where("l_test_id",$id)->first();
        $ltestid = $listestdata->u_test_id;
        $writingdata = WrittingTest::select("*")->where("u_test_id",$ltestid)->first();
        return View('admin.listeningtest.detaillistening',compact('listestdata','writingdata'));
    }
    public function updatelisteningtest($id)
    {
        $writtingtestdata = WrittingTest::where("type","Listening")->orwhere("type","Reading")->get();
        $singledata = ListeningTest::where("l_test_id",$id)->first();
        return View('admin.listeningtest.updatelisteningtest',compact("singledata","writtingtestdata"));
    }
    public function deletelisteningtest(Request $request)
    {
        $id = $request->deleteid;
        ListeningTest::where("l_test_id",$id)->delete();
        return redirect('/admin/listeningtest/viewlisteningtest')->with("message","Listening Test Deleted Successfully");
    }
    public function editlisteningtest(Request $request)
    {
        $id=$request->updateid;
        $oldaudio=$request->oldaudio;
        if($request->has("audio"))
        {
            unlink(public_path('/uploads/audio/').$oldaudio);
            $audio = $request->audio;
            $ext = $audio->extension();//jpg
            $filename = time().rand(1111,9999).".".$ext;//53615611425.jpg
            $audio->move(public_path('/uploads/audio/'),$filename);
        }
        else
        {
            $filename=$oldaudio;
        }
            
            $audio = $filename;
           
            $u_test_id = $request->title;
            $description = $request->desc;
            $time = $request->time;
            $isactive = $request->radio1;
            $paragraph1 = $request->paragraph1;
            $paragraph2 = $request->paragraph2;
            $paragraph3 = $request->paragraph3;
            $type  =$request->type;
            //insert
            $obj = ListeningTest::where("l_test_id",$id)->first();
            $obj->audio_file = $audio;
    
            $obj->u_test_id = $u_test_id;
            $obj->description = $description;
            $obj->time = $time;
            $obj->isactive = $isactive;
            $obj->paragraph1 = $paragraph1;
            $obj->paragraph2 = $paragraph2;
            $obj->paragraph3 = $paragraph3;
            $obj->type = $type;
            $obj->save();
            return redirect('admin/listeningtest/viewlisteningtest')->with("message","Listening Test updated Successfully");
    }
    public function insertlisteningtest(Request $request)
    {

        $result = ListeningTest::select("*")->where("u_test_id",$request->title)->get();
        if(count($result)<=0)
        {
            
            
            if($request->has("audio"))
            {
                    $audio = $request->audio;
                    $ext = $audio->extension();//jpg
                    $filename = time().rand(1111,9999).".".$ext;//53615611425.jpg
                    $audio->move(public_path('/uploads/audio/'),$filename);
                    $audio = $filename;
            }
            else
            {
                $audio = null;
            }
           
           
            $u_test_id = $request->title;
            $description = $request->desc;
            $time = $request->time;
            $isactive = $request->radio1;
            $paragraph1 = $request->paragraph1;
            $paragraph2 = $request->paragraph2;
            $paragraph3 = $request->paragraph3;
            $type  =$request->type;
            //insert
            $obj = new ListeningTest();
            $obj->audio_file = $audio;
            
            $obj->u_test_id = $u_test_id;
            $obj->description = $description;
            $obj->time = $time;
            $obj->isactive = $isactive;
            $obj->paragraph1 = $paragraph1;
            $obj->paragraph2 = $paragraph2;
            $obj->paragraph3 = $paragraph3;
            $obj->type = $type;
            $obj->save();
            return redirect('admin/listeningtest/addlisteningtest')->with("message","Listening Test Inserted  Successfully");
        }
        else
        {
            return redirect('admin/listeningtest/addlisteningtest')->with("message","Listening Test Title Already Exist!");
        }

        
    }

}
