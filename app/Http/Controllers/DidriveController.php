<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DidriveController extends Controller
{
    //


    public function index(Request $request)
    {
        $in_tpl = [];
        // dd('23423');
        return view('didrive.index', $in_tpl);
        // return view('didrive.app.app', $in_tpl);
    }

    public function index2(Request $request)
    {
        $in_tpl = [];
        // dd('23423');
        return view('didrive.index', $in_tpl);
        // return view('didrive.app.app', $in_tpl);
    }

}
