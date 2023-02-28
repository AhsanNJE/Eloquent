<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phone;
use DB;

class PhoneController extends Controller
{
    public function index()
    {
        $phone = phone::all();
        // $phone=DB::table('phones')
        //       ->join('eusers','phones.user_id','eusers.id')
        //       ->get();
        return view('phone',compact('phone'));
    }
}
