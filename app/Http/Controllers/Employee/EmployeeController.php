<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmployeeApplication;
use App\Models\Hiring;
use Auth;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('employee');
    }

    public function index()
    {
        return view('employee.dashboard');
    }

    public function apply($id)
    {

        $applicationcheck = EmployeeApplication::where('employee_id', Auth::guard('employee')->user()->id)->where('job_id', $id)->count();
        if($applicationcheck > 0){
            return redirect()->back()->with('error', 'You have already applied for this job');
        }
        $jobDetails = Hiring::where('id', $id)->first();
        return view('Frontend.application', compact('id', 'jobDetails', 'applicationcheck'));
    }

    public function applyConfirm(Request $request, $id)
    {
        $request->validate([
            'coverletter' => 'required',
        ]);
        $applicationcheck = EmployeeApplication::where('employee_id', Auth::guard('employee')->user()->id)->where('job_id', $id)->count();
        if($applicationcheck == 0){
            $apply = new EmployeeApplication();
            $apply->employee_id = Auth::guard('employee')->user()->id;
            $apply->job_id = $id;
            $apply->cover_letter =  $request->coverletter;
            $apply->status = 'Applied';
            $apply->save();
        }
        
        return redirect()->route('employee.dashboard')->with('success', 'You have successfully applied for this job');
    }
}
