<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employer;
use Illuminate\Support\Facades\DB;

class EmployerDetailsController extends Controller
{
    public function employerDetails($id)
    {
        $employer = Employer::find($id);
        return view('Frontend.employerdetails', compact('employer'));
    }

    public function browseEmployer()
    {
        $employers = Employer::select('employer_name', 'id')->groupBy('id', DB::raw("SUBSTRING(employer_name, 1, 1)"))->orderBy(DB::raw("SUBSTRING(employer_name, 1, 1)"))->get();
        

        $groupedData = collect($employers)->groupBy(function ($item) {
            return strtoupper(substr($item->employer_name, 0, 1));

    });
    return view('Frontend.employerlist', compact('groupedData'));
    }
}
