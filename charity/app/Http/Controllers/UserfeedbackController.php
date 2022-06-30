<?php

namespace App\Http\Controllers;
use App\Models\Ufeedback;


use Illuminate\Http\Request;

class UserfeedbackController extends Controller
{
    public function feedback()
    {
        return View('clientside.feedback');
    }

   
    public function insert(Request $request)
    {
        $result = Ufeedback::select("*")->where("name",$request->form_name)->get();
        if(count($result)<=0)
        {
            $image = $request->form_image;
            $ext = $image->extension();//jpg
            $filename = time().rand(1111,9999).".".$ext;//53615611425.jpg
            $image->move(public_path('/uploads/feedback/'),$filename);

            $feedbackimg = $filename;
            $name = $request->form_name;
            $form_opinion = $request->form_opinion;
            $band = $request->band;
        


            //insert
            $obj = new Ufeedback();
            $obj->name = $name;
            $obj->opinion = $form_opinion;
            $obj->image = $feedbackimg;
            $obj->band = $band;
        

            $obj->save();

        return redirect('/client/feedback')->with("message","your feedback is place Successfully");
 
        }
        else
        {
            return redirect('/client/feedback')->with("message","feedback is Allready palced!"); 
        }
       
    }

    
}