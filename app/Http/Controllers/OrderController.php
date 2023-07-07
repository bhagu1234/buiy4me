<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $data=OrderDetail::all();
        return view('admin.orders.index',compact('data'));
    }
}
