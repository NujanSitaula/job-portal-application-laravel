<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hiring;
use App\Models\JobCategory;
use App\Models\JobType;
use App\Models\SalaryRange;
use App\Models\Location;
use App\Models\Experience;
use App\Models\Requirement;

class EmployerHiringController extends Controller
{
    public function index(Request $request)
    {
        $JobType = JobType::all();
        $SalaryRange = SalaryRange::all();
        $Experience = Experience::all();
        $Location = Location::all();
        $JobCategory = JobCategory::all();
        return view('employer.addHiring', compact('JobCategory', 'JobType', 'Location', 'SalaryRange', 'Experience'));
    }

    public function addData(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'tag' => 'required',
            'deadline' => 'required',
            'category' => 'required',
            'type' => 'required',
            'experiance' => 'required',
            'education' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'token' => 'required',
            'fields.*' => 'required',
        ]);

        $hiring = new Hiring();
        $hiring->title = $request->title;
        $hiring->description = $request->description;
        $hiring->location = $request->location;
        $hiring->salary = $request->salary;
        $hiring->tags = $request->tag;
        $hiring->deadline = $request->deadline;
        $hiring->category = $request->category;
        $hiring->type = $request->type;
        $hiring->experiance = $request->experiance;
        $hiring->education = $request->education;
        $hiring->gender = $request->gender;
        $hiring->status = $request->status;
        $hiring->token = $request->token;
        $hiring->save();

        foreach($request->fields as $field)
        {
            $requirements = new Requirement();
            $requirements->requirements = $field;
            $requirements->token = $request->token;

            $requirements->save();
        }



        return redirect()->route('employer.hiring.view')->with('success', 'Hiring Added Successfully');
    }

    public function viewData(Request $request)
    {
        $hiring = Hiring::where('company_id', auth()->user()->id)->get();
        return view('employer.listHiring', compact('hiring'));
    }

    public function editData($id)
    {
        $hiring = Hiring::find($id);
        $JobType = JobType::all();
        $SalaryRange = SalaryRange::all();
        $Experience = Experience::all();
        $Location = Location::all();
        $JobCategory = JobCategory::all();
        return view('employer.editHiring', compact('hiring', 'JobCategory', 'JobType', 'Location', 'SalaryRange', 'Experience'));
    }

    public function updateData(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'tag' => 'required',
            'deadline' => 'required',
            'category' => 'required',
            'type' => 'required',
            'experiance' => 'required',
            'education' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'token' => 'required',
        ]);

        $hiring = Hiring::where('id', $id)->first();
        $hiring->title = $request->title;
        $hiring->description = $request->description;
        $hiring->location = $request->location;
        $hiring->salary = $request->salary;
        $hiring->tags = $request->tag;
        $hiring->deadline = $request->deadline;
        $hiring->category = $request->category;
        $hiring->type = $request->type;
        $hiring->experiance = $request->experiance;
        $hiring->education = $request->education;
        $hiring->gender = $request->gender;
        $hiring->status = $request->status;
        $hiring->token = $request->token;
        $hiring->update();

        if ($request->filled('fields')) {
            foreach ($request->fields as $field) {
                if ($field !== null) {
                $requirements = new Requirement();
                $requirements->requirements = $field;
                $requirements->token = $request->token;
                $requirements->save();
                }
            }
        }


        return redirect()->back()->with('success', 'Hiring Added Successfully');
    }

    public function deleteDataRequirement($id)
    {
        $requirements = Requirement::find($id);
        $requirements->delete();
        return redirect()->back()->with('success', 'Requirement Deleted Successfully');
    }
}
