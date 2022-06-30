<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemController extends Controller
{
    public function viewitem()
    {
        $itemdata = Items::select("*")->leftjoin("orders","orders.order_id","=","items.order_id")->get();
        return View('admin.items.viewitem',compact('itemdata'));
    }
}
