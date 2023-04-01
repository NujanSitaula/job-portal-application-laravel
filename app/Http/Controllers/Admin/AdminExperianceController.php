<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experiance;

class AdminExperianceController extends Controller
{
    public function index()
    {
        $jobExperianceData = Experiance::get();
        return view('admin.experiance', compact('jobExperianceData'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $experiance = new Experiance();
        $experiance->name = $request->name;
        $experiance->save();

        return redirect()->back()->with('success', 'Experiance Created Successfully');
    }

    public function edit($id)
    {
        $jobExperianceID = Experiance::where('id', $id)->first();
        return view('admin.experianceEdit', compact('jobExperianceID'));
    }

    public function update(Request $request, $id)
    {
        $experiance = Experiance::where('id', $id)->first();

        $request->validate([
            'name' => 'required',
        ]);

        $experiance->name = $request->name;
        $experiance->update();

        return redirect()->route('admin.job.experiance')->with('success', 'Experiance Updated Successfully');
    }

    public function delete($id)
    {
        $experiance = Experiance::where('id', $id)->first();
        $experiance->delete();

        return redirect()->back()->with('success', 'Experiance Deleted Successfully');
    }
}
