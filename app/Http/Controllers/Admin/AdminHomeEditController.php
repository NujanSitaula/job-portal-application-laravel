<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageHomeItems;

class AdminHomeEditController extends Controller
{
    public function index()
    {
        $pageHomeData = PageHomeItems::where('id',1)->first();
        return view('admin.edithome', compact('pageHomeData'));
    }

    public function update(Request $request)
    {

    $HomeImageUpdate = PageHomeItems::where('id',1)->first();

        $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'job_placeholder' => 'required',
            'location_placeholder' => 'required',
            'job_placeholder' => 'required',
            'category_placeholder' => 'required',
            'category_heading' => 'required',
            'category_description' => 'required',
            'isShown' => 'required',
            'job_button' => 'required'
        ]);

        if($request->hasFile('image'))
        {
            $request->validate([
                'image'=>'image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('frontEndAssets/img/'.$HomeImageUpdate->image));

            $ext = $request->file('image')->extension();
            $finalName = 'homepage'.'.'.$ext;

            $request->file('image')->move(public_path('frontEndAssets/img/'),$finalName);

            $HomeImageUpdate->image = $finalName;

        }

        
        $HomeImageUpdate->heading = $request->heading;
        $HomeImageUpdate->description = $request->description;
        $HomeImageUpdate->job_placeholder = $request->job_placeholder;
        $HomeImageUpdate->location_placeholder = $request->location_placeholder;
        $HomeImageUpdate->job_button = $request->job_button;
        $HomeImageUpdate->category_placeholder = $request->category_placeholder;
        $HomeImageUpdate->job_category_heading = $request->category_heading;
        $HomeImageUpdate->job_category_description = $request->category_description;
        $HomeImageUpdate->job_category_status = $request->isShown;
        $HomeImageUpdate->update();

        return redirect()->back()->with('success', 'Home Page Updated Successfully.');
}
}