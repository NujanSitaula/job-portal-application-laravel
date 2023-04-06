<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hiring;

class JobSearchController extends Controller
{
    public function index(Request $request)
    {
        $hiringQuery = $request->jobs;
        $hiringLocation = $request->location;
        $hiringCategory = $request->category;

       $hirings = Hiring::orderBy('id', 'desc');

       if($hiringQuery != null){
          $hirings = $hirings->where('title', 'like', '%'.$hiringQuery.'%');
       }

        if($hiringLocation != null){
            $hirings = $hirings->where('location', 'like', '%'.$hiringLocation.'%');
        }

        if($hiringCategory != null){
           $hirings = $hirings->where('category', 'like', '%'.$hiringCategory.'%');
        }

        $hirings = $hirings->paginate(10);
        $hirings = $hirings->appends($request->all());

        return view('frontend.jobSearch', compact('hirings'));
    }
}
