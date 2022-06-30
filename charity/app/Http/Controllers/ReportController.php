<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ReportController extends Controller
{
    public function viewreport()
    {
        $data=array();
        $start = $month = strtotime('2021-09-01');
        $current=date('Y-m-d');
        $end = strtotime($current);
        while($month < $end)
        {
            $mn = date('Ym',$month);
            $result = DB::select("select * from orders where DATE_FORMAT(orderdatetime,'%Y%m')='$mn'");
            $count=count($result);
            array_push($data,array("month"=>date('F Y', $month),"totalcount"=>$count)); // F = month nam
            $month = strtotime("+1 month", $month);  
        }
        return View('admin.report.viewreport',compact('data'));
    }
}
