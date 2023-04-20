<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ResumeEducation;
use Auth;

class EmployeeResumeController extends Controller
{

    public function create(){
        $listEducation =  ResumeEducation::where('employee_id', Auth::guard('employee')->id())->orderBy('start_date', 'desc')->get();
        return view('employee.createresume', compact('listEducation'));
    }
    public function createEducation(Request $request)
    {
        $request->validate([
            'schoolName' => 'required',
            'qualification' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'details' => 'required',
        ]);

        $education = new ResumeEducation();
        $education->employee_id = Auth::guard('employee')->id();
        $education->school_name = $request->schoolName;
        $education->degree = $request->qualification;
        $education->start_date = $request->startDate;
        $education->end_date = $request->endDate;
        $education->details = $request->details;
        $education->save();

        return redirect()->back()->with('success', 'Education added successfully');
    }

    public function createExperience(Request $request)
    {
            $request->validate([
                'companyName' => 'required',
                'position' => 'required',
                'startDate' => 'required',
                'endDate' => 'required',
                'details' => 'required',
            ]);
    }
}
