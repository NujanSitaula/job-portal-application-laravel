<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmployeeApplication;
use App\Models\Hiring;
use App\Models\EmployeeBookmark;
use App\Mail\WebsiteMailController; // The WebMail class for sending emails
use Auth;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('employee');
    }

    public function index()
    {
        $appliedJobs = EmployeeApplication::where('employee_id', Auth::guard('employee')->user()->id)->count();
        $bookmarkedJobs = EmployeeBookmark::where('employee_id', Auth::guard('employee')->user()->id)->count();
        $approvedJobs = EmployeeApplication::where('employee_id', Auth::guard('employee')->user()->id)->where('status', 'approved')->count();
        $rejectrdJobs = EmployeeApplication::where('employee_id', Auth::guard('employee')->user()->id)->where('status', 'rejected')->count();

        return view('employee.dashboard', compact('appliedJobs', 'bookmarkedJobs', 'approvedJobs', 'rejectrdJobs'));
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
        $checkJob = route('employee.job.applied');
        $subject = 'Job Application Status Update';
        $message = $checkJob;
        $fullname = Auth::guard('employee')->user()->first_name.' '.Auth::guard('employee')->user()->last_name;
        $useremail = Auth::guard('employee')->user()->email;
        \Mail::to($useremail)->send(new WebsiteMailController($subject, $message, 'admin.email.successfullyApplied', ['employer_name' => $fullname]));
        
        return redirect()->route('employee.dashboard')->with('success', 'You have successfully applied for this job');
    }

    public function addBookmark($id)
    {
        $bookmarkCheck = EmployeeBookmark::where('employee_id', Auth::guard('employee')->user()->id)->where('job_id', $id)->count();
        if($bookmarkCheck == 0){
            $bookmark = new EmployeeBookmark();
            $bookmark->employee_id = Auth::guard('employee')->user()->id;
            $bookmark->job_id = $id;
            $bookmark->save();
        }
        else{
            return redirect()->back()->with('error', 'Job has already been added to your bookmark');
            }
        return redirect()->back()->with('success', 'Job has been added to your bookmark');
    }

    public function checkBookmark()
    {
        $bookmarks = EmployeeBookmark::where('employee_id', Auth::guard('employee')->user()->id)->get();
        return view('employee.bookmarks', compact('bookmarks'));
    }

    public function deleteBookmark($id)
    {
        $bookmark = EmployeeBookmark::where('employee_id', Auth::guard('employee')->user()->id)->where('id', $id)->first();
        //dd($bookmark);
        $bookmark->delete();
        return redirect()->back()->with('success', 'Job has been removed from your bookmark');
    }

   
}
