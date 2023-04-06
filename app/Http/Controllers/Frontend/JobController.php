<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Hiring;
use App\Models\Requirement;

class JobController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.singlehiring');
    }
    public function jobDetails($id)
    {
        $jobPost =  Hiring::where('id', $id)->first();
        
        // $jobPost->view_count = $blogPost->view_count + 1;
        // $jobPost->update();

        return view('frontend.singlehiring', compact('jobPost'));
    }
}
