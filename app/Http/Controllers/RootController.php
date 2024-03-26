<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Job;
use App\Models\Mastery;


use Illuminate\Http\Request;

class RootController extends Controller
{
    public function index(){
        $about = About::all();
        $job = Job::all();
        $talent = Mastery::all();
        return view('root.my_portfolio')->with(['about' =>$about, 'job' => $job, 'skills' => $talent]);
    }
}
