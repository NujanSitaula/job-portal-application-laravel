<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hiring;

class MyJobController extends Controller
{
    // public function index(Request $request)
    // {
    //     return view('frontend.singlehiring');
    // }
    public function jobDetails($id)
    {
        $jobPost = Hiring::where('id',$id)->first();

        // $jobPost->view_count = $blogPost->view_count + 1;
        // $jobPost->update();

        return view('frontend.singlehiring', compact('jobPost'));
    }
}
