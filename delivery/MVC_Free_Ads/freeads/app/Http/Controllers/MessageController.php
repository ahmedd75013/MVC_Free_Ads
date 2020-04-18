<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    Public function create (Request $request)
    {
        $seller_id=$request['seller_id'];
        dd($seller_id);
        return view('message');
    }
}
