<?php

namespace App\Http\Controllers;
use App\Models\firstcodes;


use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        $data=firstcodes::all();
        return view('tests.index',compact('data'));
    }
}
