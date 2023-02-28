<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Euser;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $user = Euser::all();
        // $user=DB::table('eusers')
            // ->join('phones','eusers.id','phones.user_id')
            // ->get();
        return view('user',compact('user'));
    }
}
