<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Job;

use Illuminate\Http\Request;

class RootController extends Controller
{
    public function index(){
        $about = About::all();
        $job = Job::all();
        return view('root.my_portfolio')->with(['about' =>$about, 'job' => $job]);
    }
}
