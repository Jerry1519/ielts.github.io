<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function addemp()
    {
        return View('admin.employee.addemp');
    }
    public function viewemp()
    {
        $empdata = Employee::all();
        return View('admin.employee.viewemp',compact('empdata'));
    }
    public function updateemp($id)
    {
        
        $singledata = Employee::where("emp_id",$id)->first();
        return View('admin.employee.updateemp',compact("singledata"));

    }
    public function detailemp($id)
    {
        
        $singledata = Employee::where("emp_id",$id)->first();
        return View('admin.employee.detailemp',compact("singledata"));

    }

    public function deleteemp(Request $request)
    {
        $id = $request->deleteid;
        $image = $request->deleteimage;

        unlink(public_path('/uploads/employee/').$image);
        Employee::where("emp_id",$id)->delete();
        return redirect('admin/employee/viewemp')->with("message","Employee Deleted Successfully");
    }
    public function editemp(Request $request)
    {
        $id=$request->updateid;
        $oldimage=$request->oldimage;

        if($request->has("img"))
        {
            unlink(public_path('/uploads/employee/').$oldimage);
            $img = $request->img;
            $ext = $img->extension();
            $filename = time().rand(1111,9999).".".$ext;
            $img->move(public_path('/uploads/employee/'),$filename);

        }
        else
        {
            $filename=$oldimage;
        }
            $empname = $request->empname;
            $contact = $request->contact;
            $email = $request->email;
            $gender = $request->gender;
            $photo = $filename;
            $qualification = $request->qualification;
            $abt_emp = $request->about;
            $exp = $request->experiance;
            $isactive = $request->radio2;
            $username = $request->username;
            $password = $request->password;
            //insert
            $obj =Employee::where("emp_id",$id)->first();
            $obj->e_name = $empname;
            $obj->contact = $contact;
            $obj->email = $email;
            $obj->gender = $gender;
            $obj->empimg = $photo;
            $obj->qualification = $qualification;
            $obj->about_emp = $abt_emp;
            $obj->exp = $exp;
            $obj->isactive = $isactive;
            $obj->username = $username;
            $obj->password = $password;
            $obj->save();
            return redirect('admin/employee/viewemp')->with("message","Employee Updated Successfully");
    }
    public function changestatus($id)
    {
        $data = Employee::select("*")->where("emp_id",$id)->get();
        $status=$data[0]->isactive;
        // dd($status);
        if($status=="No")
        {
            $obj = Employee::where("emp_id",$id)->first();
            $obj->isactive = "Yes";
            $obj->save();
        }
        else
        {
            $obj = employee::where("emp_id",$id)->first();
            $obj->isactive = "No";
            $obj->save();
        }
        return redirect('admin/employee/viewemp');
    }
    public function insertemp(Request $request)
    {  

        $result = Employee::select("*")->where("e_name",$request->empname)->get();
        if(count($result)<=0)
        {
                //imginsert
            $img = $request->img;
            $ext = $img->extension();
            $filename = time().rand(1111,9999).".".$ext;
            $img->move(public_path('/uploads/employee/'),$filename);


            $empname = $request->empname;
            $contact = $request->contact;
            $email = $request->email;
            $gender = $request->gender;
            $photo = $filename;
            $qualification = $request->qualification;
            $abt_emp = $request->about;
            $exp = $request->experiance;
            $isactive = $request->radio2;
            $username = $request->username;
            $password = $request->password;
            //insert
            $obj = new Employee();
            $obj->e_name = $empname;
            $obj->contact = $contact;
            $obj->email = $email;
            $obj->gender = $gender;
            $obj->empimg = $photo;
            $obj->qualification = $qualification;
            $obj->about_emp = $abt_emp;
            $obj->exp = $exp;
            $obj->isactive = $isactive;
            $obj->username = $username;
            $obj->password = $password;
            $obj->save();
            return redirect('admin/employee/addemp')->with("message","Employee Inserted Successfully");
        }
        else
        {
            return redirect('admin/employee/addemp')->with("message","Employee Name Already Exist!");
        }
        
    }
}
