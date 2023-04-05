<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerHiringController extends Controller
{
    public function index(Request $request)
    {
        return view('employer.hiring');
    }
}
