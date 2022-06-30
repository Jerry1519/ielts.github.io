<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;


class AppointmentController extends Controller
{
    public function Appointment()
    {
        return View('clientside.appointment');
    }
    public function insert(Request $request)
    {
        $result = Appointments::select("*")->where("name",$request->form_name)->get();
        if(count($result)<=0)
        {
           

        $name = $request->form_name;
        $form_phone = $request->form_phone;
        $email = $request->form_email;
        $form_image = $request->form_image;
        $appointment_date = $request->form_appontment_date;
        $appointment_time = $request->form_appontment_time;
        $massage = $request->form_message;
        $status = "Pending";


        //insert
        $obj = new Appointments();
        $obj->name = $name;
        $obj->email = $email;
        $obj->phon_no = $form_phone;
        $obj->appointment_date = $appointment_date;
        $obj->appointment_time = $appointment_time;
        $obj->massage = $massage;
        $obj->status = $status;

        $obj->save();

        return redirect('/client/index')->with("message","appointment scheduled Successfully");
 
        }
        else
        {
            return redirect('/client/index')->with("message","appointment  Allready scheduled!"); 
        }
       
    }
        //admin

    public function penappointments()
        {
            $apdata = Appointments::select("*")->where("status","Pending")->get();
            return View('admin.appointments.panappointments',compact('apdata'));
        }
        public function comappointments()
        {
            $apdata = Appointments::select("*")->where("status","Completed")->get();
            return View('admin.appointments.comappointments',compact('apdata'));
        }

        public function apdetails($id)
        {
            $apdata = Appointments::select("*")->where("apo_id",$id)->first();
            return View('admin.appointments.apdetails',compact('apdata'));
        }

        public function status_change_complated($id)
        {          
            $obj = Appointments::where("apo_id",$id)->first();
            $obj->status = "Completed"; 
            $obj->save();
            return redirect('/admin/appointments/penappointments');
        }


}