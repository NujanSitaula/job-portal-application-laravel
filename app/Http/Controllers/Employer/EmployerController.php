<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmployeeApplication;


class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('employer');
    }

    public function index()
    {
        return view('employer.dashboard');
    }

    public function payment()
    {
        return view('employer.profile');
    }

    public function viewApplications()
    {
        $applications = EmployeeApplication::with('jobdetails', 'employee')->whereHas('jobdetails', function($query){ $query->where('company_id', auth()->user()->id);})->get();
        
        return view('livewire.chat.create-chat', compact('applications'));
    }

    public function viewApplicants($id)
    {
        $applications = EmployeeApplication::with('jobdetails', 'employee')->whereHas('jobdetails', function($query) use ($id){ $query->where('company_id', auth()->user()->id)->where('job_id', $id);})->get();
        dd($applications);
        return view('employer.applications', compact('applications'));
    }
    
}
