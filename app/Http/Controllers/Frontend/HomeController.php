<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageHomeItems;
use App\Models\JobCategory;
use App\Models\Location;
use App\Models\Post;
use App\Models\Employer;
use App\Models\Hiring;

class HomeController extends Controller
{
    public function index()
    {
        $HomePageData = PageHomeItems::where('id', 1)->first();
        $JobCategories = JobCategory::withCount('jobcatcount')->orderBy('jobcatcount_count', 'desc')->get()->take(12);
        $JobCategoriesAll = JobCategory::get();
        $postData = Post::orderBy('id', 'desc')->take(3)->get();
        $JobLocations = Location::get();
        $employers = Employer::withCount('countEmployer')->orderBy('count_employer_count', 'desc')->get()->take(7);
        $hirings = Hiring::where('isFeatured', 'yes')->inRandomOrder()->take(8)->get();


        return view('frontend.home', compact('HomePageData', 'JobCategories', 'JobCategoriesAll', 'postData', 'JobLocations', 'employers', 'hirings'));
    }
}
