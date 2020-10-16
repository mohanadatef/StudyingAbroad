<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Call_Us;

class CallUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function indexcallus()
    {
        $call_us = Call_Us::all();
        return view('admin.call_us.call_us_index',compact('call_us'));
    }
    public function deletecallus($id)
    {
        $callus = Call_Us::find($id);
        $callus->delete();
        return redirect()->back()->with('message', 'Delete request Is Done!');
    }
}

?>