<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;

class LocationController extends Controller
{
    public function state()
    {
        return View('admin.location.state');
    }
    public function city()
    {
        $statedata = State::all();
        return View('admin.location.city',compact('statedata'));
    }
    public function viewstate()
    {
        $statedata = State::all();
        return View('admin.location.viewstate',compact('statedata'));
    }
    public function viewcity()
    {
        $citydata = City::select("*")->leftjoin("state","state.state_id","=","city.state_id")->get();
        return View('admin.location.viewcity',compact('citydata'));
    }
    public function updatestate($id)
    {
        $singledata = State::where("state_id",$id)->first();
        return View('admin.location.updatestate',compact("singledata"));
    }
    public function editstate(Request $request)
    {
        $id=$request->updateid;

        if($request->has("statename"))
        {
            $statename = $request->statename;
        }
        else
        {
            $statename = $request->statename;
        }
        $statename = $request->statename;
            //insert
            $obj = State::where("state_id",$id)->first();
            $obj->state_name = $statename;
            $obj->save();
            return redirect('admin/location/viewstate')->with("message","State Updated Successfully");
    }
    public function updatecity($id)
    {
        $singledata = City::where("city_id",$id)->first();
        $statedata = State::all();
        return View('admin.location.updatecity',compact("singledata","statedata"));
    }
    public function editcity(Request $request)
    {
        $id=$request->updateid;

        if($request->has("cityname"))
        {
            $cityname = $request->cityname;
        }
        else
        {
            $cityname = $request->cityname;
            $stateid = $request->statename;
        }
        $cityname = $request->cityname;
        $stateid = $request->statename;
        //insert
        $obj =  City::where("city_id",$id)->first();
        $obj->city_name = $cityname;
        $obj->state_id = $stateid;
        $obj->save();
        return redirect('admin/location/viewcity')->with("message","City Updated Successfully");
    }
    public function insertstate(Request $request)
    {
        $result = State::select("*")->where("state_name",$request->statename)->get();
        if(count($result)<=0)
        {
            $statename = $request->statename;
            //insert
            $obj = new State();
            $obj->state_name = $statename;
            $obj->save();
            return redirect('admin/location/state')->with("message","State Inserted Successfully");
        }
        else
        {
            return redirect('admin/location/state')->with("message","State Already Exist!");  
        }
        

      
    }
    public function insertcity(Request $request)
    {
        $result = City::select("*")->where("city_name",$request->cityname)->get();
        if(count($result)<=0)
        {
            $cityname = $request->cityname;
            $stateid = $request->statename;
            //insert
            $obj = new City();
            $obj->city_name = $cityname;
            $obj->state_id = $stateid;
            $obj->save();
            return redirect('admin/location/city')->with("message","City Inserted Successfully"); 
        }
        else
        {
            return redirect('admin/location/state')->with("message","City Already Exist!");  
        }

        $cityname = $request->cityname;
        $stateid = $request->statename;
        //insert
        $obj = new City();
        $obj->city_name = $cityname;
        $obj->state_id = $stateid;
        $obj->save();
        return redirect('admin/location/city');
    }
    public function deletestate(Request $request)
    {
        
        $id = $request->deleteid;
        State::where("state_id",$id)->delete();
        return redirect('admin/location/viewstate')->with("message","State Deleted Successfully");;
    }
    public function deletecity(Request $request)
    {
        $id = $request->deleteid;
        City::where("city_id",$id)->delete();
        return redirect('admin/location/viewcity')->with("message","City Deleted Successfully");
    }
    
}
