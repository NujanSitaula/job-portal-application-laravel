<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageHomeItems;
use App\Models\JobCategory;
use App\Models\Location;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $HomePageData = PageHomeItems::where('id', 1)->first();
        $JobCategories = JobCategory::get()->take(12);
        $JobCategoriesAll = JobCategory::get();
        $postData = Post::orderBy('id', 'desc')->take(3)->get();

        $JobLocations = Location::get();


        return view('frontend.home', compact('HomePageData', 'JobCategories', 'JobCategoriesAll', 'postData', 'JobLocations'));
    }
}
