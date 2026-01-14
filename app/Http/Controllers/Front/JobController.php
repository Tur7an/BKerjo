<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
     public function index(){
        return view('front.jobs.index');
    }

    public function detail($slug){
        return view('front.jobs.detail', compact('slug'));
    }

}
